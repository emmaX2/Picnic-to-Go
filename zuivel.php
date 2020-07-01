<?php
require_once "product.php";

class Zuivel extends Product{

    
    public function __construct($categorie){
            parent:: __construct($categorie);
    }
        
    
}


?>



<div class="container">

  <div class="row">
    
      <?php
        $zuivel1 = new Zuivel(2);
      ?>
  </div>