<?php
    //database configuration to connect to DB
    try
    { 
        $pdo = new PDO("mysql:host=localhost; dbname = employee_mgt_sys", "root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected";
        /*
        */
    }catch(PDOExceptioin $e)
    {
        echo "ERROR: Couldn't Connect".$e-getMessage();
    }

?>