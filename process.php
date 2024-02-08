<?php

    include "conn.php";
    session_start();

    if(isset($_POST['add'])){

        $pic = $_FILES['pic']['name'];
        $fileTmpName = $_FILES['pic']['tmp_name'];

        $name = $_POST['name'];
        $price = $_POST['price'];

        $insert = mysqli_query($conn, "INSERT INTO products VALUES('0', '$pic', '$name', '$price')");

        if($insert==true){
            
                $fileDestination = 'upload/'.$pic;
                move_uploaded_file($fileTmpName, $fileDestination);

                ?>
            <script>
                alert("Successfully inserted the Product!");
                window.location.href="viewproducts.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("ERROR Please Try Again!");
                window.location.href="addproducts.php";
            </script>
            <?php
        }
    }


    /*insert into page*/

?>