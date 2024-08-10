<?php

include "connection.php";

$eid = $_REQUEST['eId'];
echo $eid;

$sql = "select * from users where u_id ='$eid' ";
// $run = mysqli_query($conn,$sql);

$run = $conn->query($sql);


// $fetch = mysqli_fetch_array($run);

$fetch = $run->fetch_object();

if (isset($_POST['update'])) {
    $name =  $_POST['uname'];
    $email =  $_POST['uemail'];
    $mobile =  $_POST['umobile'];
    $password =  $_POST['upassword'];
    $gender =  $_POST['gender'];
    $chk =  $_POST['chk'];


    $lang = "";
    foreach ($chk as $language) {
        $lang = $lang . $language . ",";
        // "" . langauges
    }


    $image =  $_FILES['uimage']['name'];

    $dupImage = $_FILES['uimage']['tmp_name'];
    $path = 'images/' . $image; //images/Toyota.jpg

    move_uploaded_file($dupImage, $path);

    $sql = "update users set u_name='$name',u_email='$email',u_mobile='$mobile',u_password='$password',u_gender='$gender',u_languages='$lang ',u_image='$image' where u_id='$eid'";

    //   $update = mysqli_query($conn,$sql);

    $update = $conn->query($sql);

    if ($update) {
        echo "
    <script>
    alert('records are updated...!');
    windo.location.href = 'view-records.php'
    </script>
    ";
    }
}


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
                    <td> <input type="text" name="uname" value="<?php echo $fetch->u_name ?>"></td>
                </tr>
                <tr>
                    <th>Email : </th>
                    <td> <input type="text" name="uemail" value="<?php echo $fetch->u_email ?>"></td>
                </tr>
                <tr>
                    <th>Mobile : </th>
                    <td> <input type="text" name="umobile" value="<?php echo $fetch->u_mobile ?>"></td>
                </tr>
                <tr>
                    <th>Password : </th>
                    <td> <input type="text" name="upassword" value="<?php echo $fetch->u_password ?>"></td>
                </tr>
                <tr>
                    <th>Confirm Password : </th>
                    <td> <input type="text" name="ucpassword"></td>
                </tr>
                <tr>
                    <th>Gender : </th>
                    <td>
                        <?php echo $fetch->u_gender ?>

                        <input type="radio" name="gender" value="male" <?php
                                                                        $gender = $fetch->u_gender; //male 

                                                                        if ($gender == 'male') {
                                                                            echo "checked";
                                                                        }
                                                                        ?>>Male

                        <input type="radio" name="gender" value="female" <?php

                                                                            $gender = $fetch->u_gender;
                                                                            if ($gender == 'female')
                                                                                echo "checked";
                                                                            ?>>Female
                    </td>
                </tr>
                <tr>
                    <th>Languages : </th>


                    <td>
                        <input type="checkbox" name="chk[]" value="Gujarati" <?php
                                                                                $lang_arr =  $fetch->u_languages; //guj,hindi,
                                                                                // echo $lang_arr;
                                                                                $lang = explode(',', $lang_arr);
                                                                                if (in_array('Gujarati', $lang)) {
                                                                                    echo "checked";
                                                                                }


                                                                                ?>> Gujarati

                        <input type="checkbox" name="chk[]" value="Hindi" <?php
                                                                            $lang_arr =  $fetch->u_languages; //guj,hindi,
                                                                            // echo $lang_arr;
                                                                            $lang = explode(',', $lang_arr);
                                                                            if (in_array('Hindi', $lang)) {
                                                                                echo "checked";
                                                                            }


                                                                            ?>> Hindi

                        <input type="checkbox" name="chk[]" value="English" <?php
                                                                            $lang_arr =  $fetch->u_languages; //guj,hindi,
                                                                            // echo $lang_arr;
                                                                            $lang = explode(',', $lang_arr);
                                                                            if (in_array('English', $lang)) {
                                                                                echo "checked";
                                                                            }


                                                                            ?>> English

                        <input type="checkbox" name="chk[]" value="Kannada" <?php
                                                                            $lang_arr =  $fetch->u_languages; //guj,hindi,
                                                                            // echo $lang_arr;
                                                                            $lang = explode(',', $lang_arr);
                                                                            if (in_array('Kannada', $lang)) {
                                                                                echo "checked";
                                                                            }


                                                                            ?>> Kannada

                    </td>
                </tr>
                <tr>
                    <th>Upload an image : </th>
                    <td>
                        <input type="file" name="uimage">
                        <img src="images/<?php echo $fetch->u_image ?>" alt="No Image" height="50px">
                        <?php echo $fetch->u_image; ?>

                    </td>

                </tr>
                <tr>

                    <td> <input type="submit" value="Register" name="update"></td>
                </tr>
            </table>
        </form>
    </center>
</div>