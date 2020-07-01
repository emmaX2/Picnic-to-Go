<?php
require_once "product.php";

class Alcohol extends Product{

    
    public function __construct($categorie){
            parent:: __construct($categorie);
    }
        
    
}


?>



<div class="container">

  <div class="row">
    
      <?php
        $alcohol = new alcohol(6);
      ?>
  </div>