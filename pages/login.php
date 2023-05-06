<?php
    include'../includes/header.php';
?>
<title>Login</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/login.css">
<body class="bg-gradient-primary">
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image">
                        <!--<img src="../img/bg_login_form.jpg" alt="">bg-login-image  #source "https://source.unsplash.com/K4mSJ7kc0As/600x800"-->
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                   </div>
                                <form action="../server/user_authentication.php" class="user" method="POST">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                            <!--<div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>-->
                                        </div>
                                        <input type="submit" id="sub-btn" value="login"  name="login" class="btn btn-primary btn-user btn-block"> 
                                        <div class="text-center">
                                       <!-- <a class="small" href="forgot_password.php">Forgot Password?</a>-->
                                    </div>
                                    <hr>
                                    <?php
                                        include '../includes/footer.php';
                                    ?>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
