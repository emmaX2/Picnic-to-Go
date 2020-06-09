<?php
    class Database
    {
        function __construct($pdo)
        {
            $this->pdo = $pdo;
        }

        function getDataProduct()
        {
            $query = $this->pdo->prepare('SELECT * FROM Product');
            $query->execute();
            return $query->fetchAll();
        }
    }
?>