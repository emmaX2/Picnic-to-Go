<?php

  require_once("./config.php");
  
  $sql = "SELECT * FROM product ";
  $result = $conn->query($sql);

  if (isset($_SESSION["id"])){
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo "<div class='row'><div class='col-6'>";
        echo "<p> Productnaam: " . $row["Productnaam"] . "</p>";
        echo "<p> Productomschrijving: " . $row["Productomschrijving"] . "</p>";
        echo "<p> Productprijs: " . $row["Productprijs"] . "</p>";
        echo "<img src='./img/" . $row["Productnaam"] . "/1.jpg' class='card-img-top' alt='afbeelding product'>";
      }
    }
  }
?>