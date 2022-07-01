<?php

namespace App\Services;


use GuzzleHttp\Client;

class Api {
  private $mail;
  private $token;
  private $client;
  private $url;
  public function __construct($url) {
    $this->url = $url;
    $this->client = new Client();
    $this->mail = $_SERVER['PAGSEGURO_MAIL'];
    $this->token = $_SERVER['PAGSEGURO_TOKEN'];
   
  }
  
  public function getUri($uri){
    $this->client->get($this->url.$uri);
  }
  
  public function acessToken(){

    // $response = $this->client->request(
    //   'POST',
    //   'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout?email=raul_barossi@hotmail.com&token=CBFF772862D64A528C54ECE6998599CF',
    //   [
    //     'body' => 
    //       '{"currency":"BRL","item: id":"1","item: description":"Bola de gude","item: amount":"1","item: quantity":"35","item: weight":"1","shipping: addressRequired":"rua blau, 13"}',
    //     'headers' => [
    //       'Accept' => 'application/xml',
    //       'Content-Type' => 'application/json',
    //   ],
    // ]);    
    // echo $response->getBody();

    $response = $this->client->request('POST', 'https://sandbox.api.pagseguro.com/oauth2/application', 
    [
      'body' => '{"name":"RaulBarossi"}',
      'headers' => [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
      ],
    ]);
    echo $response->getBody();

    }

  public function getMail() {
    return $this->mail;
  }

  public function getToken() {
    return $this->token;
  }

}