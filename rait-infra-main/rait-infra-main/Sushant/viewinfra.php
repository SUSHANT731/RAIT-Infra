<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="list.css"> -->
    <title>RAIT || Hardware Info</title>
    <link rel="icon" href="https://lh3.googleusercontent.com/proxy/zr1oiB6hYZkYS87NCZLI4N2QKe7rMI7hyISGx3BOkW-Km5myCbXVqFn0eLWVYkq2NRARVz6AZiZ1FUit1e31oi3qcI6weF8EWPSexAXfgzuW1p9_fwwbYc0Hbw" type="image/y-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600;700&display=swap");
    @import url("'https://fonts.googleapis.com/css?family=Montserrat:400,800'");

    * {
        margin: 0;
        padding: 0;
    }

    #loading {
        position: fixed;
        width: 100%;
        height: 100vh;
        background: #f5f7f6 url("https://i.pinimg.com/originals/f6/06/cb/f606cbf26c0a18898b96ef6857953a75.gif") no-repeat center;
        z-index: 99999;
    }



    .main-content {
        height: 100vh;
        width: 100%;
        background-image: linear-gradient(rgba(243, 198, 194, 0.534)),
            url("");
        /* background-repeat: no-repeat; */
        /* background-size: 100%; */
    }

    .top-head {

        display: flex;
        background-color: white;
        height: 25px;
        padding: 8px 0px;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;

    }

    .main-content .top-head h5 {
        margin-left: 135px;
        padding: 5px;
        color: #5c5c77;
        cursor: pointer;
    }

    .main-content .top-head h5:hover,
    .main-content .top-head .user:hover {
        color: #b31c1c;
    }

    .main-content .top-head .icon i:hover {
        color: #b31c1c;
        transform: scale(0.98);

        box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
    }

    .main-content .top-head .user {
        position: absolute;
        right: 50px;
        padding: 5px;
        color: #5c5c77;
        cursor: pointer;
    }

    .main-content .top-head .icon {
        margin-left: 30px;
        padding: 3px;
        color: #5c5c77;
        border-radius: 25px;
    }

    .main-content .top-head .icon i {
        padding: 5px;
        margin: 0px 2px;
        cursor: pointer;
        box-shadow: 7px 6px 28px 1px rgba(0, 0, 0, 0.24);
        border-radius: 25px;
    }

    .header-element {
        display: flex;
        background-color: #8e0606;
        width: 60%;
        height: 100px;
        position: fixed;
        top: 42px;
        right: 0px;
    }

    .header-element li {
        text-decoration: none;
        list-style: none;
        margin: 42px 36px 37px 25px;
        color: white;
        font-weight: 600;
        cursor: pointer;
        /* padding: 25px 25px 25px 25px; */
        font-family: "Josefin Sans", sans-serif;
    }

    .header-element li a {
        text-decoration: none;
        list-style: none;
        color: white;
        font-family: "Josefin Sans", sans-serif;
        font-weight: 700;
        font-size: 15px;
        letter-spacing: 1px;
    }

    .header-element li a::after {
        content: "";
        display: block;
        width: 100%;
        height: 0px;
        background: #ff9d0a;
        transition: height 0.2s;
        margin-top: 34px;
    }

    .header-element li a:hover::after {
        height: 8px;

        /* transition: width .3s; */
    }

    .header-element li a:active::after {
        height: 8px;
        /* transition: width .3s; */
    }

    #element-1 {
        margin-left: 50px;
    }

    .header .image-logo img {

        height: 100px;
        margin-left: 123px;
        position: fixed;
        top: 42px;
        left: 0;

    }

    .demo {
        height: 100vh;
        background-image: linear-gradient(rgba(243, 198, 194, 0.534),
                rgba(243, 198, 194, 0.534)),
            url("");
    }

    table {

        border-style: solid;

        border-width: 2px;

        border-color: pink;
        width: 70%;
        position: absolute;
        left: 15%;
        top: 30%;
        align-items: center;
        padding: 5px 5px;
        box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
        background-color: #f5fffa;

    }

    td {
        padding: 10px 10px;
        text-align: center;
    }

    .room-num {
        position: absolute;
        top: 30%;
        left: 44%;
        text-decoration: underline;


    }
    #room-num {
        position: absolute;
        top: 23%;
        left: 44%;
        text-decoration: underline;


    }
