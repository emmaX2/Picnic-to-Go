<?php
require_once "product.php";

class Frisdrank extends Product{

    
    public function __construct($categorie){
            parent:: __construct($categorie);
    }
        
    
}


?>



<div class="container">

  <div class="row">
    
      <?php
        $frisdrank = new Frisdrank(5);
      ?>
  </div>