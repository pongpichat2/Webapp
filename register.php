<?php
    $name =  $_POST["NAMEA"];
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $confirmpass = $_POST["ConfirmPassword"];
    $Age = $_POST["Age"];


    require("conn.php");
    
    
    
    //เพิ่มข้อมูล
    $sql = "INSERT INTO register (NAME, Username, PASSWORD, ConfirmPassword, Age)
                    Value ('$name', '$username', '$password', '$confirmpass', $Age)";

    if ($_POST["Password"] != $_POST["ConfirmPassword"] ){
        echo "รหัสไม่เข้ากัน";
        exit();
    }

                     
    if ($conn->query($sql) == TRUE) {
        
        header("Location:index.html");
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
?>


