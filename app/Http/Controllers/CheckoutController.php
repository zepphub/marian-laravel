<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal;
use MercadoPago\SDK;
use App\Models\Service;

class CheckoutController extends Controller
{
  private function total($services)
  {
    $total = 0;
    foreach ($services as $key => $service){
      $total += $service->price_raw();
    }

    return $total;
  }

  private function getPaypalLink($links, $rel){
    return array_filter($links, function($v, $k) use ($rel) {
      return $v['rel'] == $rel;
    }, ARRAY_FILTER_USE_BOTH)[1]['href'];
  }

  private function checkoutPaypal(Request $request){
    $cart_items = $request->session()->get('cart.items', []); // Second argument is a default value
    $total = $this->total($cart_items);

    $items = array();
    foreach ($cart_items as $key => $service){
      $items[] = [
        "name"=> $service->name,
        "unit_amount"=>["currency_code"=>"USD",
                        "value"=> strval($service->price_raw())],
        "quantity"=>"1",
        "description"=>"consultoria personalizada",
        "category"=>"DIGITAL_GOODS"
      ];
    }

    $provider = \PayPal::setProvider();
    $provider->setApiCredentials(config('paypal'));
    //$provider->setCurrency('USD');
    $provider->getAccessToken();
    $order = $provider->createOrder([
      "intent"=> "CAPTURE",
      "purchase_units"=> [[
              "amount"=> [
                  "currency_code"=> "USD",
                  "value"=> strval($total),
                  "breakdown"=>["item_total"=>["currency_code"=>"USD",
                                "value"=>strval($total)]]
              ],
              "items"=> $items
      ]],
      "application_context" => [
        "cancel_url" => route('order.cancel'),
        "return_url" => route('order.success'),
        "shipping_preference" => "NO_SHIPPING"
      ]
    ]);

    //dd($order);

    $order_id = $request->session()->put('last_order_id', $order['id']);

    return redirect($this->getPaypalLink($order['links'], 'approve'));
  }

  private function checkoutPaypalSuccess(Request $request){
    $provider = \PayPal::setProvider();
    $provider->setApiCredentials(config('paypal'));
    $provider->getAccessToken();

    $order_id = $request->session()->get('last_order_id', 0);

    $captured = $provider->capturePaymentOrder($order_id); //order id from the createOrder step

    $cart_items = $request->session()->get('cart.items', []); // Second argument is a default value
    $total = $this->total($cart_items);

    return view('front.agendar', ['captured_order' => $captured, 'cart_items'=>$cart_items, 'total'=>$total]);
  }

  private function checkoutPaypalCancel(Request $request){
    $provider = \PayPal::setProvider();
    $provider->setApiCredentials(config('paypal'));
    $provider->getAccessToken();
    $order_id = $request->session()->get('last_order_id', 0);

    $captured = $provider->capturePaymentOrder($order_id); //order id from the createOrder step

    $cart_items = $request->session()->get('cart.items', []); // Second argument is a default value
    $total = $this->total($cart_items);

    return view('front.agendar', ['captured_order' => $captured, 'cart_items'=>$cart_items, 'total'=>$total]);
  }

  public function order(Request $request){
    if(Service::is_argentina()) {
      return $this->checkoutMercadoPago($request);
    } else {
      return $this->checkoutPaypal($request);
    }
  }

  private function checkoutMercadoPago(Request $request){
    \MercadoPago\SDK::setAccessToken(env("MERCADOPAGO_SANDBOX_TOKEN"));

    $preference = new \MercadoPago\Preference();

    $cart_items = $request->session()->get('cart.items', []);
    $total = $this->total($cart_items);

    $items = array();
    foreach ($cart_items as $key => $service){
      $item = new \MercadoPago\Item();
      $item->title = $service->name;
      $item->quantity = 1;
      $item->unit_price = $service->price_raw();
      $items[]=$item;
    }
    $preference->items = $items;
    $preference->save();

    return view('front.checkout_mercadopago', ['preference' => $preference]);
  }


  public function checkoutSuccess(Request $request){
    // convert cart items to calendly items?
    return $this->checkoutPaypalSuccess($request);
  }

  public function checkoutCancel(Request $request){
    // delete cart items
    return $this->checkoutPaypalCancel($request);
  }

  public function checkout(Request $request){
    $is_argentina = Service::is_argentina();

    return view('front.checkout', ['is_argentina' => $is_argentina]);
  }
}
