<?php
    include '../db.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $mb_firstname = $_POST['mb_firstname'];
        $mb_lastname = $_POST['mb_lastname'];
        $mb_username = $_POST['mb_username'];
        $mb_password = $_POST['mb_password'];
        $mb_email = $_POST['mb_email'];
        $mb_phone = $_POST['mb_phone'];
        $mb_address = $_POST['mb_address'];

        $sql = "UPDATE tb_test02_mb SET 
        mb_firstname='$mb_firstname',
        mb_lastname='$mb_lastname',
        mb_username='$mb_username',
        mb_password='$mb_password',
        mb_email='$mb_email',
        mb_phone='$mb_phone', 
        mb_address='$mb_address' 
        WHERE mb_id = '$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>window.location = 'member.php'; </script>";
        } else {
            echo "<script> alert('ไม่สามารถแก้ไขข้อมูลได้'); window.location = 'member_edit.php'; </script>";
    
    }
}
?>