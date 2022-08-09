<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insert.css">
    <title>RAIT || Insert List || System Tracker</title>
    <link rel="icon" href="https://lh3.googleusercontent.com/proxy/zr1oiB6hYZkYS87NCZLI4N2QKe7rMI7hyISGx3BOkW-Km5myCbXVqFn0eLWVYkq2NRARVz6AZiZ1FUit1e31oi3qcI6weF8EWPSexAXfgzuW1p9_fwwbYc0Hbw" type="image/y-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>


<style>
    /* for custom scrollbar for webkit browser*/

    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    @import url("https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap");

    :root {
        --accent-color: #f50b86;
        --dark-color: #202124;
        --light-color: #ffffff;
    }

    .color1 {
        --accent-color: #f50b86
    }

    .color2 {
        --accent-color: #ff6f00
    }

    .color3 {
        --accent-color: #a3f307
    }


    .checkbox-group {
        display: flex;
        flex-direction: column;
        gap: 1em;
    }

    .checkbox-group input {
        display: none;
    }

    .checkbox-group label {
        display: flex;
        gap: 0.5em;
        align-items: center;
        transition: 0.5s color ease;
        white-space: nowrap;
        cursor: pointer;
        position: relative;
    }

    .checkbox-group label::before {
        content: "";
        width: 1.5em;
        height: 1.5em;
        border: 0.125em solid var(--accent-color);
        border-radius: 0.25em;
    }

    .checkbox-group input:checked+label {
        color: var(--accent-color);
    }

    .checkbox-group label::after {
        content: "";
        width: 0.75em;
        height: 0.75em;
        top: 0.375em;
        left: 0.375em;
        border-radius: 0.05em;
        background-color: var(--accent-color);
        position: absolute;
        transform: scale(0);
        transition: 0.5s transform ease;
    }

    .checkbox-group input:checked+label::after {
        transform: scale(1);
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
<!-- 
<body onload="myfunction()"> -->

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
            <div class="user"><i class="far fa-user"></i>&nbsp; <?php

                                                                echo $_SESSION['username'];
                                                                ?>


            </div>
        </div>
        <div class="header">
            <span class="image-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" alt="RAIT">
            </span>
            <ul class="header-element">

                <li id="element-1"><a href="userhome.php"> HOME</a></li>
                <li><a href="Floor page/floor.php" id="button1" onclick="toggleHide1()">LIST</a></li>
                <li><a href="insert.php" id="button" onclick="toggleHide()">INSERT</a></li>

                <li><a href="#">CONTACT US</a></li>
                <li><a href="backend/logout.php?logout-submit">LOG OUT</a></li>

            </ul>
        </div>
        <div class="demo">
            <div class="insertion-div">
                <h1>Data Insertion Form</h1>

            </div>
            <hr>
            <div class="text-box">
                <a href="#" class="btn btn-white btn-animate" id="1" onclick="add()">Create</a>
            </div>
            <div class="button">
                <input type="number" placeholder="quantity" id="number-no">
            </div>
            <div class="form-collection">
                <div class="totalForm">
                    <form action="backend/insert.php" method="POST">
                        <div class="submit_btn">
                            <input type="Submit" id="submit-css" class="btn-submit btn-white-submit btn-animate-submit" id="subtn">
                        </div>
                        <div class="choose">

                            <span class="checkbox">
                                <label class="checklabel" for="">department</label>

                                <input type="checkbox" value="1" name="department" id="deptcheck">
                            </span>
                            <span class="checkbox">
                                <label class="checklabel" for="">Tags</label>
                                <input type="checkbox" value="2" name="Tags" id="Tagscheck">
                            </span>
                            <span class="checkbox">
                                <label class="checklabel" for="">location</label>
                                <input type="checkbox" value="3" name="location" id="locationcheck">
                            </span>
                            <span class="checkbox">
                                <label class="checklabel" for="">status</label>
                                <input type="checkbox" value="4" name="status" id="statuscheck">
                            </span>
                            <span class="checkbox">
                                <label class="checklabel" for="">person</label>

                                <input type="checkbox" value="5" name="person" id="personcheck">
                            </span>
                            <span class="checkbox">
                                <select name="" id="perid" onChange='select()'>
                                    <option value="1">person</option>
                                    <option value="2">location</option>
                                </select>
                            </span>
                        </div>
                        <!-- <label for="">For Allotment</label>
                        <input type="checkbox" value="allotment" name="checkallot"> -->
                        <div class="formnew" id="initial">

                            <!-- <div class="centralcon"> -->
                            <div class="firstDiv">
                                <div class="input-container">
                                    <input type="text" required="" name="pono" />
                                    <label>Product Number</label>
                                </div>
                                <div class="input-container">
                                    <input type="mail" required="" name="dname" />
                                    <label>Device Name</label>
                                </div>
                                <div class="input-container">
                                    <input type="mail" required="" name="dconfig" />
                                    <label>Device Configuration</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-container">
                                    <input name="serial-1" type="text" required="" />
                                    <label>Serial No</label>
                                </div>
                                <div class="input-container">
                                    <input type="number" required="" name="cost" />
                                    <label>Cost</label>
                                </div>
                                <div class="input-container">
                                    <!-- <select name="dept" id="dept">
                                        <option value="COMP" id="1">COMP</option>
                                        <option value="IT" id="2">IT</option>
                                        <option value="EXTC" id="3">EXTC</option>
                                        <option value="MECH" id="4">MECH</option>
                                    </select> -->
                                    <?php
                                    $stmt = $pdo->prepare("select * from deprt");
                                    $stmt->execute();
                                    echo "<select name='dept-1' id='dept'>   
                                             <option id='1' disabled selected>Department</option>";
                                    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        $status = $result['dept'];
                                        $name = $result['name'];
                                        echo "

                                                 <option value=$status id='1'>$name</option>";
                                    }
                                    echo "</select>";


                                    ?>


                                </div>
                            </div>
                            <div class="lastDiv">

                                <?php
                                $stmt = $pdo->prepare("select * from tags");
                                $stmt->execute();
                                echo "<select name='tags-1' id='dept'>   
                                             <option id='1' disabled selected>Tags</option>";
                                while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $status = $result['tags_id'];
                                    $name = $result['tname'];
                                    echo "

                                                 <option value=$status id='1'>$name</option>";
                                }
                                echo "</select>";


                                ?>
                                <?php
                                $stmt = $pdo->prepare("select * from istatus");
                                $stmt->execute();
                                echo "<select name='status-1' id='dept'>   
                                             <option id='1' disabled selected>Status</option>";
                                while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $status = $result['status'];
                                    $name = $result['name'];
                                    echo "

                                                 <option value=$status id='1'>$name</option>";
                                }
                                echo "</select>";


                                ?>


                                <?php
                                $stmt = $pdo->prepare("select * from location");
                                $stmt->execute();
                                echo "<select name='location-1' id='location' >   
                                             <option id='1' disabled selected>Location</option>";
                                while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $status = $result['lid'];
                                    $name = $result['lab'];
                                    echo "

                                                 <option value=$status id='1'>$name</option>";
                                }
                                echo "</select>";


                                ?>






                                <?php
                                $stmt = $pdo->prepare("select * from person");
                                $stmt->execute();
                                echo "<select name='person-1' id='person' >   
                                             <option id='1' disabled selected>Faculty</option>";
                                while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $status = $result['pid'];
                                    $name = $result['srn_no'];
                                    echo "

                                                 <option value=$status id='1'>$name</option>";
                                }
                                echo "</select>";


                                ?>

                            </div>
                            <input type="hidden" value="1" id="hidden" name="quant">
                            <!-- </div> -->


                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section>

    <script src="insert.js"></script>
</body>

</html>