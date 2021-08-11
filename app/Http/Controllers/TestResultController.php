<?php

namespace App\Http\Controllers;

use App\Models\TestResult;
use App\Mail\TestResultMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class TestResultController extends DopplerController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $testresult = new TestResult();
      $testresult->selection = $request->get('selection');
      $testresult->name = $request->get('name');
      $testresult->email = $request->get('email');

      $subscriber = $request->get('email');
      $listid = '';
      switch ($request->get('selection')) {
        case "comenzar":
          $listid = env('DOPPLER_TEST_COMENZAR_LIST_ID','');
          break;
        case "mejorar":
          $listid = env('DOPPLER_TEST_MEJORAR_LIST_ID','');
          break;
        case "crecer":
          $listid = env('DOPPLER_TEST_CRECER_LIST_ID','');
          break;
      };
      $fields = [];
      $fields[] = array("name" => "FIRSTNAME", "value" => $request->get('name'));
      $fields[] = array("name" => "LASTNAME", "value" => $request->get('name'));
      Log::debug($subscriber);
      Log::debug($listid);
      Log::debug($request->get('selection'));
      Log::debug($fields);
      $this->SubscribersToList($listid, $subscriber, $fields);

      $testresult->save();
      Mail::to([$testresult->email])->send(new TestResultMail($testresult));
      $message = 'Te enviamos un mail con tu resultado.';

      return response()->json(['success'=>$message]);
    }

    public function csv($selection)
    {
      $test_results = TestResult::all('name','email','selection')->where('selection',$selection);

      $headers = array(
              "Content-type" => "text/csv",
              "Pragma" => "no-cache",
              "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
              "Expires" => "0"
          );

      $columns = array('Nombre', 'E-mail', 'Selección');

      $callback = function() use ($test_results, $columns)
      {
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach($test_results as $test_result) {
            fputcsv($file, $test_result->toArray());
        }
        fclose($file);
      };

      return response()->streamDownload($callback, 'resultados_test-' . strtolower($selection) . "-" . date('d-m-Y-H:i:s').'.csv', $headers);
    }
}
