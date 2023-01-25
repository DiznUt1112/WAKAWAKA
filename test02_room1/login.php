<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบการยืม-คืนหนังสือ</title>
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <form method="post" action="login_db.php">
                    <h1 class="text-center mt-3">เข้าสู่ระบบ</h1>
                        <label for="user" class="form-label">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control mb-3" name="username" autofocus require>

                        <label for="pass" class="form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control mb-3" name="password" require>


                        <input type="submit" name="submit" value="ตกลง" class="btn btn-primary w-100 mb-1">
                        <input type="submit" name="reset" value="ยกเลิก" class="btn btn-primary w-100 mb-1">
                        
                    </form>
                        
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>