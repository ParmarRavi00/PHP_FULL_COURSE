<?php

require "connection.php";

if ($conn) {
    echo "connected...!";
}


if(isset($_POST['register']))
{
    $name =  $_POST['uname'];
    $email =  $_POST['uemail'];
    $mobile =  $_POST['umobile'];
    $password =  $_POST['upassword'];
    $gender =  $_POST['gender'];
    $chk =  $_POST['chk'];

   
$lang = "";
    foreach($chk as $language)
    {
        $lang = $lang. $language.","; 
        // "" . langauges
    }


    $image =  $_FILES['uimage']['name'];

    $dupImage =$_FILES['uimage']['tmp_name'];
    $path = 'images/'.$image;//images/Toyota.jpg

    move_uploaded_file($dupImage,$path);

    $sql = "insert into users (u_name,u_email,u_mobile,u_password,u_gender,u_languages,u_image) values ('$name','$email','$mobile','$password','$gender','$lang ','$image')";

//   mysqli_query($conn,$sql);

$conn->query($sql);

    // if($run)
    // {
    //     header('location:crud.php');
    // }
}


