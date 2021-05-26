<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsletterSubscription  $newsletterSubscription
     * @return \Illuminate\Http\Response
     */
    public function show(NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsletterSubscription  $newsletterSubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsletterSubscription  $newsletterSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsletterSubscription  $newsletterSubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsletterSubscription $newsletterSubscription)
    {
        //
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
