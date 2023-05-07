<?php
#Database Credentials
include '../includes/header.php';
include 'connect.php';
$email = $_POST['email'];
$password = $_POST['password'];
try
{
    $sql = "SELECT * FROM employee_mgt_sys.employee WHERE (BINARY email= '$email') AND BINARY  pass_word ='$password' ";
    $result = $pdo->query($sql);
    if($row=$result->fetch())
    {
        session_start();
        $_SESSION['id']=$row['emp_id'];
        $_SESSION['email']=$row['email'];
        $_SESSION['logged_in']=true;
        $_SESSION['user_role']=$row['user_role'];
        $_SESSION['name']=$row['emp_name'].' '.$row['lastname'];
        $_SESSION['job_title']=$row['job_title'];
        $_SESSION['date_of_birth']=$row['date_of_birth'];
        $_SESSION['city']=$row['emp_city'];
        $_SESSION['employment_day']=$row['employment_day'];
        $_SESSION['department_name']=$row['department_name'];
        $_SESSION['employee_contact']=$row['emp_contact'];
        $_SESSION['photo'] = $row['photo'];
        $_SESSION['major'] = $row['major'];
        $_SESSION['school'] = $row['graduation_school'];
        $_SESSION['qualification'] = $row['education'];
        $_SESSION['status'] = $row['marital_status'];
        $_SESSION['state'] = $row['emp_state'];
        $_SESSION['birth_place'] = $row['place_of_birth'];
        session_commit();
       if (strcmp($row['user_role'],'Admin')==0) {
        # For Admin Login, Admin Dashboard to be Rendered
        header("location:../pages/admin_dashboard.php");
       } 
       elseif(strcmp($row['user_role'],'Manager')==0)
       {
        #Manager Login, Manager Dashboard to be rendered
        header("location:../pages/manager_dashboard.php");
        
       }
       else {
        # Ordinary Employee Login, Employee dashboard to be Rendered
        header("location:../pages/person.php");
       }
    }
    else
    {
        //header("location:../pages/login.php");  
        ?>
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Oops!</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Incorrect Email or password</div>
            <div class="modal-footer">
                <!--<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>-->
                <a class="btn btn-primary" href="../pages/login.php">OK</a>
            </div>
        </div>
    </div>
    <?php
    }
}
catch(\Exception $e)
{
    echo $e->getMessage();
}
 
    include '../includes/footer.php';

?>

