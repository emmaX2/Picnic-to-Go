<?php

require_once "product.php";



class Groente extends Product{

    private $categorie = 1;
    private $rijBestaat = false;


    public function __construct($productcode){
        
      
      parent:: __construct($productcode);   
        $this->conn = DB::getConnection('PicnicToGo');
        $sql = "select * from categorie where categorieid= 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['categorie'=>$this->categorie]);
        if ($stmt->rowCount() == 1){
            $this->rijBestaat = true;
            $row = $stmt->fetch();
        }
    }
}


?>

<?php

$groente1 = new Groente(1);

?>

<div class="container">

  <div class="row">
    
      <?php
       $groente1->showproduct()
      ?>
  </div>




