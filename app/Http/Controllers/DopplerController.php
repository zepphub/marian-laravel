<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class DopplerController extends Controller
{
  private $apikey;
  private $accountName;

  public function __construct(){
    $this->apikey = env('DOPPLER_API_KEY','');
    $this->accountName = env('DOPPLER_ACCOUNT_NAME','');
  }

  function ObtainResult($options, $url, $returnId){
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $headers = $http_response_header;
    $matches = array();
    preg_match('#HTTP/\d+\.\d+ (\d+)#', $headers[0], $matches);
    $statusCode = intval($matches[1]);
    if ($statusCode >= 200 && $statusCode < 300 && $returnId == true) {
      $decodeResult = json_decode($result, true);
      Log::debug("Message : " . $decodeResult['message']  . "\r\n");
      Log::debug( "id de creacion : " . $decodeResult['createdResourceId']);
      return $decodeResult['createdResourceId'];
    } else if ($statusCode >= 200 && $statusCode < 300 && $returnId == false){
      $decodeResult = json_decode($result, true);
      Log::debug( "Message : " . $decodeResult['message']  . "\r\n");
    } else if ($statusCode >= 400) {
      Log::debug( "\r\n**** ERROR ****\r\n");
      Log::debug( "==== HEADERS ====");
      Log::debug($headers);
      Log::debug( "==== BODY ====");
      Log::debug($result);
    } else  {
      Log::debug( "\r\n**** UNEXPECTED STATUS CODE ****\r\n");
      Log::debug( "==== HEADERS ====");
      Log::debug($headers);
      Log::debug( "==== BODY ====");
      Log::debug($result);
    }
  }

  function CreateList($listName){
    $url = "https://restapi.fromdoppler.com/accounts/" . $this->accountName . "/lists";
    $data = array(
      'name' => $listName
      );
    $options = array(
      'http' => array(
        'header' => "Authorization: token " . $this->apikey . "\r\nContent-type: application/json",
        'method' => 'POST',
        'content' => json_encode($data),
        'ignore_errors' => true
      )
    );
    $listId = $this->ObtainResult($options, $url, true);
    return $listId;
  }

  function SubscribersToList($listId, $subscriberEmail, $fields = []){
    $url = "https://restapi.fromdoppler.com/accounts/" . $this->accountName . "/lists/" . $listId . "/subscribers"; // usar /accounts/$accountName/lists/$listId/subscribers/import en el caso de agregar mas de un subscriptor
    $data = array(
      'email' => $subscriberEmail,
      'fields' => $fields
    );

    $options = array(
      'http' => array(
        'header' => "Authorization: token " . $this->apikey . "\r\nContent-type: application/json\r\n",
        'method' => 'POST',
        'content' => json_encode($data),
        'ignore_errors' => true
      )
    );
    $this->ObtainResult($options, $url, false);
  }

  //$apikey = 'Api Key';
  //$accountName = 'Nombre de cuenta';
  //$htmlCode = 'Tu codigo html aqui';
  //$Subscriber = 'Email del subscriptor';
  //$fromEmail = 'Email del remitente';
  //$replyToEmail = 'Email de respuesta';

  //$listId = CreateList($apikey, $accountName, "lista creada por api");

  //SubscribersToList($apikey, $accountName, $listId, $Subscriber);
}
