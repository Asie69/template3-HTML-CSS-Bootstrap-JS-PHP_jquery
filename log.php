<?php
session_start();
require('connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = valid($_POST['username']);
    $password = valid($_POST['password']);

    $q_select_user = "SELECT * FROM users where username = '$username'";
    $res = mysqli_query($conn,$q_select_user);

    if(mysqli_num_rows($res)>0){
        $user_data = mysqli_fetch_assoc($res);
        if(password_verify($password,$user_data['password'])){
            $_SESSION['username']= $user_data['username'];
            $_SESSION['role']= $user_data['role'];
            $_SESSION['id_user']= $user_data['id'];
            header('Location:index.php');

        }else{
        header('Location:login.php?err=پسورد اشتباه است');

        }

    }else{
        header('Location:login.php?err=نام کاربری وجود ندارد');
    }


}



mysqli_close($conn);


function valid($val){
    $val = trim($val);
    $val = stripslashes($val);
    $val = htmlspecialchars($val);
    return $val;
    
}