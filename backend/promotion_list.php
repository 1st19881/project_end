<?php
error_reporting( error_reporting() & ~E_NOTICE );

include('condb.php');  

$query = "SELECT pro.*,m.m_name FROM tbl_pro_dormitory as pro 
INNER JOIN tbl_member as m ON pro.member_id=m.member_id
ORDER BY pro_id DESC" or die("Error:" . mysqli_error());

$result = mysqli_query($con, $query);

$i=1;

?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title text-bold"><i class="fas fa-edit"></i> จัดการโปรโมชั่น</h3>
        <div class="d-flex justify-content-end">
            <button class="btn btn-sm  btn-light btn-flat">
                <a href="promotion.php?act=add" class="text-dark text-bold"><i class="fas fa-plus-square"></i> เพิ่มข้อมูล</a>
            </button>
            <button class="btn btn-sm  btn-light btn-flat">
                <a href="promotion_del_all.php" class="text-dark text-bold" onclick="return confirm('ยันยันการลบ')"><i
                        class="fas fa-trash-alt"></i> ลบข้อมูลทั้งหมด</a>
            </button>
        </div>
    </div>
    <br>
    <div class="card-body p-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-responsive border" id="example1" align="center">
                    <thead>
                        <tr class="info">
                            <th scope="col" class="text-nowrap" width="5%">เลขหน้า</th>
                            <th scope="col" class="text-nowrap" width="10%">รหัสโปรโมชั่น</th>
                            <th scope="col" class="text-nowrap" width="15%">เพิ่มโดย</th>
                            <th scope="col" class="text-nowrap" width="30%">ชื่อโปรโมชั่น</th>
                            <th scope="col" class="text-nowrap" width="10%">ภาพ</th>
                            <th scope="col" class="text-nowrap" width="20%">จัดการ</th>
                        </tr>
                    </thead>
                    <?php foreach($result as $row_pro) { ?>

                    <tr>
                        <th scope="row"><?php echo $i++ ?></th>
                        <td><?php echo $row_pro['pro_id']; ?></td>
                        <td><?php echo $row_pro['m_name']; ?></td>
                        <td class="text-nowrap"><?php echo $row_pro['pro_name']; ?></td>
                        <td class="text-nowrap"><img src="pro_img/<?php echo $row_pro['proimg'];?>" width="100%"
                        class="card-img-top " alt="..."></td>
                        <td class="d-flex justify-content-center">
                        <button class="btn  btn-flat btn-primary" data-toggle="modal"
                        data-target="#modaldetail<?php echo $row_pro['pro_id']; ?>"><i class="fas fa-eye"></i></button>
                            <a href="promotion_form_edit.php?act=edit&ID=<?php echo $row_pro['pro_id']; ?>"
                                class="btn btn-warning  btn-flat "> <i class="fas fa-edit"></i> </a>
                            <a href="dormitory_del_db.php?ID=<?php echo $row_pro['pro_id']; ?>"
                                class='btn btn-danger  btn-flat ' onclick="return confirm('ยันยันการลบ')"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                            <?php include('modal_promotion.php'); ?>
                    <?php }  ?>


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