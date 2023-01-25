<?php
    include_once '../db.php';
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tb_test02_mb WHERE mb_id = '$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script> alert('ลบผู้ใช้งานสำเร็จ'); window.location = 'member.php'; </script>";
        } else {
            echo "<script> alert('ไม่สามารถลบผู้ใช้งานได้'); window.location = 'insert.php'; </script>";
    
        }
    }
?>
