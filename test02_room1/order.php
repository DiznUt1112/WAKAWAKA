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
<div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mt-5">ตารางการสั่งซื้อ</h1>
                    <div class="talbe-responsive">
                        <table class="table table-hover table-bordered text-center">
                            <tr>
                                <th>ชื่อผู้ใช้</th>
                                <th>ชื่อจริง</th>
                                <th>รหัสสินค้า</th>
                                <th>ราคาสินค้า</th>
                                <th>จำนวนสินค้า</th>
                            </tr>
                            <?php
                                include_once '../db.php';
                                $sql = "SELECT m.mb_username, m.mb_firstname, p.pro_name, p.pro_price, o.order_count
                                FROM tb_test02_mb AS m
                                INNER JOIN tb_test02_od AS o
                                ON m.mb_username = o.mem_username
                                INNER JOIN tb_test02_pd AS p
                                ON o.pro_id = p.pro_id " ;
                                $result = mysqli_query($conn, $sql);


                            ?>
                           <?php while($row = mysqli_fetch_array($result)){  ?>
                            <tr>
                                <td><?php echo $row['mb_username'];?></td>
                                <td><?php echo $row['mb_firstname'];?></td>
                                <td><?php echo $row['pro_name'];?></td>
                                <td><?php echo $row['pro_price'];?></td>
                                <td><?php echo $row['order_count'];?></td>
                                <!--ปุ่ม-->
                                
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>