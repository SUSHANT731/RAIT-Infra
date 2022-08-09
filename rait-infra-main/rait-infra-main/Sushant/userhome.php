<?php 
    require "backend/loginback.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>RAIT || UserHomePage|| System Tracker</title>
    <link rel="icon"
        href="https://lh3.googleusercontent.com/proxy/zr1oiB6hYZkYS87NCZLI4N2QKe7rMI7hyISGx3BOkW-Km5myCbXVqFn0eLWVYkq2NRARVz6AZiZ1FUit1e31oi3qcI6weF8EWPSexAXfgzuW1p9_fwwbYc0Hbw"
        type="image/y-icon">
</head>

<?php

session_start();
if (!isset($_SESSION['auth'])) {
    echo "<script>alert('please login')</script>";
    echo  "<script>window.location = 'index.php'</script>";
}

require 'backend/pdoconn.php';
?>

<body onload="myfunction()">
    <div id="loading">

    </div>
    <section class="main-content">

        <!-- ---------------------------------- header ------------------------------------------>
        <div class="top-head">
            <h5>CALL &nbsp;+022 2770 9574</h5>
            <div class="icon">
                <i class="fab fa-facebook-f fa-xs"></i>
                <i class="fab fa-twitter fa-xs"></i>
                <i class="fab fa-linkedin-in fa-xs"></i>
                <i class="fab fa-instagram fa-xs"></i>
            </div>
            <div class="user">
                <i class="far fa-user"></i>
                <?php
               
                    echo $_SESSION['username'];
                ?>
            </div>
        </div>
        <div class="header">
            <span class="image-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" alt="RAIT">
            </span>
            <ul class="header-element">

                <li id="element-1"><a href="#"> HOME</a></li>
                <li><a href="Floor page/floor.php" id="button">LIST</a></li>
                <li><a href="insert.php" id="button1">INSERT</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="backend/logout.php?logout-submit">LOGOUT</a></li>
                <!-- <form action="backend/logout.php" method="POST">
                    <input type="button" value="Logout" name="logout">
                    
                </form> -->
                <!-- <li><a href="#">LOGOUT</a></li> -->

            </ul>
        </div>



        <main>

            <div>
                <h3 id="output"> &nbsp;</h3>
            </div>
            <section>
                <h1>Keep Track Of Your<span class="change_content"> </span></h1>
                <p>
                    <hr>
                </p>
                <!-- <a href="#" class="btnone">Learn more</a> -->
                <a href="search/list.php" class="btntwo" onclick="toggleHide()"><span class="replies">SEARCH</span>
                    <span class="comment">CLICK HERE</span></a>
            </section>
        </main>




    </section>

    <script src="index.js"></script>


</body>

</html>