<?php

include 'connection.php';
if(isset($_REQUEST['delId']))
{
    $delId=  $_REQUEST['delId'];
    echo $delId;

    $sql = "delete from users where u_id='$delId'";

    // $run = mysqli_query($conn,$sql);
    $run = $conn->query($sql);

    if($run)
    {
        header("location:view-records.php");
    }
}
?>