<?php
  require_once("./database.php");

  $product1 = new Product(1);
  $product2 = new Product(2);
  $product3 = new Product(3);
  $product4 = new Product(6);


  ?>
  <div class="container">

  <div class="row">
    
      <?php
        $product1->showProduct();
        $product2->showProduct();
        $product3->showProduct();
        $product4->showProduct();
      ?>
  </div>
  
<?php
  

  class Product{
    private $productcode;
    private $productnaam = null;
    private $productomschrijving = null;
    private $productprijs= null;
    private $productfoto= null;
    private $rijBestaat = false;
    private $conn = null;
    

    public function __construct(string $productcode){
        $this->productcode = $productcode;
        $this->conn = DB::getConnection('PicnicToGo');
        $sql = "select * from product where productcode=:productcode";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['productcode'=>$this->productcode]);
        if ($stmt->rowCount() == 1){
            $this->rijBestaat = true;
            $row = $stmt->fetch();
            $this->productnaam = $row->productnaam;
            $this->productomschrijving = $row->productomschrijving;
            $this->productprijs = $row->productprijs;
            $this->productfoto = $row->productfoto;
           
        };    
    }

    public function getProductcode(){
      return $this->productcode;
    }

    public function getProductnaam(){
      return $this->productnaam;
    }

    public function getProductomschrijving(){
      return $this->productomschrijving;
    }

    public function getProductprijs(){
      return $this->productprijs;
    }

    public function getProductfoto(){
      return $this->productfoto;
    }

    public function showProduct(){
    echo 
    '<div class="card col-sm-6-md-4-lg-3-xl-2" style="width: 18rem;">
        <img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($this->productfoto). '"/>
        <div class="card-body">
          <h5 class="card-title">' . $this->productnaam . '</h5>
          <p class="card-text">' . $this->productomschrijving . '</p>
          <a href="#" class="btn btn-primary">Bestel!</a>
        </div>
    </div>';


    }
  
  
}
        
      
    
  
?>