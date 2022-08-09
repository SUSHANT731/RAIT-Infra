<?php

// print_r($_POST);

include 'conn.php';
if(isset($_POST['login'])){
    $username= $_POST['username'];
    $password= $_POST['password'];

    // login query
    $loginQuery = "SELECT * FROM `register` WHERE `name`='$username'";
    $login_result = mysqli_query($conn,$loginQuery);

    if(mysqli_num_rows($login_result)>0){
        $row = mysqli_fetch_assoc($login_result);
        $db_password = $row['password'];
        if($password == $db_password){
            echo "<script>alert('Logged In Succesfully!!')</script>";

            // session
            session_start();
            $_SESSION['username'] = $username;
            echo  "<script>window.location = '../userhome.php'</script>";

            $_SESSION['auth']=1;
            
        
        }
        else{
            echo "<script>alert('Password is Wrong')</script>";
            echo  "<script>window.location = '../index.php'</script>";
        }
        
    }   
    else{
        echo  "<script> alert ('Username does not exist')</script>";
        echo  "<script>window.location = '../index.php'</script>";
    }
}


?>



