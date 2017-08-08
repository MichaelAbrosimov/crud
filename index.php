<?php

$pdo = new PDO("mysql:host=127.0.0.1;dbname=crud", "root", "root");
$sql = "SELECT * FROM article";

$pdo_statement = $pdo->prepare($sql);
$pdo_statement->execute();

$result = $pdo_statement->fetchAll();
foreach ($result as $element) {
    echo $element["name"].$element["created_at"]."<br>";
}