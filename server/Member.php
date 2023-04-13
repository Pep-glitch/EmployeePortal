<?php
namespace Phppot;
use \Phppot\DataSource;
class Member
{
   private $db_conn;
   private $ds;
   function __construct()
   {
    require_once "DataSource.php";
    $this->ds = new DataSource();
   } 
   function get_member_by_id($member_id)
   {
    $query = "SELECT * FROM employee_mgt_sys.employee WHERE emp_id =?";
    $parameter_type ="i";
    $paraneter_array = array($member_id);
    $member_result = $this->ds->select($query,$parameter_type,$paraneter_array);
    return $member_result;
   } 
   function process_login($email,$password)
   {
     $query = "SELECT * FROM employee_mgt_sys.employee WHERE emp_id =?";
     $parameter_type = "ss";
     $parameter_array = array($email);
     $member_result = $this->ds->select($query, $parameter_type,$parameter_array);
     if(! empty($member_result))
     {
        $hashed_password = $member_result[0]["password"];
        if(password_verify($password,$hashed_password))
        {
            $_SESSION['userId'] = $member_result[0]["emp_id"];
            echo "Login Successful";
            return true;
        }
     }
     echo "Invalid details";
     return false;
   }
}
?>