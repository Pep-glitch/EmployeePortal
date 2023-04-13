<?php
namespace Phppot;
use \Phppot\DataSource;
use \Phppot\Member;
echo "testing";
    if(! empty($_POST['login']))
    {
        session_start();
        echo "Session Started";
        $email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
        echo "getting somewhere";
        require_once("Member.php");
        $member = new Member();
        $is_logged_in = $member->process_login($email,$password);
        if(! $is_logged_in)
        {
            $_SESSION['errorMessage'] = "Incorrect password or email";
        }
        header("Location :");
        exit();
    }
?>
