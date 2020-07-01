<?php
require_once "product.php";

class Snacks extends Product{

    
    public function __construct($categorie){
            parent:: __construct($categorie);
    }
        
    
}


?>



<div class="container">

  <div class="row">
    
      <?php
        $snacks = new Snacks(8);
      ?>
  </div>