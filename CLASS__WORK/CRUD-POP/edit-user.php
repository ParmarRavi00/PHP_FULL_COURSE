<?php

include "connection.php";

$eid = $_REQUEST['eId'];
echo $eid;

$sql = "select * from users where u_id ='$eid' ";
$run = mysqli_query($conn,$sql);


$fetch = mysqli_fetch_array($run);


?>

<div>
    <center>
        
<div>
    <a href="view-records.php">View Records</a>
</div>
    <form method="post" enctype="multipart/form-data">
        <h2>Registration Form</h2>
        <table>
            <tr>
                <th>Name : </th>
                <td> <input type="text" name="uname" value="<?php echo $fetch['u_name'] ?>"></td>
            </tr>
            <tr>
                <th>Email : </th>
                <td> <input type="text" name="uemail" value="<?php echo $fetch['u_email'] ?>" ></td>
            </tr>
            <tr>
                <th>Mobile : </th>
                <td> <input type="text" name="umobile" value="<?php echo $fetch['u_mobile'] ?>"></td>
            </tr>
            <tr>
                <th>Password : </th>
                <td> <input type="text" name="upassword" value="<?php echo $fetch['u_password'] ?>"></td>
            </tr>
            <tr>
                <th>Confirm Password : </th>
                <td> <input type="text" name="ucpassword"></td>
            </tr>
            <tr>
                <th>Gender : </th>
                <td>
                <?php echo $fetch['u_gender'] ?>

                    <input type="radio" name="gender" value="male" 
                    <?php
                    $gender = $fetch['u_gender']; //male 

                    if($gender=='male')
                    {
                        echo "checked";
                    }
                    ?>
                    >Male

                    <input type="radio" name="gender" value="female"
                    <?php
                    
                    $gender = $fetch['u_gender'];
                    if($gender=='female')
                        echo "checked";
                    ?>
                    
                    >Female
                </td>
            </tr>
            <tr>
                <th>Languages : </th>
                <td>
                    <input type="checkbox" name="chk[]" value="Gujarati"> Gujarati
                    <input type="checkbox" name="chk[]" value="Hindi"> Hindi
                    <input type="checkbox" name="chk[]" value="English"> English
                    <input type="checkbox" name="chk[]" value="Kannada"> Kannada
                </td>
            </tr>
            <tr>
                <th>Upload an image : </th>
                <td> <input type="file" name="uimage"></td>
            </tr>
            <tr>

                <td> <input type="submit" value="Register" name="register"></td>
            </tr>
        </table>
    </form>
    </center>
</div>