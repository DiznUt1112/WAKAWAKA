<?php
    include '../db.php';

    if(isset($_POST['submit'])){

    $mb_firstname = $_POST['mb_firstname'];
    $mb_lastname = $_POST['mb_lastname'];
    $mb_username = $_POST['mb_username'];
    $mb_password = $_POST['mb_password'];
    $mb_email = $_POST['mb_email'];
    $mb_phone = $_POST['mb_phone'];
    $mb_address = $_POST['mb_address'];


    //เข้ารหัส
   // $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $select = "SELECT * FROM tb_test02_mb WHERE mb_username = '$mb_username'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        echo "<script> alert('Username ซ้ำ'); window.location = 'insert.php'; </script>";
    } else {
        $sql = "INSERT INTO tb_test02_mb(mb_firstname, mb_lastname, mb_username, mb_password, mb_email, mb_phone, mb_address)
        VALUES ('$mb_firstname','$mb_lastname','$mb_username','$mb_password','$mb_email','$mb_phone','$mb_address')";

        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script> alert('บันทึกข้อมูลสำเร็จ'); window.location = 'member.php'; </script>";
        } 
            else {
                echo "<script> alert('บันทึกข้อมูลไม่สำเร็จ'); window.location = 'insert.php'; </script>";
        
            }
    }
    }
?>