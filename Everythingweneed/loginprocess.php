<?php
session_start();
ob_start();
require('includes\database.php');
require('includes\users.php');
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['pass'];
    if(!empty($email) && !empty($password))
    {
        $user = new User;
        $user->email = $email;
        $user->password = $password;
        $result = $user->verifyLogin($email,$password);
        if($result)
        {
            $_SESSION['email'] = $email;
            header('Location:index.php');
            echo "Login Successful";
        }
        else{
            $_SESSION['msgheading'] = "Error";
            $_SESSION['msg'] = "Invalid Username or Password.";
            header('Location:login.php');
        }
    }
    else{
            $_SESSION['msgheading'] = "Error";
            $_SESSION['msg'] = "Username and Password are required.";
            header('Location:login.php');
    }
}
else{
    $_SESSION['msg'] = "Something Wicked Happened";
    header('Location:login.php');
}
?>