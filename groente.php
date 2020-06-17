<?php

require_once "product.php";



class Groente extends Product{

    private $categorie;
    private $productcode;
    private $rijBestaat = false;


    public function __construct($productcode){ 
        $this->productcode = $productcode;  
        $this->conn = DB::getConnection('PicnicToGo');
        $sql = "select * from product where  productcode=:productcode and categorieid=1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['productcode'=>$this->productcode]);
        if ($stmt->rowCount() == 1){
            $this->rijBestaat = true;
            $row = $stmt->fetch();
            parent:: __construct($productcode);
            
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
       $groente1->showproduct();
      ?>
  </div>




