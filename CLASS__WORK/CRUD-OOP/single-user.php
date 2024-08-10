<?php

include 'connection.php';

// $vid = $_GET['vId'];
// echo $vid;
$vid = $_REQUEST['vId'];
echo $vid;

$sql = "select * from users where u_id='$vid'";
$run = mysqli_query($conn,$sql);

// $fetch = mysqli_fetch_array($run);

$fetch = $run->fetch_object();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <center>

    <div>
        <a href="view-records.php">GO Back</a>
        <h2>User Details</h2>
    </div>
      

    <img src="" alt="">
        <div>
            Hello <?php echo "<b>".$fetch->u_name."</b>";?>...!
        </div>
        <p>Email : <?php echo "<b>".$fetch->u_email."</b>";?></p>
        <p>Mobile : <?php echo "<b>".$fetch->u_mobile."</b>";?></p>
        <p>Password : <?php echo "<b>".$fetch->u_password."</b>";?></p>
        <p>Gender : <?php echo "<b>".$fetch->u_gender."</b>";?></p>
        <p>Languages : <?php echo "<b>".$fetch->u_languages."</b>";?></p>
       <p>
        <img src="images/<?php echo $fetch->u_image?>" alt="" height="100px">
       </p>
    </center>
</div>
    
</body>
</html>