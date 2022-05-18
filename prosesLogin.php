<?php
    include "myconnection.php";

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM admin WHERE username='$username' && password='$password'";
    $result = mysqli_query($connect, $query);
    $check = mysqli_num_rows($result);

    if($check>0){
        header("Location:adminPage.php");
        if($username == "admin1" && $password == "123" || $username == "admin2" && $password == "234"){
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["role"] = "admin";
            header("Location:adminPage.php");
        }else{
            echo "Incorrect username or password, please try again!";
        }
    }
    else{
        header("Location:formLogin.php?error=gagal");
    }
?>
