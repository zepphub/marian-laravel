<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;
use App\Http\Requests\NewsletterSubscriptionRequest;


class NewsletterSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions = NewsletterSubscription::paginate(3);

        return view('admin.newsletter', ['subscriptions'=>$subscriptions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsletterSubscriptionRequest $request)
    {
      $newsletter_subscription = new NewsletterSubscription();
      $newsletter_subscription->firstname = $request->get('firstname');
      $newsletter_subscription->lastname = $request->get('lastname');
      $newsletter_subscription->email = $request->get('email');
      $newsletter_subscription->whatsapp = $request->get('whatsapp');

      $newsletter_subscription->save();

      //Subscribe to Doppler List
      //$listId = CreateList($apikey, $accountName, "lista creada por api");
      /* $subscriber = $request->get('email');
      $listid = env('DOPPLER_NEWSLETTER_LIST_ID',''); // Lista "Newsletter"
      $fields = [];
      $fields[] = array("name" => "FIRSTNAME", "value" => $request->get('firstname'));
      $fields[] = array("name" => "LASTNAME", "value" => $request->get('lastname'));
      $fields[] = array("name" => "Whatsapp", "value" => $request->get('whatsapp'));
      $this->SubscribersToList($listid, $subscriber, $fields); */

      $message = 'Gracias por suscribirte al Newsletter.';

      return response()->json(['success'=>$message]);
    }

    public function csv()
    {
      $subscriptions = NewsletterSubscription::all('firstname','lastname','email','whatsapp');

      $headers = array(
              "Content-type" => "text/csv",
              "Pragma" => "no-cache",
              "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
              "Expires" => "0"
          );

      $columns = array('Nombre', 'Apellido', 'E-mail', 'Whatsapp');

      $callback = function() use ($subscriptions, $columns)
      {
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach($subscriptions as $subscription) {
            fputcsv($file, $subscription->toArray());
        }
        fclose($file);
      };

      return response()->streamDownload($callback, 'newsletter-' . date('d-m-Y-H:i:s').'.csv', $headers);
    }
}
