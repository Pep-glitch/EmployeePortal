<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
            #Form Validation
            
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $major = $_POST['major'];
            $jobtile = $_POST['job_title'];
            $education = $_POST['education'];
            $school= $_POST['graduation_school'];
            $birthplace = $_POST['placeOfBirth'];
            $city = $_POST['city'];
            $state = $_POST['emp_state'];
            $role = $_POST['user_role'];
            $email = $_POST['email'];
            $status = $_POST['marital_status'];
           
                $firstname = trim($firstname);
                $firstname = htmlspecialchars($firstname);
                'fname' == $firstname;
                $jobtitle = trim($jobtile);
                $jobtitle = htmlspecialchars($jobtile);
                'jobtitle' == $jobtile;
                $lastname = trim($lastname);
                $lastname = htmlspecialchars($lastname);
                'lastname' == $lastname;
                $education = trim($education);
                $education = htmlspecialchars($education);
                'education' == $education;
                $state = trim($state);
                $state = htmlspecialchars($state);
                'emp_state' ==$state;
                $school = trim($school);
                $school = htmlspecialchars($school);
                'school' ==$school;
                $status = trim($status);
                $status = htmlspecialchars($status);
                'mstatus' == $status;
                $city = trim($city);
                $city = htmlspecialchars($city);
                'city' ==$city;
                $role = trim($role);
                $role = htmlspecialchars($role);
                'urole' ==$role;
                $birthplace = trim($birthplace);
                $birthplace = htmlspecialchars($birthplace);
                'birthplace' == $birthplace;
                $major = trim($major);
                $major = htmlspecialchars($major);
                'major' == $major;
        require_once 'connect.php';
        $sql = "INSERT INTO employee_mgt_sys.employee(emp_name,lastname,emp_id,emp_contact,date_of_birth,employment_day,emp_city,emp_state,dept_id,gender,job_title,height,place_of_birth,marital_status,user_role,department_name,education,major,graduation_school,email,pass_word) VALUES(:fname,:lastname,:employee_id,:contact,:dateOfBirth,:dateOfEmployement,:city,:emp_state,:deptmnt_id,:gender,:jobtitle,:height,:birthplace,:mstatus,:urole,:department,:education,:major,:school,:email,:pass_word)";

        $res = $pdo->prepare($sql);
        $res->bindParam(':fname',$_REQUEST['firstname']);
        $res->bindParam(':lastname',$_REQUEST['lastname']);
        $res->bindParam(':employee_id',$_REQUEST['employee_id']);
        $res->bindParam(':contact',$_REQUEST['contact']);
        $res->bindParam(':dateOfBirth',$_REQUEST['dateOfBirth']);
        $res->bindParam(':dateOfEmployement',$_REQUEST['dateOfEmployement']);
        $res->bindParam(':city',$_REQUEST['city']);
        $res->bindParam(':emp_state',$_REQUEST['emp_state']);
        $res->bindParam(':deptmnt_id',$_REQUEST['deptmnt_id']);
        $res->bindParam(':gender',$_REQUEST['gender']);
        $res->bindParam(':jobtitle',$_REQUEST['job_title']);
        $res->bindParam(':height',$_REQUEST['height']);
        $res->bindParam(':birthplace',$_REQUEST['placeOfBirth']);
        $res->bindParam(':mstatus',$_REQUEST['marital_status']);
        $res->bindParam(':urole',$_REQUEST['user_role']);
        $res->bindParam(':department',$_REQUEST['department']);
        $res->bindParam(':education',$_REQUEST['education']);
        $res->bindParam(':major',$_REQUEST['major']);
        $res->bindParam(':school',$_REQUEST['graduation_school']);
        $res->bindParam(':email',$_REQUEST['email']);
        $res->bindParam(':pass_word',$_REQUEST['pass_word']);
        #$res->bindParam(':photo_file',$_REQUEST['photo_file']);
        try {
            $res->execute();
            echo "Register Success";
           
            //code...
        } catch (PDOExceptioin $e) {
            //throw $th;
            echo "ERROR: Couldn't Connect".$e-getMessage();
        }

        unset($pdo);
        header("location: ../pages/register.php? msg = Employee Registered Successfully");
    }
?>
