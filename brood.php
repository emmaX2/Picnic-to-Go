<?php
require_once "product.php";

class Brood extends Product{

    
    public function __construct($categorie){
            parent:: __construct($categorie);
    }
        
    
}


?>



<div class="container">

  <div class="row">
    
      <?php
        $brood1 = new Brood(4);
      ?>
  </div>