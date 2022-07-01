<?php 

use Artani\Repositories\Layout;
use Artani\Repositories\Component;

?><!--header section--> <?php  
// Novo layout na varável $Home
$Checkout = new Layout;
$Checkout::title('Checkout');
//var_dump(Layout::title('Home'));

$Checkout::descriptions(['Checkout Transparente MercadoPago']);

$Checkout::endHead('Home');
?> <!--body section--> <?php
$Checkout::config('Main');
$Checkout->jsPush(Searcher(PUBLIC_DIR, "Mascara.js"));
$Checkout->jsPush('.https://sdk.mercadopago.com/js/v2');
$Checkout->jsPush(Searcher(PUBLIC_DIR, "checkoutFormMP.js"));
$Checkout->jsPush('.https://kit.fontawesome.com/6e5d5ae39a.js');
$Checkout->jsPush(Searcher(PUBLIC_DIR, "caixaDisplay.js"));
  Component::render($Checkout, 'Checkout');

?> <!--footer section-->  <?php  



$Checkout::config('Footer');


$Checkout::config('endFooter');


$Checkout->endBody();
?>
