<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>RAIT || View List || System Tracker</title>
    <link rel="icon" href="https://lh3.googleusercontent.com/proxy/zr1oiB6hYZkYS87NCZLI4N2QKe7rMI7hyISGx3BOkW-Km5myCbXVqFn0eLWVYkq2NRARVz6AZiZ1FUit1e31oi3qcI6weF8EWPSexAXfgzuW1p9_fwwbYc0Hbw" type="image/y-icon">
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
</style>

<?php
session_start();
if (!isset($_SESSION['auth'])) {
    echo "<script>alert('please login')</script>";
    echo  "<script>window.location = '../index.php'</script>";
}
include '../backend/pdoconn.php'
?>

<body>
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
                <li><a href="floor.php" id="button1" >LIST</a></li>
                <li><a href="../insert.php" id="button" >INSERT</a></li>
                
                <li><a href="#">CONTACT US</a></li>
                <li><a href="../backend/logout.php?logout-submit">LOG OUT</a></li>

            </ul>
        </div>
        <div id="card" class="cardtop">
            <div class="floor1">
                <div class="image">
                    <img src="IT dept.jpg" alt="">
                </div>
                <div class="floor">
                    <h3>1st Floor</h3>
                </div>
                <!-- Trigger/Open The Modal -->
                <div class="viewclass">
                    <button id="myBtn1" onclick="btn1()">View Rooms</button>
                    <!-- The Modal -->
                    <div id="myModal1" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close" id="close1" onclick="shutdown()">&times;</span>
                                <h2>Rooms on 1st floor</h2>
                            </div>
                            <div class="modal-body">
                                <div class="dropdown">
                                    <div class="modal-image"><img src="hardware.jpg" alt="Hardware image">
                                    </div>
                                    <button class="dropbtn">Select Room</button>
                                    <div class="dropdown-content">
                                        <?php
                                        $stmt = $pdo->prepare("select * from location");
                                        $stmt->execute();
                                        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $status = $result['lid'];
                                            $name = $result['lab'];
                                            $fname = $result['floor'];
                                            if ($result['floor'] == 1) {
                                                echo "<a href='viewinfra.php?id=$name'>  <option value=$status id='1'>$name</option> </a>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="cardtop">
            <div class="floor2">
                <div class="image">
                    <img src="IT dept.jpg" alt="">
                </div>
                <div class="floor">
                    <h3>2nd Floor</h3>
                </div>
                <div class="viewclass">
                    <button id="myBtn2" onclick="btn2()">View Rooms</button>
                    <div id="myModal2" class="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close" id="close2" onclick="shutdown2()">&times;</span>
                                <h2>Rooms on 2nd floor</h2>
                            </div>
                            <div class="modal-body">
                                <div class="dropdown">
                                    <div class="modal-image"><img src="hardware.jpg" alt="Hardware image">
                                    </div>
                                    <button class="dropbtn">Select Room</button>
                                    <div class="dropdown-content">
                                        <?php
                                        $stmt = $pdo->prepare("select * from location");
                                        $stmt->execute();
                                        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $status = $result['lid'];
                                            $name = $result['lab'];
                                            $fname = $result['floor'];
                                            if ($result['floor'] == 2) {
                                                echo "<a href='viewinfra.php?id=$name'>  <option value=$status id='1'>$name</option> </a>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="cardtop">
            <div class="floor3">
                <div class="image">
                    <img src="IT dept.jpg" alt="">
                </div>
                <div class="floor">
                    <h3>3rd Floor</h3>
                </div>
                <div class="viewclass">
                    <button id="myBtn3" onclick="btn3()">View Rooms</button>
                    <div id="myModal3" class="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close" id="close3" onclick="shutdown3()">&times;</span>
                                <h2>Rooms on 3rd floor</h2>
                            </div>
                            <div class="modal-body">
                                <div class="dropdown">
                                    <div class="modal-image"><img src="hardware.jpg" alt="Hardware image">
                                    </div>
                                    <button class="dropbtn">Select Room</button>
                                    <div class="dropdown-content">
                                        <?php
                                        $stmt = $pdo->prepare("select * from location");
                                        $stmt->execute();
                                        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $status = $result['lid'];
                                            $name = $result['lab'];
                                            $fname = $result['floor'];
                                            if ($result['floor'] == 3) {
                                                echo "<a href='viewinfra.php?id=$name'>  <option value=$status id='1'>$name</option> </a>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="cardbtm">
            <div class="floor4">
                <div class="image">
                    <img src="IT dept.jpg" alt="">
                </div>
                <div class="floor">
                    <h3>4th Floor</h3>
                </div>
                <div class="viewclass">
                    <button id="myBtn4" onclick="btn4()">View Rooms</button>
                    <div id="myModal4" class="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close" id="close4" onclick="shutdown4()">&times;</span>
                                <h2>Rooms on 4th floor</h2>
                            </div>
                            <div class="modal-body">
                                <div class="dropdown">
                                    <div class="modal-image"><img src="hardware.jpg" alt="Hardware image">
                                    </div>
                                    <button class="dropbtn">Select Room</button>
                                    <div class="dropdown-content">
                                        <?php
                                        $stmt = $pdo->prepare("select * from location");
                                        $stmt->execute();
                                        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $status = $result['lid'];
                                            $name = $result['lab'];
                                            $fname = $result['floor'];
                                            if ($result['floor'] == 4) {
                                                echo "<a href='viewinfra.php?id=$name'>  <option value=$status id='1'>$name</option> </a>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="cardbtm">
            <div class="floor5">
                <div class="image">
                    <img src="IT dept.jpg" alt="">
                </div>
                <div class="floor">
                    <h3>5th Floor</h3>
                </div>
                <div class="viewclass">
                    <button id="myBtn5" onclick="btn5()">View Rooms</button>
                    <div id="myModal5" class="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close" id="close5" onclick="shutdown5()">&times;</span>
                                <h2>Rooms on 5th floor</h2>
                            </div>
                            <div class="modal-body">
                                <div class="dropdown">
                                    <div class="modal-image"><img src="hardware.jpg" alt="Hardware image">
                                    </div>
                                    <button class="dropbtn">Select Room</button>
                                    <div class="dropdown-content">
                                        <?php
                                        $stmt = $pdo->prepare("select * from location");
                                        $stmt->execute();
                                        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $status = $result['lid'];
                                            $name = $result['lab'];
                                            $fname = $result['floor'];
                                            if ($result['floor'] == 5) {
                                                echo "<a href='viewinfra.php?id=$name'>  <option value=$status id='1'>$name</option> </a>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="cardbtm">
            <div class="floor6">
                <div class="image">
                    <img src="IT dept.jpg" alt="">
                </div>
                <div class="floor">
                    <h3>6th Floor</h3>
                </div>
                <div class="viewclass">
                    <button id="myBtn6" onclick="btn6()">View Rooms</button>
                    <div id="myModal6" class="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close" id="close6" onclick="shutdown6()">&times;</span>
                                <h2>Rooms on 6th floor</h2>
                            </div>
                            <div class="modal-body">
                                <div class="dropdown">
                                    <div class="modal-image"><img src="hardware.jpg" alt="Hardware image">
                                    </div>
                                    <button class="dropbtn">Select Room</button>
                                    <div class="dropdown-content">
                                        <?php
                                        $stmt = $pdo->prepare("select * from location");
                                        $stmt->execute();
                                        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $status = $result['lid'];
                                            $name = $result['lab'];
                                            $fname = $result['floor'];
                                            if ($result['floor'] == 6) {
                                                echo "<a href='viewinfra.php?id=$name'>  <option value=$status id='1'>$name</option> </a>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // var modal = document.getElementById("myModal1");
        // var span = document.getElementsByClassName("close")[0];
        // function onClick(element) {
        //     modal.style.display = "block";
        //     }
        // span.onclick = function() {
        // modal.style.display = "none";
        // }
        // window.onclick = function(event) {
        // if (event.target == modal) {
        //     modal.style.display = "none";
        // }
        // }
        // var2 modal = document.getElementById("myModal2");
        // var span = document.getElementsByClassName("close")[0];
        // function onClick(element) {
        //     modal.style.display = "block";
        //     }
        // span.onclick = function() {
        // modal2.style.display = "none";
        // }
        // window.onclick = function(event) {
        // if (event.target == modal2) {
        //     modal2.style.display = "none";
        // }
        // }


        function btn1() {
            let content1 = document.getElementById('myModal1');

            content1.style.display = "block";
        }

        function shutdown() {
            let content2 = document.getElementById('myModal1');
            content2.style.display = "none";

        }




        function btn2() {
            let content1 = document.getElementById('myModal2');

            content1.style.display = "block";
        }

        function shutdown2() {
            let content2 = document.getElementById('myModal2');
            content2.style.display = "none";

        }





        function btn3() {
            let content1 = document.getElementById('myModal3');

            content1.style.display = "block";
        }

        function shutdown3() {
            let content2 = document.getElementById('myModal3');
            content2.style.display = "none";

        }




        function btn4() {
            let content1 = document.getElementById('myModal4');

            content1.style.display = "block";
        }

        function shutdown4() {
            let content2 = document.getElementById('myModal4');
            content2.style.display = "none";

        }





        function btn5() {
            let content1 = document.getElementById('myModal5');

            content1.style.display = "block";
        }

        function shutdown5() {
            let content2 = document.getElementById('myModal5');
            content2.style.display = "none";

        }




        function btn6() {
            let content1 = document.getElementById('myModal6');

            content1.style.display = "block";
        }

        function shutdown6() {
            let content2 = document.getElementById('myModal6');
            content2.style.display = "none";

        }
    </script>


</body>

</html>