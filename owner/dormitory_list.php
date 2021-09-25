<?php

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';



error_reporting( error_reporting() & ~E_NOTICE );


include('../backend/condb.php');  


$query = "SELECT p.*,m.m_name,t.type_name
FROM tbl_dormitory as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
INNER JOIN tbl_member  as m ON p.member_id=m.member_id
WHERE m.member_id=$member_id
ORDER BY p.p_id DESC" or die("Error:" . mysqli_error());

$result = mysqli_query($con, $query);


$query_dormitory = "SELECT COUNT(p_id) as all_dormitory 
FROM tbl_dormitory 
WHERE member_id=$member_id";
$result1 = mysqli_query($con, $query_dormitory) or die ("Error in query:  $query_dormitory " . mysqli_error());
$row_dormitory = mysqli_fetch_array($result1);
extract($row_dormitory);


$i=1;
?>

<div class="card">
    <div class="card-header">
        <div class="card-title"> <i class="fas fa-edit"></i> จัดการหอพัก</div>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-12 mb-4">
                <a href="dormitory.php" style="text-decoration:none">
                    <div class=" small-box bg-dark"style="border-radius:0;">
                        <div class="inner">
                            <h4>จำนวนหอพัก :</h4>
                            <h1 class="text-center"> <?php echo $row_dormitory['all_dormitory'] ?> </h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-hotel text-white"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <a href="dormitory.php?act=add" class="btn btn-primary btn-sm btn-flat col-2"><i class="fas fa-plus-square"></i>
            เพิ่ม+ </a>
        <table class="table table-hover table-responsive" id="example1" align="center">
            <thead>
                <tr class="info">
                    <th scope="col" class="text-nowrap" width="5%">เลขหน้า</th>
                    <th scope="col" class="text-nowrap" width="20%">ชื่อหอพัก</th>
                    <th scope="col" class="text-nowrap" width="20%">ประเภท</th>
                    <th scope="col" class="text-nowrap" width="20%">เพิ่มโดย</th>
                    <th scope="col" class="text-nowrap" width="5%">จำนวนเข้าดู</th>
                    <th scope="col" class="text-nowrap" width="15%">ภาพ</th>
                    <th scope="col" class="text-nowrap" width="20%">จัดการ</th>
                </tr>
            </thead>
            <?php foreach($result as $row_am) { ?>

            <tr>
                <th scope="row"><?php echo $i++ ?></th>
                <td><a href="detail.php?p_id=<?php echo $row_am['p_id']; ?>"><?php echo $row_am['p_name']; ?></a></td>
                <td><?php echo $row_am['type_name']; ?></td>
                <td><?php echo $row_am['m_name']; ?></td>
                <td><?php echo $row_am['p_view']; ?></td>
                <td class="text-nowrap"><img src="../backend/p_imghome/<?php echo $row_am['p_img'];?>" width="50%"
                        class="card-img-top " alt="..."></td>
                <td class="d-flex justify-content-center">
                    <button class="btn  btn-flat btn-primary" data-toggle="modal"
                        data-target="#modaldetail<?php echo $row_am['p_id']; ?>"><i class="fas fa-eye"></i> </button>
                    <a href="dormitory.php?act=edit&ID=<?php echo $row_am['p_id']; ?>"
                        class="btn btn-warning btn-primary btn-flat "> <i class="fas fa-edit"></i> </a>
                    <a href="form_del_dormitory.php?ID=<?php echo $row_am['p_id']; ?>"
                        class='btn btn-danger btn-primary btn-flat ' onclick="return confirm('ยันยันการลบ')"><i
                            class="fas fa-trash-alt"></i></a>
                </td>
            </tr>

            <?php include('modal_dormitory.php'); ?>

            <?php }  ?>

            <br>
            <br>

        </table>


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