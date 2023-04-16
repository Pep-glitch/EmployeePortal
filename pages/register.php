<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<?php
    include  '../includes\header.php';
?>
<body>
    <header>
        
    </header>

<div class="register_form">
    <form action="../server/send_register_data.php" class="form-outline mb-4" method = "POST">
        <div class="personal_info">
            <input type="text" name="firstname" placeholder ="firstname" id = "" class = "">
            <input type="text" name="lastname" placeholder ="lastname" id = "" class = "">
            <input type="date" name="dateOfBirth" placeholder ="DOB" id = "" class = "">
            <input type="radio" name="gender" placeholder ="" id = "male" class = "" value="Male" checked>
            <label for="male">Male</label>
            <input type="radio" name="gender" placeholder ="" id = "female" class = "" value="Female">
            <label for="female">Female</label>
            <br>
            <input type="email" name="email" placeholder ="email" id = "" class = "">
            <input type="text" name="height" placeholder ="height" id = "" class = "">
            <input type="text" name="marital_status" placeholder ="marital-status" id = "" class = "">
            <input type="text" name="placeOfBirth" placeholder ="place of birth" id = "" class = "">
            <input type="text" name="emp_state" id="" placeholder="state">
            <input type="text" name="city" id="" placeholder="city">
            <br>
            <input type="text" name="address" placeholder ="address" id = "" class = "">
            <input type="text" name="contact" placeholder ="mobile number" id = "" class = "">
            <label for="photofile">Photo</label>
            <input type="file" name="photo_file" placeholder ="photo" id ="photofile" class = "">
            
        </div>
        <hr>
        <div class="general_info">
            <input type="text" name="job_title" placeholder ="job title" id = "" class = "">
            <input type="text" name="office" placeholder ="office" id = "" class = "">
            <input type="text" name="department" placeholder ="department" id = "" class = ""><br>
            <input type="date" id="" name="dateOfEmployement">
            <input type="text" name="education" placeholder ="education" id = "" class = "">
            <input type="text" name="major" placeholder ="major" id = "" class = ""><br>
            <input type="text" name="graduation_school" placeholder ="graduation school" id = "" class = "">
            <input type="date" name="grad-year" placeholder ="graduation year" id = "" class = ""><br>
            <input type="password" name = "pass_word" placeholder = "password" id ="" ><br>
            <input type="text" name="employee_id">
            <input type="text" name="deptmnt_id">
            <input type="submit" name ="submit" value = "submit" id = "">
        </div>
    
    </form>
</div>

<?php
    include '../includes/footer.php';
?>
  