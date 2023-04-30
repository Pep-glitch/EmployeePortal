<?php
require 'user_authentication.php';
class LoginSession
{
    public $servername = 'localhost';
    public $username = 'root';
    public $dbpassword ='';
    public $dbname ='employee_mgt_sys';
    public $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
    public $sql = "SELECT * FROM employee_mgt_sys.employee WHERE ";
    public $result = mysqli_query($conn,$sql);
    public $row = mysqli_fetch_assoc($result);
    function get_username()
    {
        $l = new LoginSession();
        return $l->$row[''];
    }
}
?>