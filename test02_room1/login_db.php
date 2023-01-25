<?php
    session_start();
    include "../db.php";
    if(isset($_POST["submit"])){
        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM tb_test02_mb WHERE mb_username = '$username' AND mb_password = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        // เช็คว่ามีข้อมูลหรือไม่
        if(!empty($row)){

            //เช็คสิทธ์การเข้าใช้งาน
                $_SESSION['login'] = $row['mb_id'];
                echo "<script>window.location = 'member.php'; </script>";
            } 
        } else {
            echo "<script> alert('ไม่สามารถเข้าระบบได้ !!'); window.location = 'login.php'; </script>";

    }

?>