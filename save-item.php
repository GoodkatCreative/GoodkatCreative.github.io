<?php

// Connect to the database
$pdo = new PDO("mysql:host=localhost;dbname=todo", "username", "password");

// Prepare an INSERT statement
$stmt = $pdo->prepare("INSERT INTO items (item) VALUES (:item)");

// Bind the item parameter and execute the statement
$stmt->execute(array(":item" => $_POST["item"]));

// Return a success response
echo "Success";

?>