<title>จัดการโปรโมชั่น</title>
<?php

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';



error_reporting( error_reporting() & ~E_NOTICE );

//เชื่อมต่อ database:
include('../backend/condb.php');  

// query ข้อมูล
$query = "SELECT pro.*,m.m_name
FROM tbl_pro_dormitory as pro 
INNER JOIN tbl_member  as m ON pro.member_id=m.member_id
WHERE m.member_id=$member_id
ORDER BY pro.pro_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);




$query_pro = "SELECT COUNT(pro_id) as all_pro 
FROM tbl_pro_dormitory 
WHERE member_id=$member_id";
$result2 = mysqli_query($con, $query_pro) or die ("Error in query:  $query_pro " . mysqli_error());
$row_pro = mysqli_fetch_array($result2);
extract($row_pro);



$i=1;

?>



<div class="card">
    <div class="card-header">
        <div class="card-title"> <i class="fas fa-edit"></i> จัดการโปรโมชั่น</div>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-12 mb-4">
                <a href="promotion.php" style="text-decoration:none">
                    <div class="small-box bg-dark" style="border-radius:0;">
                        <div class="inner">
                            <h4>จำนวนโปรโมชั่น :</h4>
                            <h1 class="text-center"><?php echo $row_pro['all_pro'] ?> </h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-calendar-alt text-white"></i>
                        </div>
                    </div>
                </a>
            </div>

        </div>
      <div class="col-md-12">
      <a href="promotion.php?act=add" class="btn btn-primary btn-sm btn-flat col-2"><i class="fas fa-plus-square"></i>
            เพิ่ม+ </a>
        <table class="table table-hover table-responsive" id="example1" align="center">
            <thead>
                <tr class="info">
                    <th scope="col" class="text-nowrap" width="5%">เลขหน้า</th>
                    <th scope="col" class="text-nowrap" width="20%">ชื่อโปรโมชั่น</th>
                    <th scope="col" class="text-nowrap" width="15%">เพิ่มโดย</th>
                    <th scope="col" class="text-nowrap" width="15%">จำนวนเข้าชม</th>
                    <th scope="col" class="text-nowrap" width="15%">ภาพ</th>
                    <th scope="col" class="text-nowrap" width="20%">จัดการ</th>
                </tr>
            </thead>
            <?php foreach($result as $row_po) { ?>
            <tr>
                <th scope="row"><?php echo $i++ ?></th>
                <td><a href="detail_pro.php?pro_id=<?php echo $row_po['pro_id'];  ?>"><?php echo $row_po['pro_name']; ?></a></td>
                <td><?php echo $row_po['m_name']; ?></td>
                <td><?php echo $row_po['pro_view']; ?></td>
                <td class="text-nowrap"><img src="../backend/pro_img/<?php echo $row_po['proimg'];?>" width="90%"
                        alt="..."></td>
                <td class="d-flex justify-content-center">
                    <button class="btn  btn-flat btn-primary" data-toggle="modal"
                        data-target="#modaldetail<?php echo $row_po['pro_id']; ?>"><i class="fas fa-eye"></i> </button>
                    <a href="promotion.php?act=edit&ID=<?php echo $row_po['pro_id']; ?>"
                        class="btn btn-warning btn-primary btn-flat"> <i class="fas fa-edit"></i> </a>
                    <a href="form_promotion_del.php?ID=<?php echo $row_po['pro_id']; ?>"
                        class="btn btn-danger btn-primary btn-flat" onclick="return confirm('ยันยันการลบ')"><i
                            class="fas fa-trash-alt"></i></a>
                </td>
            </tr>

            <?php include('modal_promotion.php');  ?>

            <?php }  ?>

            <br>
            <br>

        </table>
      </div> 


    </div>

</div>




<script>
$(function() {
    $('#example1').DataTable({
        // "paging": true,
        // "lengthChange": true,
        // "searching": true,
        // "ordering": true,
        // "info": true,
        // "autoWidth": true,
        "oLanguage": {
            "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
            "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
            "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
            "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
            "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
            "sSearch": "ค้นหา :",
            "oPaginate": {
                "sFirst": "เิริ่มต้น",
                "sPrevious": "ก่อนหน้า",
                "sNext": "ถัดไป",
                "sLast": "สุดท้าย"
            }

        }

    });
});
</script>

</body>

</html>