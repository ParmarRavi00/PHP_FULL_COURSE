<?php

require "insert.php";


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
    <a href="view-records.php">View Records</a>
</div>
    <form method="post" enctype="multipart/form-data">
        <h2>Registration Form</h2>
        <table>
            <tr>
                <th>Name : </th>
                <td> <input type="text" name="uname"></td>
            </tr>
            <tr>
                <th>Email : </th>
                <td> <input type="text" name="uemail" ></td>
            </tr>
            <tr>
                <th>Mobile : </th>
                <td> <input type="text" name="umobile"></td>
            </tr>
            <tr>
                <th>Password : </th>
                <td> <input type="text" name="upassword"></td>
            </tr>
            <tr>
                <th>Confirm Password : </th>
                <td> <input type="text" name="ucpassword"></td>
            </tr>
            <tr>
                <th>Gender : </th>
                <td>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
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

</body>

</html>