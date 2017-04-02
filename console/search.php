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
    font-family: "Times New Roman", Times, serif;
    color: white;
}
h5 {
    font-family: "Times New Roman", Times, serif;
    color: white;   
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

        </style>
      
  </head>
    <body>
<tbody>

  
    <div class="container-fluid">
      <header style="background: #333;">
          <div class="text-center">
              <h1 class="text-center">SOSA</h1>
          <h5>The online shopping store for Clothes and Accesories</h5>
          </div>
        </header>  
        
<ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#women">Women</a></li>
    <li><a href="#men">Men</a></li>
    <li style="float:right"><a class="active" href="#about">Help</a></li>
    <li style="float:right"><a class="active" href="#about">My Account</a></li>
    <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
        
        
          <div>
        <div>

        </div>
        </div>
<br>
        <br>
    
        <table class="table table-hover">
  <thead>
      <tr>
        <th>itemcode_id</th>
        <th>Brand</th>
        <th>Colour</th>
      </tr>
    </thead>
    <tbody>
        

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

	  if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z 0-9]+/", $_POST['name'])){ 
	  $name=$_POST['name']; 
          
	  //connect  to the database 
          
	  $db=mysql_connect  ("127.0.0.1", "i7420725",  "a18b8a4dded2d7ca3c42874d7027437d") or die ('Not connnected to database: ' . mysql_error()); 
          
	  //-select  the database to use 
          
	  $mydb=mysql_select_db("i7420725"); 
          
	  //-query  the database table 
          
	  $sql="SELECT  itemcode_id, brand, colour FROM clothing_accessories WHERE itemcode_id LIKE '%" . $name .  "%' OR brand LIKE '%" . $name .  "%' OR  colour LIKE '%" . $name ."%' "; 
          
	  //-run  the query against the mysql query function 
          
	  $result=mysql_query($sql); 
          
  //-create  while loop and loop through result set 
          #
	  while($row=mysql_fetch_array($result)){ 
            $itemcode_id=$row['itemcode_id']; 
	          $brand  =$row['brand']; 
	          $colour=$row['colour']; 
          //-display the result of the array 
	  echo "<ul>\n"; 
	  echo "<tr>
        <td>" . $itemcode_id . "</td>
        <td>" . $brand . "</td>
        <td>" . $colour . "</td>
        </tr>";
	  echo "</ul>"; 
	  } 
	  } 	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  } 
	  } 
	?> 
        
            </tbody>
        </table>
    </div>
        </tbody>
    </body>
</html>