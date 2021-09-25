<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  
$query = "SELECT * FROM tbl_member ORDER BY member_id ASC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
$row_us = mysqli_fetch_assoc($result);

$i=1;
?>



<div class="card">
    <div class="card-header">
        <h3 class="card-title text-bold"><i class="fas fa-edit"></i> จัดการสมาชิก</h3>
        <div class="d-flex justify-content-end">
            <button class="btn btn-sm  btn-light btn-flat text-bold">
                <a href="member.php?act=add" class="text-dark"><i class="fas fa-plus-square"></i> เพิ่มข้อมูล</a>
            </button>
        </div>
    </div>
    <br>
    <div class="card-body p-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-responsive" id="example1" align="center">
                    <thead>
                        <tr class="info">
                            <th  width="5%" class="text-nowrap" width="7%">ลำดับ</th>
                            <th scope="col" class="text-nowrap" width="7%">รหัสสมาชิก</th>
                            <th  width="5%" >ภาพ</th>
                            <th  width="15%">ชื่อ</th>
                            <th  width="15%">นามสกุล</th>
                            <th  width="10%">ระดับผู้ใช้งาน</th>
                            <th  width="15%">จัดการ</th>
                        </tr>
                    </thead>
                    <?php do { ?>
                       <?php $st = $row_us['level_m']; ?>   
                    <tr>
                        <td scope="row"><?php echo $i++ ?></td>
                        <td><?php echo $row_us['member_id']; ?></td>
                        <td><img src="../m_img/<?php echo $row_us['m_img'];?>" width="100%" alt="..."></td>
                        <td><?php echo $row_us['m_name']; ?></td>
                        <td><?php echo $row_us['m_last']; ?></td>
                        <td class="text-center">
                            <?php if ($st == 'เจ้าของหอพัก') {
                            echo ""."<br> <span class='btn btn-flat btn-info'style='border-radius:25px;'>เจ้าของหอพัก</span>";
                        }elseif($st == 'สมาชิก') {
                            echo ""."<br> <span class='btn btn-flat btn-primary'style='border-radius:25px;'>สมาชิก</span>";
                        }
                        ?>
                        </td>
                        <td class="d-flex justify-content-center">
                        <button class="btn  btn-flat btn-primary" data-toggle="modal"
                        data-target="#modaldetail<?php echo $row_us['member_id']; ?>"><i class="fas fa-eye"></i></button>
                        <a href="member.php?act=edit&ID=<?php echo $row_us['member_id']; ?>"
                        class="btn btn-warning  btn-flat"> <i class="fas fa-edit"></i> </a>
                        <a href="member_del_db.php?ID=<?php echo $row_us['member_id']; ?>"
                        class='btn btn-danger  btn-flat' onclick="return confirm('ยันยันการลบ')"><i
                        class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>

                    <?php include('modal_member.php'); ?>    


                    <?php } while ($row_us =  mysqli_fetch_assoc($result)); ?>


                </table>

            </div>

        </div>

    </div>

</div>
<?php include('footer.php'); 
?>


</body>

</html>