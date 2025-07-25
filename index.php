<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include("./bootstrap_css.php");
    ?>
    <title>Instagram</title>


</head>

<body>


    <?php
// mena homepage dekhanay sa pehly ya check karna ha ka bnda login ha ya nhe (ticket ha ya nhe)
if(isset($_SESSION['ticket'])) {
    // User is logged in, proceed with displaying the homepage
} else {
    // User is not logged in, redirect to login page or show an error
    header("Location: http://localhost:3000/signup.php");
    exit();
}

?>


    <!-- sidebar-footer -->
    <?php
include("./sidebar-footer.php");
 ?>
    <div class="container-fluid">
        <div class="row">
            <!-- left sidebar -->
            <div class="col-xl-2 ">
                <?php include("./sidebar.php"); ?>
            </div>
            <!-- maincontent  -->
            <div class="col-xl-6">
                <?php include("./maincontent.php"); ?>
            </div>
            <!-- user section -->
            <div class="col-xl-3">
                <?php include("./usersection.php"); ?>
            </div>
            <!-- message section -->
            <div class="col-xl-1">
                <?php include("./message.php"); ?>
            </div>
        </div>
    </div>


</body>

</html>