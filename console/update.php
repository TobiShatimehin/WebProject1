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

<?php
         if(isset($_POST['update'])) {
            $dbhost = '127.0.0.1';
            $dbuser = 'i7420725';
            $dbpass = 'a18b8a4dded2d7ca3c42874d7027437d';
             $dbname = 'i7420725';
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Was not able to connect: ' . mysql_error());
            }
             
             $size_small = $_POST['size_small'];
             $size_medium = $_POST['size_medium'];
             $size_large = $_POST['size_large'];
             $one_size = $_POST['one_size'];
            
            $sql = "UPDATE clothing_accessories SET size_small = $size_small, size_medium = $size_medium, size_large = $size_large, one_size = $one_size ". 
               "WHERE itemcode_id='$_GET[id]'" ;

  

            mysql_select_db('i7420725');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
header ("refresh:2; url=index.php");
            mysql_close($conn);
         }else {
            ?>
        <h4>Update Stock:</h4>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Size-Small</td>
                        <td><input name = "size_small" type = "number" 
                           id = "size_small"></td>
                     </tr>
                      
                       <tr>
                        <td width = "100">Size-Medium</td>
                        <td><input name = "size_medium" type = "number" 
                           id = "size_medium"></td>
                     </tr>
                      
                       <tr>
                        <td width = "100">Size-Large</td>
                        <td><input name = "size_large" type = "number" 
                           id = "size_large"></td>
                     </tr>
                      
                       <tr>
                        <td width = "100">One-size</td>
                        <td><input name = "one_size" type = "number" 
                           id = "one_size"></td>
                     </tr>
                  
              
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>