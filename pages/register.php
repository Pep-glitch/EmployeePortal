<head>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

</head>
<?php
    include  '../includes\header.php';
?>
<body class="bg-gradient-primary">
    <header>
        
    </header>

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form action="../server/send_register_data.php" class="user" method = "POST">
                                <div class="form-group">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="photofile">Photo</label>
                                                <input type="file" name="photo_file" placeholder ="photo" id ="photofile" class = "">
                                        </div>
                                    <div class="form-group row">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" name="firstname" placeholder ="firstname" id = "" class = "form-control form-control-user">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" name="lastname" placeholder ="lastname" id = "" class = "form-control form-control-user">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="date" name="dateOfBirth" placeholder ="DOB" id = "" class = "form-control form-control-user">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" name="placeOfBirth" placeholder ="place of birth" id = ""   class = "form-control form-control-user">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="radio" name="gender" placeholder ="" id = "male" class = "" value="Male" checked>
                                                <label for="male">Male</label>
                                                <input type="radio" name="gender" placeholder ="" id = "female" class = "" value="Female">
                                                <label for="female">Female</label>
                                                <br>
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0" >
                                                 <input type="text" name="height" placeholder ="height" id = "" class = "form-control form-control-user">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                             <input type="email" name="email" placeholder ="email" id = "" class ="form-control form-control-user">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                             <input type="text" name="marital_status" placeholder ="marital-status" id = "" class = "form-control form-control-user">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="emp_state" id="" placeholder="state" class = "form-control form-control-user">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="city" id="" placeholder="city" class = "form-control form-control-user">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="address" placeholder ="address" id = "" class = "form-control form-control-user">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                             <input type="text" name="contact" placeholder ="mobile number" id = "" class = "form-control form-control-user">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="text" name="job_title" placeholder ="job title" id = "" class = "form-control form-control-user">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="text" name="user_role" placeholder ="Role" id = "" class = "form-control form-control-user">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="text" name="department" placeholder ="department" id = "" class = "form-control form-control-user">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="date" id="" name="dateOfEmployement" class="form-control form-control-user" placeholder="Start Date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="text" name="education" placeholder ="education" id = "" class = "form-control form-control-user">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                               <input type="text" name="major" placeholder ="major" id = "" class = "form-control form-control-user">
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                               <input type="text" name="graduation_school" placeholder ="graduation school" id = "" class = "form-control form-control-user">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                               <input type="date" name="grad-year" placeholder ="graduation year" id = "" class = "form-control form-control-user">
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="password" name = "pass_word" placeholder = "password" id ="" class="form-control form-control-user">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                               <input type="text" name="employee_id" class="form-control form-control-user" placeholder="employeID" >
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="text" name="deptmnt_id" class="form-control form-control-user" placeholder="repeat password" >
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="submit" name ="submit" value = "Register Account" id = "" class="btn btn-primary btn-user btn-block" >
                                          <!--    <a href="" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>-->
                                        </div>
                                        <div class="text-center">
                                        <a class="small" href="login.php">Already a user? login</a>
                                    </div>
                                    </div>       
                                </div>
                            </form>
                    </div>        
                </div>        
            </div>        
        </div>        
    </div>
</div>

<?php
    include '../includes/footer.php';
?>
  