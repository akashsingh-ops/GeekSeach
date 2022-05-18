<?php
session_start();
include('includes/database.php');
include('includes/users.php');
if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $college = $_POST['college'];
    $pass = $_POST['pass'];

    $user = new User();
    $user->firstname = $fname;
    $user->lastname = $lname;
    $user->email = $email;
    $user->course = $course;
    $user->year = $year;
    $user->college = $college;
    $user->password = $pass;

    if($user->check_email_already_exists())
    {
        $_SESSION['msgheading']="Error";
        $_SESSION['msg']="Email is Already Registered";
    }
     else{
        $result = $user->create();
        if($result)
        {
            // echo $res
            $_SESSION['msgheading'] = "Success";
            $_SESSION['msg'] = "USER REGISTERED SUCCESSFULLY";
        }
        else
        {
             $_SESSION['msgheading']="Error";
             $_SESSION['msg']="Problem in Registration.";
        }
    }
}
header('Location:register.php');
?>