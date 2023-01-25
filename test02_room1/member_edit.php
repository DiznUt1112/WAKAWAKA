<?php
    include_once "../db.php";
    session_start();
    if(!$_SESSION['login']){
        session_destroy();
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                <?php
                                include_once '../db.php';
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM tb_test02_mb WHERE mb_id = '$id'";
                                $result = mysqli_query($conn, $sql);
                            ?>
                         <?php while($row = mysqli_fetch_array($result)){  ?>
                    <form method="post" action="member_edit_db.php">
                    <h1 class="text-center mt-3">แก้ไขข้อมูลสมาชิก</h1>

                       <!-- ส่ง id วิธี hidden-->
                        <input type="hidden" name="id" value="<?php echo $row['mb_id'];?>">

                        <label for="firstname" class="form-label">ชื่อจริง</label>
                        <input type="text" class="form-control mb-3" name="mb_firstname" require value="<?php echo $row['mb_firstname'];?>">

                        <label for="lastname" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control mb-3" name="mb_lastname" require value="<?php echo $row['mb_lastname'];?>">

                        <label for="user" class="form-label">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control mb-3" name="mb_username" autofocus require value="<?php echo $row['mb_username'];?>">

                        <label for="pass" class="form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control mb-3" name="mb_password" require value="<?php echo $row['mb_password'];?>">

                        <label for="email" class="form-label">อีเมล</label>
                        <input type="text" class="form-control mb-3" name="mb_email" require value="<?php echo $row['mb_email'];?>">

                        <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control mb-3" name="mb_phone" require value="<?php echo $row['mb_phone'];?>">

                        <label for="address" class="form-label">ที่อยู่</label>
                        <input type="text" class="form-control mb-3" name="mb_address" require value="<?php echo $row['mb_address'];?>">

                        <div class="d-flex gap-3">
                        <input type="submit" name="submit" value="เพิ่มสมาชิก" class="btn btn-primary w-100 mb-1">
                      <!-- <input type="submit" name="reset" value="ยกเลิก" class="btn btn-danger w-100 mb-1"> -->
                      <a class="btn btn-primary w-100 mb-1" href ="member.php">ย้อนกลับ</a>
                        </div>
                        
                    </form>
                    <?php } ?>
                        
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>