<?php 

require "connection.php";

$sql = "select * from users";

// $run = mysqli_query($conn,$sql);

$run =  $conn->query($sql);











