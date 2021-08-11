<?php

namespace App\Http\Controllers;

use App\Models\FormQuery;
use Illuminate\Http\Request;
use App\Http\Requests\FormQueryRequest;

class FormQueryController extends DopplerController
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormQueryRequest $request)
    {
      $formquery = new FormQuery();
      $formquery->firstname = $request->get('firstname');
      $formquery->lastname = $request->get('lastname');
      $formquery->email = $request->get('email');
      $formquery->phone = $request->get('phone');
      $formquery->query = $request->get('query');

      $subscriber = $request->get('email');
      $listid = env('DOPPLER_CONTACTO_LIST_ID','');
      $fields = [];
      $fields[] = array("name" => "FIRSTNAME", "value" => $request->get('firstname'));
      $fields[] = array("name" => "LASTNAME", "value" => $request->get('lastname'));
      $fields[] = array("name" => "Whatsapp", "value" => $request->get('phone'));
      $fields[] = array("name" => "Consulta", "value" => $request->get('query'));
      $this->SubscribersToList($listid, $subscriber, $fields);

      $formquery->save();
      $message = 'Tu consulta ha sido registrada. Nos contactaremos a la brevedad.';

      //return Response::json($response)->withMessage($message);
      return response()->json(['success'=>$message]);
    }

    public function csv()
    {
      $form_queries = FormQuery::all('firstname','lastname','email','phone','query','created_at');

      $headers = array(
              "Content-type" => "text/csv",
              "Pragma" => "no-cache",
              "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
              "Expires" => "0"
          );

      $columns = array('Nombre', 'Apellido', 'E-mail', 'Telefono', 'Consulta', 'Fecha');

      $callback = function() use ($form_queries, $columns)
      {
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach($form_queries as $form_query) {
            fputcsv($file, $form_query->toArray());
        }
        fclose($file);
      };

      return response()->streamDownload($callback, 'consultas-' . date('d-m-Y-H:i:s').'.csv', $headers);
    }
}
