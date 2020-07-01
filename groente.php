<?php

require_once "product.php";



class Groente extends Product{

   
    


    public function __construct($categorie){
            parent:: __construct($categorie);
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




