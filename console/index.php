<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stock Management Console Development</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
              
<style>
h1 {
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
    color: black;
}
h4 {
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
    color: black;   
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
body  {
    
    background-color: #cccccc;
}

        </style>
      
  </head>
    <body>
<tbody>

  
    <div class="container-fluid">
      <header style="background: white;">
          <div class="text-center">
              <h1 class="text-center">SOSA</h1>
          <h4>The online shopping store for Clothes and Accesories</h4>
          </div>
        </header>  
        <br>
        
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SOSA</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Men's Clothing</a></li>
      <li><a href="#">Men's Accessories</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
      
          <div>
        <div>
    
 <form action="insert.php" method="post">
     
     <br>
     <br>
            <h4> Add a new record below:</h4>
            Brand : <input type="text" name="brand" required>
            <br>
            Product_type : <input type="text" name="product_type" required>
            <br>
            Price : <input type="number" name="price" required>
            <br>
            Colour : <input type="text" name="colour" required>
            <br>
            Size_s : <input type="number" name="size_small" required>
            <br>
            Size_m : <input type="number" name="size_medium" required>
            <br>
            Size_l : <input type="number" name="size_large" required>
            <br>
            One_size : <input type="number" name="one_size" required>
            <br>
                <input type="submit" value="Submit">
            
            
            </form>
        </div>
        </div>
        
        <br>
        <br>
    
    
        <table class="table table-hover">
  <thead>
      <tr>
        <th>itemcode_id</th>
        <th>Brand</th>
        <th>Product_type</th>
        <th>Price (£)</th>
        <th>Colour</th>
        <th>Size_S</th>
        <th>Size_M</th>
        <th>Size_L</th>
        <th>One_size</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
      
    </thead>
    <tbody>
        
  <div>   
      <h4>Search item:</h4>
<form  method="post" action="search.php?go"  id="searchform"> 
      <input  type="text" name="name" required> 
      <input  type="submit" name="submit" value="Search">
</form>
        </div>
        
        <?php
        
        //showing tables
    
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

$sql = "SELECT itemcode_id, brand, product_type, price, colour, size_small, size_medium, size_large, one_size FROM clothing_accessories";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
     echo "<tr>
        <td>" . $row['itemcode_id'] . "</td>
        <td>" . $row['brand'] . "</td>
        <td>" . $row['product_type'] . "</td>
        <td>" . $row['price'] . "</td>
        <td>" . $row['colour'] . "</td>
        <td>" . $row['size_small'] . "</td>
        <td>" . $row['size_medium'] . "</td>
        <td>" . $row['size_large'] . "</td>
        <td>" . $row['one_size'] . "</td>;
        <td><a href=update.php?id=". $row['itemcode_id'].">Update</a></td>
        <td><a href=delete.php?id=". $row['itemcode_id'].">Delete</a></td>
        </tr>";
        
        
    
        ?>
        
            </tbody>
         
            
        <?php
    }
    
    
} else {
    echo "0 results";
     
}
$conn->close();

?>    
        
        
        </table>  
    </div>
        </tbody>
    </body>
</html>