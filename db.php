<?php

$servername = "localhost";
$username = "root";
$password = "root";



try {
    $conn = new PDO("mysql:host=$servername;dbname=dealmaxo_api", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 
