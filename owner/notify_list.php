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
$query = "SELECT c.*,p.p_name,p.member_id,m.m_name,m.level_m,r.c_detail FROM tbl_comment_report as c 
INNER JOIN tbl_comment as r ON c.c_id=r.c_id
INNER JOIN tbl_member as m ON c.member_id=m.member_id
INNER JOIN tbl_dormitory as p ON c.ref_p_id=p.p_id
WHERE $member_id=p.member_id ORDER BY c.c_id DESC" or die("Error:" . mysqli_error());

$result = mysqli_query($con, $query);





$i=1;
?>

<div class="card">
    <div class="card-header">
        <div class="card-title"> <i class="fas fa-bullhorn"></i> แจ้งลบความคิดเห็น</div>
    </div>
    <div class="card-body">
        <table class="table table-hover table-responsive" id="example1" align="center">
            <thead>
                <tr class="info">
                    <th scope="col" class="text-nowrap" width="5%">ลำดับ</th>
                    <th scope="col" class="text-nowrap" width="20%">หอพัก</th>
                    <th scope="col" class="text-nowrap" width="15%">ชื่อคนแจ้ง</th>
                    <th scope="col" class="text-nowrap" width="15%">ความคิดเห็น</th>
                    <th scope="col" class="text-nowrap" width="15%">รายงาน</th>
                    <th scope="col" class="text-nowrap" width="15%">การตรวจสอบ</th>
                    <th scope="col" class="text-nowrap" width="15%">จัดการ</th>
                </tr>
            </thead>
            <?php foreach($result as $row_c) { ?>

            <tr>
                <th scope="row"><?php echo $i++ ?></th>
                <td><a href="detail.php?p_id=<?php echo $row_c['ref_p_id']; ?>"><?php echo $row_c['p_name']; ?></a></td>
                <td><?php echo $row_c['m_name']; ?></td>
                <td><?php echo $row_c['c_detail']; ?></td>
                <td><?php echo $row_c['report']; ?></td>
                <td>
                    <?php 
                $comment = $row_c['c_status']; 
                if($comment=="1"){
                    echo"<a class=' btn btn-sm btn-flat btn-danger' href='#'><i class='fas fa-times'></i> รอตรวจสอบ</a>"; 
                }elseif($comment=="2"){
                    echo"<a class=' btn btn-sm btn-flat btn-success' href='#'><i class='fas fa-check'></i> ตรวจสอบแล้ว</a>"; 
                }
                ?>
                </td>
                <td>
                    <div class="d-flex">
                        <?php 
                 $st= $row_c['c_status'];
                if($st=="1"){ ?>
                        <a class="btn btn-success btn-sm " href="notify_db.php?id=<?php echo $row_c['id']; ?>"
                            onclick="return confirm('ต้องตรวจสอบหรือไม่?')">ตรวจสอบ</a>
                        <?php  }?>
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