<?php
    include '../includes/header.php';
    require_once '../server/connect.php';
    session_start();
    if(isset($_POST['delete_id']))
        {
            $user_id = $_POST['delete_id'];
            $sql = "DELETE  FROM employee_mgt_sys.employee WHERE emp_id=? LIMIT 1";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(1,$user_id,PDO::PARAM_INT);
                $res =$stmt->execute();
            if($res)
                {
                    header('location: ../pages/admin_dashboard.php');
                }
            else{}
        }

?>
<?php
    include '../includes/footer.php';
?>