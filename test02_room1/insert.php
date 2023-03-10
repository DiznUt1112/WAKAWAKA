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
                    <form method="post" action="insert_db.php">
                    <h1 class="text-center mt-3">เพิ่มข้อมูลสมาชิก</h1>

                        <label for="fisrtname" class="form-label">ชื่อจริง</label>
                        <input type="text" class="form-control mb-3" name="mb_firstname" require>

                        <label for="lastname" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control mb-3" name="mb_lastname" require>

                        <label for="username" class="form-label">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control mb-3" name="mb_username" autofocus require>

                        <label for="password" class="form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control mb-3" name="mb_password" require>

                        <label for="email" class="form-label">อีเมล</label>
                        <input type="text" class="form-control mb-3" name="mb_email" require>

                        <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control mb-3" name="mb_phone" require>
                        
                        <label for="address" class="form-label">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control mb-3" name="mb_address" require>

                        <div class="d-flex gap-3">
                        <input type="submit" name="submit" value="เพิ่มสมาชิก" class="btn btn-primary w-100 mb-1">
                      <!-- <input type="submit" name="reset" value="ยกเลิก" class="btn btn-danger w-100 mb-1"> -->
                    <a class="btn btn-primary w-100 mb-1" href ="member.php">ย้อนกลับ</a>
                        </div>
                        
                    </form>
                        
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>