<?php

require_once "product.php";



class Groente extends Product{

    private $categorie;
    private $productcode;
    


    public function __construct($productcode){
            parent:: __construct($productcode);
    }
        
    
}


?>

<?php


?>

<div class="container">

  <div class="row">
    
      <?php
       $groente1 = new Groente(1);
      ?>
  </div>




