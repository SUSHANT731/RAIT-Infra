<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title>RAIT || Insert List || System Tracker</title>
    <link rel="icon" href="https://lh3.googleusercontent.com/proxy/zr1oiB6hYZkYS87NCZLI4N2QKe7rMI7hyISGx3BOkW-Km5myCbXVqFn0eLWVYkq2NRARVz6AZiZ1FUit1e31oi3qcI6weF8EWPSexAXfgzuW1p9_fwwbYc0Hbw" type="image/y-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>


<style>
    table {
        margin-top: 100px;
        width: 90%;
        table-layout: fixed;
    }

    .tbl-header {
        background-color: rgba(255, 255, 255, 0.3);
    }

    .tbl-content {
        height: 300px;
        overflow-x: auto;
        margin-top: 0px;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    th {
        padding: 20px 15px;
        text-align: left;
        font-weight: 500;
        font-size: 12px;
        color: #b31c1c;
        text-transform: uppercase;
    }

    td {
        padding: 15px;
        text-align: left;
        vertical-align: middle;
        font-weight: 300;
        font-size: 12px;
        color: #b31c1c;
        border-bottom: solid 1px rgba(255, 255, 255, 0.1);
    }


    /* demo styles */

    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

    /* body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
} */
    section {
        margin: 50px;
    }



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


    #selectDrp {
        width: 67%;
        height: 40px;
        text-align: center;
        justify-content: center;
        font-size: 20px;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<?php

session_start();
if (!isset($_SESSION['auth'])) {
    echo "<script>alert('please login')</script>";
    echo  "<script>window.location = '../index.php'</script>";
}

require '../backend/pdoconn.php';
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
                
                <li><a href="../Floor page/floor.php" id="button1">LIST</a></li>
                <li><a href="../insert.php" id="button">INSERT</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="../backend/logout.php?logout-submit">LOG OUT</a></li>

            </ul>
        </div>
        <div class="demo">

            <form method="POST">
                <div class="newsletter">


                    <!-- <details class="custom-select"> -->
                    <!-- <summary class="radios" name="optionName">
                        <input type="radio" name="item" id="default" title="search type" checked>
                        <input type="radio" name="item" id="item1" title="Tags" value="tags-op">
                        
                        <input type="radio" name="item" id="item2" title="Item 2">
                        <input type="radio" name="item" id="item3" title="Item 3">
                        <input type="radio" name="item" id="item4" title="Item 4">
                         <input type="radio" name="item" id="item5" title="Item 5"> -->
                    <!-- </summary>  -->
                    <!-- <ul class="list">
                        <li>
                            <label for="item1">Tags</label>
                        </li>
                        <li>
                            <label for="item2">Status</label>
                        </li>
                        <li>
                            <label for="item3">PO number</label>
                        </li>
                        <li>
                            <label for="item4">Department</label>
                        </li>
                        
                    </ul> -->
                    <select name="optionName" id="selectDrp">
                        <option value="1">Tags</option>
                        <option value="2">Serial no</option>
                        <option value="3">PO number</option>
                        <option value="4">department</option>
                        <option value="5">status</option>
                        <option value="6">Labs</option>
                    </select>

                    <!-- </details> -->
                    <div class="container">
                        <div class="search-box">
                            <input type="text" class="search-box-input" placeholder="What are you looking for ?" name="querry">
                            <button class="search-box-btn" name="search">

                                <img src="https://cdn.icon-icons.com/icons2/2566/PNG/512/search_icon_153438.png" alt="" srcset="" id="search-img">
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <?php
            require '../backend/pdoconn.php';


            if (isset($_POST['search'])) {
                if (isset($_POST["optionName"])) {
                    $decider = $_POST["optionName"];
                }
                if (isset($_POST["querry"])) {
                    $querry = $_POST["querry"];
                }
                if ($decider == 1) {
                    echo "<table border='1'>

                    <tr>
                
                    
                    <th>Id</th>
                
                    
                   
                    
                    
                    
                
                    <th>Product Number</th>
                
                    <th>Device Name</th>
                
                    <th>Device Configuration</th>
                    <th>Tags Id</th>
                    <th>Cost</th>
                    <th>Depatment</th>
                   
                    <th>Serial number</th>
                    <th>Status</th>
                
                    </tr>";


                    $stmt = $pdo->prepare("select * from infra join allot join istatus join tags join deprt on 
    infra.allot = allot.allot and infra.status = istatus.status and infra.tags_id = tags.tags_id and
    infra.dept = deprt.dept where tags.tname=:l");
                    $stmt->execute(array(':l' => $querry));

                    while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
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
                        echo "<td>" . $res['srno'] . "</td>";
                        // echo "<td>" . $res['allot'] . "</td>";

                        // echo "<td>" . $res['status'] . "</td>";
                        if ($res['status'] == 1) {
                            echo "<td>Scrapped</td>";
                        } else {
                            echo "<td>In Use</td>";
                        }


                        echo "</tr>";
                    }
                } else if ($decider == 2) {
                    echo "<table border='1'>

                    <tr>
                
                    
                    <th>Id</th>
                
                    
                   
                    
                    
                    
                
                    <th>Product Number</th>
                
                    <th>Device Name</th>
                
                    <th>Device Configuration</th>
                    <th>Tags Id</th>
                    <th>Cost</th>
                    <th>Depatment</th>
                   
                    <th>Serial number</th>
                    <th>Status</th>
                
                    </tr>";



                    $stmt = $pdo->prepare("select * from infra join allot join istatus join tags join deprt  on 
    infra.allot = allot.allot and infra.status = istatus.status and infra.tags_id = tags.tags_id and
    infra.dept = deprt.dept where infra.srno=:l");
                    $stmt->execute(array(':l' => $querry));

                    while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
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
                        echo "<td>" . $res['srno'] . "</td>";
                        // echo "<td>" . $res['allot'] . "</td>";

                        // echo "<td>" . $res['status'] . "</td>";
                        if ($res['status'] == 1) {
                            echo "<td>Scrapped</td>";
                        } else {
                            echo "<td>In Use</td>";
                        }


                        echo "</tr>";
                    }
                } else if ($decider == 3) {

                    echo "<table border='1'>

                    <tr>
                
                    
                    <th>Id</th>
                
                    
                   
                    
                    
                    
                
                    <th>Product Number</th>
                   
                
                    <th>Device Name</th>
                
                    <th>Device Configuration</th>
                    <th>Tags Id</th>
                    <th>Cost</th>
                    <th>Depatment</th>
                   
                    <th>Serial number</th>
                    <th>Status</th>
                
                    </tr>";




                    $stmt = $pdo->prepare("select * from infra join allot join istatus join tags join deprt  on 
    infra.allot = allot.allot and infra.status = istatus.status and infra.tags_id = tags.tags_id and
    infra.dept = deprt.dept where infra.po_no=:l");
                    $stmt->execute(array(':l' => $querry));

                    while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
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
                        echo "<td>" . $res['srno'] . "</td>";
                        // echo "<td>" . $res['allot'] . "</td>";

                        // echo "<td>" . $res['status'] . "</td>";
                        if ($res['status'] == 1) {
                            echo "<td>Scrapped</td>";
                        } else {
                            echo "<td>In Use</td>";
                        }


                        echo "</tr>";
                    }
                } else if ($decider == 4) {


                    echo "<table border='1'>

                    <tr>
                
                    
                    <th>Id</th>
                
                    
                   
                    
                    
                    
                
                    <th>Product Number</th>
                
                    <th>Device Name</th>
                
                    <th>Device Configuration</th>
                    <th>Tags Id</th>
                    <th>Cost</th>
                    <th>Depatment</th>
                   
                    <th>Serial number</th>
                    <th>Status</th>
                
                    </tr>";


                    $stmt = $pdo->prepare("select * from infra join allot join istatus join tags join deprt  on 
    infra.allot = allot.allot and infra.status = istatus.status and infra.tags_id = tags.tags_id and
    infra.dept = deprt.dept where deprt.name=:l");
                    $stmt->execute(array(':l' => $querry));

                    while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {


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
                        echo "<td>" . $res['srno'] . "</td>";
                        // echo "<td>" . $res['allot'] . "</td>";

                        // echo "<td>" . $res['status'] . "</td>";
                        if ($res['status'] == 1) {
                            echo "<td>Scrapped</td>";
                        } else {
                            echo "<td>In Use</td>";
                        }


                        echo "</tr>";
                    }
                } else if ($decider == 5) {
                    echo "<table border='1'>

                    <tr>
                    <th>Id</th>
                    <th>Product Number</th>
                    <th>Device Name</th>
                    <th>Device Configuration</th>
                    <th>Tags Id</th>
                    <th>Cost</th>
                    <th>Depatment</th>
                    <th>Serial number</th>
                    <th>Status</th>
                    </tr>";


                    $stmt = $pdo->prepare("select * from infra join allot join istatus join tags join deprt  on 
    infra.allot = allot.allot and infra.status = istatus.status and infra.tags_id = tags.tags_id and
    infra.dept = deprt.dept where istatus.name=:l");
                    $stmt->execute(array(':l' => $querry));

                    while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
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
                        echo "<td>" . $res['srno'] . "</td>";
                        // echo "<td>" . $res['allot'] . "</td>";

                        // echo "<td>" . $res['status'] . "</td>";
                        if ($res['status'] == 1) {
                            echo "<td>Scrapped</td>";
                        } else {
                            echo "<td>In Use</td>";
                        }


                        echo "</tr>";
                    }
                }
            }



            ?>
        </div>


    </section>

    <script src="list.js"></script>
</body>

</html>