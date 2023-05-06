<?php
    include '../includes/header.php';
    session_start();
    #$sessionID = $_SESSION['id'];
    $servername = 'localhost';
    $username = 'root';
    $dbpassword ='';
    $dbname ='employee_mgt_sys';
    $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
    $name = $_SESSION['name'];
    
?>
 <body id="page-top">
    <div class="" id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Express<sup>E</sup>nterprise</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="admin_dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Interface
            </div>
            <!--<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Teams</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Teams List:</h6>
                        <a class="collapse-item" href="#">Team One</a>
                        <a class="collapse-item" href="#">Team Two</a>
                    </div>
                </div>
            </li>-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Projects</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Ongoing Projects:</h6>
                        <?php
                        $projects_selection = "SELECT * FROM employee_mgt_sys.projects";
                        $projects_result =mysqli_query($conn,$projects_selection);
                        $project_row =mysqli_fetch_assoc($projects_result);
                        if(mysqli_num_rows($projects_result)>0)
                        {
                           while($project_row =mysqli_fetch_assoc($projects_result))
                           {
                            ?>
                            <a onclick="hide()" class="bg-white py-2 collapse-item" href="" id="project-btn"><?php echo $project_row['title'];
                            ?>
                            </a>
                            <?php
                           } 
                        }
                        ?>
                       
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Admin Panel</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin</h6>
                        <!--<a class="collapse-item" href="../pages/login.php">Login</a>-->
                        <a class="collapse-item" href="../pages/register.php">Register Employee</a>
                        <!--<a class="collapse-item" href="../pages/forgot_password.php">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>-->
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Addons
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Account</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Account Details:</h6>
                        <a class="collapse-item" href="admin.php">Personal Information</a>
                        <!--<a class="collapse-item" href="register.html">Education</a>-
                        <a class="collapse-item" href="forgot-password.html">Professional Background</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">more:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item active" href="blank.html">Blank Page</a>-->
                    </div>
                </div>
            </li>
            <!--<li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Leave</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Duties</span></a>
            </li>-->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Employees</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
           <div id="content">
                 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                 <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                   <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>-->
                    <ul class="navbar-nav ml-auto">
                        <!--
                    <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>-->
                       <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                 Counter - Alerts 
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>-->
                        <!--
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                 Counter - Messages 
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                              Dropdown - Messages 
                             <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>-->
                        <div class="topbar-divider d-none d-sm-block"></div>
                         <!-- Nav Item - User Information -->
                         <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name;?></span>
                                <img class="img-profile rounded-circle"
                                    src="svg/undraw_profile.svg">
                            </a>
                             <!-- Dropdown - User Information -->
                             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!--<a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>-->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                                <!-- Begin Page Content -->
              <!-- <div class="container-fluid">-->

               
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register Employee</h1>
                        </div>
                        <form onsubmit="return formValidation()" action="../server/send_register_data.php" class="user" method = "POST">
                                <div class="form-group">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="photofile">Photo</label>
                                                <input type="file" name="photo_file" placeholder ="photo" id ="photofile" class = "" oninput=""><div></div>
                                        </div>
                                    <div class="form-group row">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input oninput="validateFirstname()" type="text" name="firstname" placeholder ="firstname" id = "firstnameID"   class = "form-control form-control-user"required>
                                                <div id="firstnameError" style="color: red; font-size:10px"></div>
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input oninput="validateLastname()" type="text" name="lastname" placeholder ="lastname" id = "lastnameID" class = "form-control form-control-user" required>
                                                <div id="lastnameError" style="color: red; font-size:10px"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="date" name="dateOfBirth" placeholder ="DOB" id = "" class = "form-control form-control-user" required>
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input oninput="validateBirth()" type="text" name="placeOfBirth" placeholder ="place of birth" id = "birthID"   class = "form-control form-control-user" required><div id="birthError" style="color: red; font-size:10px"></div>
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
                                                 <input  type="text" name="height" placeholder ="height" id = "heightID" class = "form-control form-control-user" required><div id="heightError"></div>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                             <input oninput="validateEmail()" type="email" name="email" placeholder ="email" id = "emailID" class ="form-control form-control-user" required><div id="emailError" style="color: red; font-size:10px"></div>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                             <input oninput="validateStatus()" type="text" name="marital_status" placeholder ="marital-status" id = "statusID" class = "form-control form-control-user" required><div id="statusError" style="color: red; font-size:10px"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input oninput="validateState()" type="text" name="emp_state" id="stateID" placeholder="state" class = "form-control form-control-user" required><div id="stateError" style="color: red; font-size:10px"></div>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input oninput="validateCity()" type="text" name="city" id="cityID" placeholder="city" class = "form-control form-control-user" required><div id="cityError" style="color: red; font-size:10px"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input  type="text" name="address" placeholder ="address" id ="addressID" class = "form-control form-control-user" required><div id="addressError"></div>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                             <input oninput="" type="text" name="contact" placeholder ="mobile number" id= "contactID" class = "form-control form-control-user" required><div id="contactError"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input oninput="validateJob()" type="text" name="job_title" placeholder ="job title" id = "jobID" class = "form-control form-control-user" required><div id="jobError" style="color: red; font-size:10px"></div>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input oninput="validateRole()" type="text" name="user_role" placeholder ="Role" id="roleID" class = "form-control form-control-user" required><div id="roleError" style="color: red; font-size:10px"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="text" name="department" placeholder ="department" id= "deptNameID" class = "form-control form-control-user" required><div id="deptNameError"></div>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="date" id="" name="dateOfEmployement" class="form-control form-control-user" placeholder="Start Date" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input oninput="validateEducation()" type="text" name="education" placeholder ="education" id = "educationID" class = "form-control form-control-user" required><div id="educationError" style="color: red; font-size:10px"></div>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                               <input oninput="validateMajor()" type="text" name="major" placeholder ="major" id = "majorID" class = "form-control form-control-user" required><div id="majorError" style="color: red; font-size:10px"></div>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                               <input oninput="validateSchool()" type="text" name="graduation_school" placeholder ="graduation school" id = "schoolID" class = "form-control form-control-user" required><div id="schoolError" style="color: red; font-size:10px"></div>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                               <input type="date" name="grad-year" placeholder ="graduation year" id = "" class = "form-control form-control-user" required>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="password" name = "pass_word" placeholder = "password" id ="" class="form-control form-control-user" required><div id=""></div>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                               <input type="text" name="employee_id" id="employeeID" class="form-control form-control-user" placeholder="employeID" required><div id="employeeIDError"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="text" name="deptmnt_id" class="form-control form-control-user" placeholder="DepartmentID" required><div id=""></div>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input  type="submit" name ="submit" value = "Register Account" id = "" class="btn btn-primary btn-user btn-block" required>
                        
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
             <!-- /.container-fluid  </div> -->
             
<!-- End of Main Content -->


             </div>
                <!-- End of Main Content -->
       </div>

         </div>
        <!-- End of Content Wrapper -->

    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../pages/login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include '../includes/footer.php';
    ?>