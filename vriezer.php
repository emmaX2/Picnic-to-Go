<?php
require_once "product.php";

class Diepvries extends Product{

    
    public function __construct($categorie){
            parent:: __construct($categorie);
    }
        
    
}


?>



<div class="container">

  <div class="row">
    
      <?php
       $diepvries = new Diepvries(9);
      ?>
  </div>