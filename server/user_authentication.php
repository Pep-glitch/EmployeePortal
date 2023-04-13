<?php
namespace Phppot;
    if(! empty($_POST['login']))
    {
        session_start();
        $email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
        require_once("Member");
        $member = new Member();
        $is_logged_in = $member->processLogin($email,$password);
        if(! $is_logged_in)
        {
            $_SESSION['errorMessage'] = "Incorrect password or email";
        }
        header();
        exit();
    }
?>
<?php
class Member
{
    
    
}
class DataSource
{

}

?>