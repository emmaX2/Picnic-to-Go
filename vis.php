<?php
require_once "product.php";

class Vis extends Product{

    
    public function __construct($categorie){
            parent:: __construct($categorie);
    }
        
    
}


?>



<div class="container">

  <div class="row">
    
      <?php
        $vis1 = new Vis(10);
      ?>
  </div>

  