</style>

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
            <div class="user"><i class="far fa-user"></i> <?php
               
               echo $_SESSION['username'];
           ?></div>
        </div>
        <div class="header">
            <span class="image-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" alt="RAIT">
            </span>
            <ul class="header-element">

                <li id="element-1"><a href="../userhome.php"> HOME</a></li>
                <li><a href="Floor page/floor.php" id="button1" >LIST</a></li>
                <li><a href="../insert.php" id="button">INSERT</a></li>
                
                <li><a href="#">CONTACT US</a></li>
                <li><a href="backend/logout.php?logout-submit">LOG OUT</a></li>

            </ul>
        </div>

        <div class="demo">
            <?php
            

            $loc = $_GET['id'];

            try {
                // $stmt = $pdo -> prepare('select * from location ');

                $stmt = $pdo->prepare("select * from infra join allot join istatus join tags join deprt join location on 
    infra.allot = allot.allot and infra.status = istatus.status and infra.tags_id = tags.tags_id and
    infra.dept = deprt.dept and allot.lid = location.lid where lab=:l");
                $stmt->execute(array(':l' => $loc,));
                $countrow = $stmt->rowCount();
                if ($countrow > 0) {
                    echo "<table border='1'>

    <tr>

    
    <th>Id</th>

    
   
    
    
    

    <th>Product Number</th>

    <th>Device Name</th>

    <th>Device Configuration</th>
    <th>Tags Id</th>
    <th>Cost</th>
    <th>Depatment</th>
   
    <th>Status</th>

    </tr>";

    while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // echo "<H1>".$res['d_name']."</H1>";
        // echo "<H1>".$res['tname']."</H1>";
        // echo "<H1>".$res['tname']."</H1>";
        // echo "<H1>".$res['tname']."</H1>";
        // echo "<H1>".$res['tname']."</H1>";
        $labs = $res['lab'];
        echo "<tr>";
        echo "<td>" . $res['id'] . "</td>";

        // echo "<td>" . $res['lab'] . "</td>";

        echo "<td>" . $res['po_no'] . "</td>";

        echo "<td>" . $res['d_name'] . "</td>";

        echo "<td>" . $res['d_config'] . "</td>";

        // echo "<td>" . $res['tags_id'] . "</td>";

        if ($res['tags_id'] == 1) {
            echo "<td>Hardware</td>";
        } else if ($res['tags_id'] == 2) {
            echo "<td>Software</td>";
        } else if ($res['tags_id'] == 3) {
            echo "<td>Network Device</td>";
        }

        echo "<td>" . $res['cost'] . "</td>";

        // echo "<td>" . $res['dept'] . "</td>";

        if ($res['dept'] == 1) {
            echo "<td>IT</td>";
        } else if ($res['dept'] == 2) {
            echo "<td>CS</td>";
        } else if ($res['dept'] == 3) {
            echo "<td>EXTC</td>";
        } else if ($res['dept'] == 4) {
            echo "<td>Engineering Science</td>";
        }

        // echo "<td>" . $res['allot'] . "</td>";

        // echo "<td>" . $res['status'] . "</td>";
        if ($res['status'] == 1) {
            echo "<td>Scrapped</td>";
        } else {
            echo "<td>In Use</td>";
        }


        echo "</tr>";

        // print_r($res);

    }
    echo "</table>";
                } else {
                    echo "<h1 class='room-num'>No Entries Found</h1>";
                }

                

                
            } catch (PDOException $e) {
            }

            ?>

        </div>
    </section>
    <script>
        var preloader = document.getElementById("loading");

        function myfunction() {
            preloader.style.display = "none";
        }
    </script>
    <h1 id="room-num"><?php
                        if (isset($labs)) {
                            echo "Room No:" . $labs;
                        }
                        ?>
    </h1>
</body>

</html>