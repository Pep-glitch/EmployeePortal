<?php
    include'../includes/header.php';
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/login.css">
        <form action="../server/login_validation.php" class="form-floating" method="POST">
            <div class="form-outline mb-4">
                 <label for="mail-input" class="form-label">Email</label>
                 <input type="email" class="form-control" id="mail-input">
            </div>
            <div class="form-outline mb-4">
                 <label for="passwd" class="form-label">Password</label>
                 <input type="password" class="form-control" id="passwd">
            </div>
                <input type="submit" id="sub-btn" value="login" class="btn btn-primary btn-block mb-4"> 
                <p>Not a member? <a href="register.php">Register</a></p> 
                <div class="col">
                <a href="forgot_password.php">Forgot password?</a>
                </div>
            
        </form>
<?php
    include '../includes/footer.php';
?>