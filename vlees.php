<?php
require_once "product.php";

class Vlees extends Product{

    
    public function __construct($categorie){
            parent:: __construct($categorie);
    }
        
    
}


?>



<div class="container">

  <div class="row">
    
      <?php
       $vlees = new Vlees(2);
      ?>
  </div>