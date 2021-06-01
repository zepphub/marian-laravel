<?php

namespace App\Http\Controllers;

use App\Models\TestResult;
use Illuminate\Http\Request;

class TestResultController extends Controller
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

      $testresult->save();
      $message = 'Nos vemos allí.';

      return redirect()->route('test-formulario')->withMessage($message);
    }

    public function csv()
    {
      $test_results = TestResult::all('name','email','selection');

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

      return response()->streamDownload($callback, 'resultados_test-' . date('d-m-Y-H:i:s').'.csv', $headers);
    }
}
