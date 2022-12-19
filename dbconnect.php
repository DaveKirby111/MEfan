<?php

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection

class database {

    public function query($query) {

        $dsn = "mysql:
        host=localhost;
        dbname=MEfan;
        user=root;
        password=root";

        $pdo = new PDO($dsn);

        $stmt = $pdo->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}


?>