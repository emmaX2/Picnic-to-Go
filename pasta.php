<?php
require_once "product.php";

class Pasta extends Product{

    
    public function __construct($categorie){
            parent:: __construct($categorie);
    }
        
    
}


?>



<div class="container">

  <div class="row">
    
      <?php
        $pasta1 = new Pasta(7);
      ?>
  </div>