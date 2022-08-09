<?php

include_once 'backend/conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>RAIT || System Tracker</title>
    <link rel="icon"
        href="https://lh3.googleusercontent.com/proxy/zr1oiB6hYZkYS87NCZLI4N2QKe7rMI7hyISGx3BOkW-Km5myCbXVqFn0eLWVYkq2NRARVz6AZiZ1FUit1e31oi3qcI6weF8EWPSexAXfgzuW1p9_fwwbYc0Hbw"
        type="image/y-icon">
</head>



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
            <div class="user"><i class="far fa-user"></i>&nbsp; &nbsp;UserName</div>
        </div>
        <div class="header">
            <span class="image-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" alt="RAIT">
            </span>
            <ul class="header-element">

                <li id="element-1"><a href="#"> HOME</a></li>
                <li><a href="#" id="button" onclick="toggleHide()">LOGIN</a></li>
                <li><a href="#" id="button1" onclick="toggleHide1()">REGISTER</a></li>
                <li><a href="index.html">CONTACT US</a></li>

            </ul>
        </div>
        <div class="popup" id="show">
            <div class="popup-content">
                <div class="box">
                    <form action="backend/loginback.php" method="POST">
                        <img src="https://p.kindpng.com/picc/s/504-5043069_close-button-png-icon-transparent-png-close-svg.png"
                            alt="close" width="25px" height="25px" class="close" onclick="toggleShow()">
                        <h1>Sign In</h1>
                        <div class="row">
                            <input type="text" name="username" placeholder="username" required>
                        </div>
                        <div class="row">
                            <input type="password" name="password" placeholder="password" required>

                        </div>
                        <input type="submit" name="login" class="login" value="Login" id="login-btnStyle">

                    </form>
                </div>

            </div>
        </div>
        <div class="popup2" id="show1">
            <div class="container" id="container">
                <img src="https://p.kindpng.com/picc/s/504-5043069_close-button-png-icon-transparent-png-close-svg.png"
                    alt="close" width="25px" height="25px" class="close" onclick="toggleShow1()" id="close2">

                <div class="form-container sign-up-container">
                    <form action="backend/registerback.php" method="POST">
                        <h1>Create Account</h1>

                        <input type="text" placeholder="Name" name="username" required />
                        <input type="email" placeholder="Email" name="email" required />
                        <input type="text" placeholder="Password" name="password" required />
                        <input type="text" placeholder="Roll No" name="rollno" required />
                        <button name="signupstu">Sign Up</button>
                    </form>
                </div>
                <div class="form-container sign-in-container">
                    <form action="backend/registerback.php" method="POST">
                        <h1>Create Account</h1>

                        <input type="text" placeholder="Name" name="username" required />
                        <input type="email" placeholder="Email" name="email" required />
                        <!-- <input type="text" placeholder="Password" /> -->
                        <input type="text" placeholder="Password" name="password" required />
                        <input type="text" placeholder="Srn No" name="srnno" required />
                        <!-- <a href="#">Forgot your password?</a> -->
                        <button name="signuptea">Sign Up</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Facualty Members</h1>
                            <p>Creat Your Account</p>
                            <button class="ghost" id="signIn">click</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>College Students</h1>
                            <p>Creat Your Account</p>
                            <button class="ghost" id="signUp">click</button>
                        </div>
                    </div>
                </div>
            </div>

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
                <a href="#" class="btntwo" onclick="toggleHide1()"><span class="replies">NEW </span>
                    <span class="comment">CLICK HERE</span></a>
            </section>
        </main>




    </section>

    <script src="index.js"></script>



</body>

</html>