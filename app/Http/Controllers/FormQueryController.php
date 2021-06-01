<?php

namespace App\Http\Controllers;

use App\Models\FormQuery;
use Illuminate\Http\Request;
use App\Http\Requests\FormQueryRequest;

class FormQueryController extends Controller
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

      $formquery->save();
      $message = 'Tu consulta ha sido registrada. Nos contactaremos a la brevedad.';


      return redirect()->route('index')->withMessage($message);
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
