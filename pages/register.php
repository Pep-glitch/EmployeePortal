<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<?php
    include  '../includes\header.php';
?>

<div class="register_form">
    <form action="" class="form-outline mb-4">
        <div class="personal_info">
            <input type="text" name="firstname" placeholder ="firstname" id = "" class = "">
            <input type="text" name="lastname" placeholder ="lastname" id = "" class = "">
            <input type="date" name="dateOfBirth" placeholder ="DOB" id = "" class = "">
            <input type="checkbox" name="gender" placeholder ="" id = "" class = ""><br>
            <input type="email" name="email" placeholder ="email" id = "" class = "">
            <input type="text" name="height" placeholder ="height" id = "" class = "">
            <input type="text" name="marital-status" placeholder ="marital-status" id = "" class = "">
            <input type="text" name="placeOfBirth" placeholder ="place of birth" id = "" class = ""><br>
            <input type="text" name="address" placeholder ="address" id = "" class = "">
            <input type="text" name="mobile-number" placeholder ="mobile number" id = "" class = "">
            <input type="text" name="" placeholder ="photo" id = "" class = "">
        </div>
        <hr>
        <div class="general_info">
            <input type="text" name="job_title" placeholder ="job title" id = "" class = "">
            <input type="text" name="office" placeholder ="office" id = "" class = "">
            <input type="text" name="department" placeholder ="department" id = "" class = ""><br>
            <input type="text" name="education" placeholder ="education" id = "" class = "">
            <input type="text" name="major" placeholder ="major" id = "" class = ""><br>
            <input type="text" name="graduation_school" placeholder ="graduation school" id = "" class = "">
            <input type="date" name="grad-year" placeholder ="graduation year" id = "" class = ""><br>
            <input type="password" name = "password" placeholder = "password" id ="" ><br>
            <input type="submit" name ="submit" value = "submit" id = "">
        </div>
    
    </form>
</div>

<?php
    include '../includes/footer.php';
?>
  