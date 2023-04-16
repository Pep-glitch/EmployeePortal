<?php
    include '../includes/header.php';
?>
<body>
    <header>
        
    </header>
    <form action="../server/update_password.php" method="POST">
        <div>
            <input type="password" placeholder="Enter new password">
        </div>
        <div>
            <input type="password" placeholder="Confirm password">
        </div>
        <div>
            <input type="submit" value="Submit" class="">
        </div>
    </form>
<?php
    include '../includes/footer.php';
?>