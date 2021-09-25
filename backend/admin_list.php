<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');
$query = "SELECT * FROM tbl_admin ORDER BY a_id ASC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
$row_am = mysqli_fetch_assoc($result);
$i=1;
?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title text-bold"><i class="fas fa-edit"></i> จัดการผู้ดูแลระบบ</h3>
        <div class="d-flex justify-content-end">
            <button class="btn btn-light btn-flat text-bold">
                <a href="admin.php?act=add" class="text-dark"><i class="fas fa-plus-square"></i> เพิ่มข้อมูล</a>
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
                            <th scope="col" class="text-nowrap" width="5%">ลำดับ</th>
                            <th scope="col" class="text-nowrap" width="5%">รหัสผู้ดูแลระบบ</th>
                            <th scope="col" class="text-nowrap" width="25%">ชื่อ</th>
                            <th scope="col" class="text-nowrap" width="25%">ชื่อผู้ใช้</th>
                            <th scope="col" class="text-nowrap" width="25%">รหัสผ่าน</th>
                            <th scope="col" class="text-nowrap" width="25%">ระดับผู้ใช้งาน</th>
                            <th width=""> จัดการ</th>
                        </tr>
                    </thead>
                    <?php do { ?>
                    <tr>
                        <td scope="row"><?php echo $i++ ?></td>
                        <td class="text-nowrap"><?php echo $row_am['a_id']; ?></td>
                        <td class="text-nowrap"><?php echo $row_am['a_name']; ?></td>
                        <td class="text-nowrap"><span ><?php echo $row_am['a_user']; ?></span></td>
                        <td class="text-nowrap"><?php echo $row_am['a_pass']; ?></td>
                        <td class="text-nowrap">
                        <?php $lm = $row_am['a_level'];
                        if($lm == "admin"){
                            echo "<span class='badge-warning p-1'>ผู้ดูแลระบบ</span>";  
                        }
                        ?>
                        </td>
                        <td class="d-flex " class="text-nowrap">
                            <button class="btn  btn-flat btn-primary" data-toggle="modal"
                                data-target="#modaldetail<?php echo $row_am['a_id']; ?>"><i
                                    class="fas fa-eye"></i></button>
                            <a href="admin.php?act=edit&ID=<?php echo $row_am['a_id']; ?>"
                                class="btn btn-warning btn-flat "> <i class="fas fa-edit"></i> </a>
                            <a href="admin_del_db.php?ID=<?php echo $row_am['a_id']; ?>"
                                class='btn btn-danger btn-flat ' onclick="return confirm('ยันยันการลบ')"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>

                    <?php include('modal_admin.php'); ?>

                    <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>

                </table>



            </div>

        </div>

    </div>

</div>


<?php include('footer.php'); ?>

<script>
$(function() {
    $(".datatable").DataTable();

    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // http://fordev22.com/
    // });
});
</script>

</body>

</html>