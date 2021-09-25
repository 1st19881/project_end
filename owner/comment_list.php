<title>ลบความคิดเห็น</title>
<?php

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';



error_reporting( error_reporting() & ~E_NOTICE );

//เชื่อมต่อ database:
include('../backend/condb.php');  


$member_id = $_SESSION['member_id'];
$m_name= $_SESSION['m_name'];


// query ข้อมูล
$query = "SELECT c.*,p.p_name,p.member_id,m.m_name,m.level_m FROM tbl_comment as c 
INNER JOIN tbl_member as m ON c.member_id=m.member_id
INNER JOIN tbl_dormitory as p ON c.ref_p_id=p.p_id
WHERE $member_id=p.member_id ORDER BY c.c_id DESC" or die("Error:" . mysqli_error());

$result = mysqli_query($con, $query);





$i=1;
?>

<div class="card">
    <div class="card-header">
        <div class="card-title"> <i class="fas fa-edit"></i> จัดการความคิดเห็น</div>
    </div>
    <div class="card-body">
        <table class="table table-hover table-responsive" id="example1" align="center">
            <thead>
                <tr class="info">
                    <th scope="col" class="text-nowrap" width="5%">ลำดับ</th>
                    <th scope="col" class="text-nowrap" width="20%">หอพัก</th>
                    <th scope="col" class="text-nowrap" width="15%">ชื่อ</th>
                    <th scope="col" class="text-nowrap" width="15%">ระดับ</th>
                    <th scope="col" class="text-nowrap" width="15%">วันเวลา</th>
                    <th scope="col" class="text-nowrap" width="30%">จัดการ</th>
                </tr>
            </thead>
            <?php foreach($result as $row_c) { ?>

            <tr>
                <th scope="row"><?php echo $i++ ?></th>
                <td><a href="detail.php?p_id=<?php echo $row_c['ref_p_id']; ?>"><?php echo $row_c['p_name']; ?></a></td>
                <td><?php echo $row_c['m_name']; ?></td>
                <td><?php echo $row_c['level_m']; ?></td>
                <td><?php echo $row_c['c_date']; ?></td>
                <td>
                <div class="d-flex">
                <button class="btn  btn-flat btn-primary" data-toggle="modal"
                data-target="#modaldetail<?php echo $row_c['c_id']; ?>"><i class="fas fa-eye"></i> ความคิดเห็น</button>
                <a href="../backend/comment_del_member.php?ID=<?php echo $row_c['c_id']; ?>"
                class='btn btn-danger btn-primary btn-flat ' onclick="return confirm('ยันยันการลบ')"><i class="fas fa-trash-alt"></i> ลบ</a>
                </div>
                </td>
            </tr>

            <?php include('modal_comment.php'); ?>    


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

<script>
var copyTextareaBtn = document.querySelector('.js-textareacopybtn');
copyTextareaBtn.addEventListener('click', function(event) {
var copyTextarea = document.querySelector('.js-copytextarea');
copyTextarea.focus();
copyTextarea.select();
  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
  } catch (err) {
    console.log('Oops, unable to copy');
  }
});
</script>




</body>

</html>