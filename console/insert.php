<?php

$servername = "127.0.0.1";
$username = "i7420725";
$password = "a18b8a4dded2d7ca3c42874d7027437d";
$dbname = "i7420725";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 


if (mysqli_select_db($conn, 'i7420725'))
{
    
}


$brand = $_POST['brand'];
$product_type = $_POST['product_type'];
$price = $_POST['price'];
$colour = $_POST['colour'];
$size_small = $_POST['size_small'];
$size_medium = $_POST['size_medium'];
$size_large = $_POST['size_large'];
$one_size = $_POST['one_size'];

$sql = "INSERT INTO clothing_accessories (brand, product_type, price, colour, size_small, size_medium, size_large, one_size) VALUES ('$brand', '$product_type', '$price', '$colour', '$size_small', '$size_medium', '$size_large', '$one_size') ";

if(mysqli_query($conn,$sql))
{
    echo 'DATA INSERTED INTO DATABASE';
}
{
    
}
header("refresh:2; url=index.php");
?>