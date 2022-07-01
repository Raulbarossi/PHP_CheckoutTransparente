<?php

namespace App\Controller;

use App\Services\Api;
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use MercadoPago\SDK;
use MercadoPago\Payment;
use MercadoPago\Payer;
use Symfony\Component\HttpFoundation\Request;

class RequisitionsController extends AbstractController
{
  #[Route ("/checkout")]
  public function checkout()
  {
    require searcher(VIEWS_DIR, "Home.php");
    return new Response("");
  }
  #[Route ("/teste")]
  public function teste()
  {
    require searcher(VIEWS_DIR, "Test.php");
    return new Response("");
  }

  #[Route ("/aprovado")]
  public function aprovado()
  {    
    return new Response("");
  }

  #[Route ("/reprovado")]
  public function reprovado(){
    return new Response("Reprovado");
  }


  #[Route ("/process_payment", methods: ['POST'])]
  public function process_payment(Request $request){
    SDK::setAccessToken("TEST-4632276973938194-063004-f08e8128101db52561ede3df065d5203-70507874");
    $payment = new Payment();
    $payment->transaction_amount = (float)$_POST['transactionAmount'];
    $payment->token = $_POST['token'];
    $payment->description = $_POST['description'];
    $payment->installments = (int)$_POST['installments'];
    $payment->payment_method_id = $_POST['paymentMethodId'];
    $payment->issuer_id = (int)$_POST['issuer'];
    $payer = new Payer();
    $payer->email = $_POST['email'];
    $payer->identification = array(
        "type" => $_POST['identificationType'],
        "number" => $_POST['identificationNumber']
    );
    $payment->payer = $payer;
  
    $payment->save();
  
    $response = array(
        'status' => $payment->status,
        'status_detail' => $payment->status_detail,
        'id' => $payment->id
    );
    echo json_encode($response);
    return new Response("");
  }
}

