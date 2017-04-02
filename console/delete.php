<?php

$conn = mysqli_connect('127.0.0.1', 'i7420725', 'a18b8a4dded2d7ca3c42874d7027437d', 'i7420725');

mysqli_select_db($conn, 'i7420725');

$sql = "DELETE FROM clothing_accessories WHERE itemcode_id='$_GET[id]'";

if(mysqli_query($conn,$sql))
    header("refresh:1; url=index.php");
else
    echo "DELETION FAILED";


?>