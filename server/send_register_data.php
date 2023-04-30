<?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        require_once 'connect.php';
        $sql = "INSERT INTO employee_mgt_sys.employee(emp_name,lastname,emp_id,emp_contact,date_of_birth,employment_day,emp_city,emp_state,dept_id,gender,job_title,height,place_of_birth,marital_status,user_role,department_name,education,major,graduation_school,email,pass_word,photo) VALUES(:firstname,:lastname,:employee_id,:contact,:dateOfBirth,:dateOfEmployement,:city,:emp_state,:deptmnt_id,:gender,:job_title,:height,:placeOfBirth,:marital_status,:user_role,:department,:education,:major,:graduation_school,:email,:pass_word,:photo_file)";

        $res = $pdo->prepare($sql);
        $res->bindParam(':firstname',$_REQUEST['firstname']);
        $res->bindParam(':lastname',$_REQUEST['lastname']);
        $res->bindParam(':employee_id',$_REQUEST['employee_id']);
        $res->bindParam(':contact',$_REQUEST['contact']);
        $res->bindParam(':dateOfBirth',$_REQUEST['dateOfBirth']);
        $res->bindParam(':dateOfEmployement',$_REQUEST['dateOfEmployement']);
        $res->bindParam(':city',$_REQUEST['city']);
        $res->bindParam(':emp_state',$_REQUEST['emp_state']);
        $res->bindParam(':deptmnt_id',$_REQUEST['deptmnt_id']);
        $res->bindParam(':gender',$_REQUEST['gender']);
        $res->bindParam(':job_title',$_REQUEST['job_title']);
        $res->bindParam(':height',$_REQUEST['height']);
        $res->bindParam(':placeOfBirth',$_REQUEST['placeOfBirth']);
        $res->bindParam(':marital_status',$_REQUEST['marital_status']);
        $res->bindParam(':user_role',$_REQUEST['user_role']);
        $res->bindParam(':department',$_REQUEST['department']);
        $res->bindParam(':education',$_REQUEST['education']);
        $res->bindParam(':major',$_REQUEST['major']);
        $res->bindParam(':graduation_school',$_REQUEST['graduation_school']);
        $res->bindParam(':email',$_REQUEST['email']);
        $res->bindParam(':pass_word',$_REQUEST['pass_word']);
        $res->bindParam(':photo_file',$_REQUEST['photo_file']);
        try {
            $res->execute();
            //code...
        } catch (PDOExceptioin $e) {
            //throw $th;
            echo "ERROR: Couldn't Connect".$e-getMessage();
        }
       
        unset($pdo);
        header("location: ../pages/register.php? msg = Employee Registered Successfully");
    }
?>
