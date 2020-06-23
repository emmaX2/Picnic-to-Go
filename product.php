<?php
  require_once("./database.php");\
  
  print_r( $_POST );

  class Product{
    private $categorieid;
    private $productcode;
    private $productnaam = null;
    private $productomschrijving = null;
    private $productprijs= null;
    private $productfoto= null;
    private $conn = null;
    

    public function __construct($categorieid){
        $this->categorieid = $categorieid;
        $this->conn = DB::getConnection('PicnicToGo');
        $sql = "select * from product where categorieid=:categorieid";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['categorieid'=>$this->categorieid]);
        $data = $stmt->fetchall(PDO::FETCH_ASSOC);
        for($i=0;$i<count($data);$i++){
            echo "<div class='product_wrapper col-4'>
            <form method='post' action=''>
            <input type='hidden' name='productcode' value=".$data[$i]['productcode']." />
            <div class='image'><img src='data:image/jpeg;base64,".base64_encode($data[$i]['productfoto']). "'/></div>
            <div class='name'>".$data[$i]['productnaam']."</div>
            <div class='description'>".$data[$i]['productomschrijving']."</div>
            <div class='price'>€".$data[$i]['productprijs']."</div>
            <button type='submit' class='buy'>bestel</button>
            </form>
            </div>";
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
  
  
}
        
      
    
  
?>