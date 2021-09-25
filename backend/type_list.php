<?php

include('condb.php');  
$query = "SELECT * FROM tbl_type ORDER BY type_id ASC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);

mysqli_close($con);
$i=1;

?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title text-bold"><i class="fas fa-edit"></i> จัดการประเภทหอพัก</h3>
        <div class="d-flex justify-content-end">
            <button class="btn btn-sm  btn-light btn-flat">
                <a href="type.php?act=add" class="text-dark text-bold"><i class="fas fa-plus-square"></i>
                    เพิ่มข้อมูล</a>
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
                            <th scope="col" class="text-nowrap" width="10%">เลขหน้า</th>
                            <th scope="col" class="text-nowrap" width="10%">รหัสประเภท</th>
                            <th scope="col" class="text-nowrap" width="30%">ชื่อประเภทหอพัก</th>
                            <th scope="col" class="text-nowrap" width="10%">จัดการ</th>
                        </tr>
                    </thead>
                    <?php foreach($result as $row_type) { ?>

                    <tr>
                        <th scope="row"><?php echo $i++ ?></th>
                        <td class="text-nowrap"><?php echo $row_type['type_id']; ?></td>
                        <td class="text-nowrap"><?php echo $row_type['type_name']; ?></td>
                        <td class="d-flex justify-content-center" class="text-nowrap"><a
                                href="type.php?act=edit&ID=<?php echo $row_type['type_id']; ?>"
                                class='btn btn-warning btn-flat'><i class="fas fa-edit"></i></a>
                            <a href="type_form_delete_db.php?ID=<?php echo $row_type['type_id']; ?>"
                                class='btn btn-danger btn-primary btn-flat' onclick="return confirm('ยันยันการลบ')"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>

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