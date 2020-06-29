<?php
require_once "product.php";

class Vriezer extends Product{

    
    public function __construct($categorie){
            parent:: __construct($categorie);
    }
        
    
}


?>



<div class="container">

  <div class="row">
    
      <?php
       $vriezer = new Vriezer(4);
      ?>
  </div>