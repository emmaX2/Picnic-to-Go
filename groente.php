<?php

require_once "product.php";



class Groente extends Product{

    private $categorie;
    private $productcode;
    private $rijBestaat = false;


    public function __construct($productcode){ 
        
            parent:: __construct($productcode);      
    }
}


?>

<div class="container">

  <div class="row">
    
      <?php
        $groente1 = new Groente(1); 
      ?>
  </div>


