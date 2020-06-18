<?php
require_once "product.php";

class Vlees extends Product{

    
    public function __construct($productcode){
            parent:: __construct($productcode);
    }
        
    
}


?>



<div class="container">

  <div class="row">
    
      <?php
       $vlees = new Vlees(2);
      ?>
  </div>