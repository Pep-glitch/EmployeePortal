<?php
// namespace Phppot;
// use \Phppot\DataSource;
// use \Phppot\Member;
#require_once 'connect.php';
#Database Credentials
$servername = 'localhost';
$username = 'root';
$dbpassword ='';
$dbname ='employee_mgt_sys';
$conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
$email = $_POST['email'];
$password = $_POST['password'];
try
{
    $sql = "SELECT email,pass_word FROM employee_mgt_sys.employee WHERE (BINARY email= '$email') AND BINARY  pass_word ='$password' ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        echo"Inside If clause";
        session_start();
        $row = mysqli_fetch_assoc($result);
      #  $_SESSION['id']=$row['id'];
        $_SESSION['email']=$row['email'];
        $_SESSION['logged_in']=true;
       # $_SESSION['permission']=$row['permission'];
        header("location:../pages/employee_dashboard.php");
        echo"After IF";
    }
    else
    {
        //header("location:../pages/login.php"); 
        ?>
        <script>
            alert("Error")
        </script>
        <?php
        
        
    }
}
catch(\Exception $e)
{
    echo $e->getMessage();
}
/*
function  get_username()
{
    $servername = 'localhost';
    $username = 'root';
    $dbpassword ='';
    $dbname ='employee_mgt_sys';
    $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
    echo"connectd";
        $email =$_POST['email'];
        $sql = "SELECT emp_name FROM employee_mgt_sys.employee WHERE BINARY email= '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['emp_name'];
        return ;
    }
    /*
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
    }*/
?>
