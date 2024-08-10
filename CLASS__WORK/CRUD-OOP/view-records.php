<?php

include 'fetchall.php';


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
                <a href="crud.php">GO back</a>
            </div>
            <table border="1">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Password</th>
                        <th>Gender</th>
                        <th>Languages</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                // while($fetch  = mysqli_fetch_assoc($run))
                while($fetch  = $run->fetch_object())
{
   

                
                
                ?>
                    <tr>
                        <td><?php  echo $fetch->u_id; ?></td>
                        <td><?php  echo $fetch->u_name; ?></td>
                        <td><?php  echo $fetch->u_email ?></td>
                        <td><?php echo $fetch->u_mobile ?></td>
                        <td><?php echo $fetch->u_password ?></td>
                        <td><?php echo $fetch->u_gender ?></td>
                        <td><?php echo $fetch->u_languages ?></td>
                        <td><?php echo $fetch->u_image ?></td>
                        <td>
                            <a href="single-user.php?vId=<?php echo $fetch->u_id ?>">View</a>
                            <a href="edit-user.php?eId=<?php echo $fetch->u_id ?>">Edit</a>
                            <a href="delete-user.php?delId=<?php echo $fetch->u_id?>">Delete</a>
                        </td>
                    </tr>

               <?php  } ?>


                </tbody>
            </table>
        </center>
    </div>

</body>

</html>