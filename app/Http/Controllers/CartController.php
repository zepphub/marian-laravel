<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    private function total($services)
    {
      $total = 0;
      foreach ($services as $key => $service){
        $total += $service->price_raw();

        end($services);
        if ($key === key($services))
          $total = $service->price_symbol() . $total;
      }

      return $total;
    }

    /**
     * Display a listing of orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      $cart_items = $request->session()->get('cart.items', []); // Second argument is a default value
      $total = $this->total($cart_items);

      return view('front.carrito', ['cart_items'=>$cart_items, 'total'=>$total]);
    }

    public function add(Request $request, Service $service)
    {
      $cart_items = $request->session()->get('cart.items', []); // Second argument is a default value
      if (empty($cart_items)){
        $cart_items = $request->session()->put('cart.items', [$service]);
      } else {
        $cart_items = $request->session()->push('cart.items', $service);
      };

      return redirect()->route('carrito');
    }

    public function delete(Request $request, Int $key)
    {
      $cart_items = $request->session()->pull('cart.items', []); // Second argument is a default value
      unset($cart_items[$key]);
      session()->put('cart.items', $cart_items);

      return redirect()->route('carrito');
    }
}
