<?php

// Connect to the database
$pdo = new PDO("https://raw.github.com/Goodkatcreative/goodkatcreative/master/index.html");

// Prepare an INSERT statement
$stmt = $pdo->prepare("INSERT INTO items (item) VALUES (:item)");

// Bind the item parameter and execute the statement
$stmt->execute(array(":item" => $_POST["item"]));

// Return a success response
echo "Success";

?>