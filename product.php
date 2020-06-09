<?php

   require_once("./config.php");
  
  $sql = "SELECT * FROM product";
  $query = $this->pdo->prepare('SELECT * FROM PicnicToGo');

  
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo "<div class='row'><div class='col-6'>";
        echo "<p> Productnaam: " . $row["productnaam"] . "</p>";
        echo "<p> Productomschrijving: " . $row["productomschrijving"] . "</p>";
        echo "<p> Productprijs: " . $row["productprijs"] . "</p>";
        echo "<img src='./img/" . $row["productfoto"] . "/1.jpg' class='card-img-top' alt='afbeelding product'>";
      }
    }
  
?>