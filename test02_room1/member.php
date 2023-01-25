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

    <!-- icon -->
    <link rel="stylesheet" href="../icon/bootstrap-icons.css">

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!--ส่วนของ navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="member.php">test</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link" href="member.php">จัดการข้อมูลสมาชิก</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active"  href="order.php">จัดการข้อมูลสั่งซื้อ</a>
                            </li>
                    </ul>
                <form class="d-flex" role="search" method="post" action="member_search.php">
                    <input class="form-control me-2" type="search" name="search" placeholder="ค้นหาข้อมูลที่นี่" aria-label="Search">
                    <button class="btn btn-outline-success w-50" type="submit"><i class="bi bi-search"></i> ค้นหา</button>
                    
                </form>
                <a  class="btn btn-success  ms-2" href="logout.php">ออกจากระบบ <i class="bi bi-box-arrow-right"></i></a>
                </div>
            </div>
        </nav>

        <!--ส่วนของ table-->
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mt-5">ตารางข้อมูลสมาชิก</h1>
                    <a class="btn btn-success float-end mb-3" href="insert.php"><i class="bi bi-plus-circle"></i> เพิ่มข้อมูลสมาชิก</a>
                    <div class="talbe-responsive">
                        <table class="table table-hover table-bordered text-center">
                            <tr>
                                <th>ชื่อจริง</th>
                                <th>นามสกุล</th>
                                <th>ชื่อผู้ใช้</th>
                                <th>รหัสผ่าน</th>
                                <th>อีเมล</th>
                                <th>เบอร์โทรศัพท์</th>
                                <th>ที่อยู่</th>
                            </tr>
                            <?php
                                include_once '../db.php';
                                $sql = "SELECT * FROM tb_test02_mb ";
                                $result = mysqli_query($conn, $sql);


                            ?>
                            <?php while($row = mysqli_fetch_array($result)){  ?>
                            <tr>
                                <td><?php echo $row['mb_firstname'];?></td>
                                <td><?php echo $row['mb_lastname'];?></td>
                                <td><?php echo $row['mb_username'];?></td>
                                <td><?php echo $row['mb_password'];?></td>
                                <td><?php echo $row['mb_email'];?></td>
                                <td><?php echo $row['mb_phone'];?></td>
                                <td><?php echo $row['mb_address'];?></td>
                                <!--ปุ่ม-->
                                <td class="d-flex gap-1">
                                    <a class="btn btn-primary w-50" href="member_edit.php?id=<?php echo $row['mb_id'];?>"><i class="bi bi-pencil-square"></i> แก้ไข</a>
                                    <a onclick="return confirm('คุณต้องการลบผู้ใช้งานใช่หรือไม่ ?');" class="btn btn-danger w-50" href="member_delete.php?id=<?php echo $row['mb_id'];?>"><i class="bi bi-trash"></i> ลบ</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    

</body>
</html>