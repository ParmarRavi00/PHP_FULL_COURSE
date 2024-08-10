<?php 

require "connection.php";

$sql = "select * from users";

$run = mysqli_query($conn,$sql);



// $fetch  = mysqli_fetch_array($run);

// while($fetch  = mysqli_fetch_array($run))
// {
//     echo $fetch['u_name'];
// }






