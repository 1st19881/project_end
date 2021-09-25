<?php 
$menu = "index"

?>
<title>หน้าแรก</title>
<!-- query -->
<?php  
include('condb.php');
$query_dormitory = "SELECT COUNT(p_id) as all_dormitory FROM tbl_dormitory ";
$result2 = mysqli_query($con, $query_dormitory) or die ("Error in query: $query_dormitory " . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);

$query_type = "SELECT COUNT(type_id) as all_type FROM tbl_type ";
$result3 = mysqli_query($con, $query_type) or die ("Error in query: $query_type " . mysqli_error());
$row_type = mysqli_fetch_array($result3);
extract($row_type);

$query_member = "SELECT COUNT(member_id) as all_member FROM tbl_member ";
$result = mysqli_query($con, $query_member) or die ("Error in query: $query_member " . mysqli_error());
$row_member = mysqli_fetch_array($result);
extract($row_member);

$query_view = "SELECT SUM(p_view) as all_view FROM tbl_dormitory ";
$result1 = mysqli_query($con, $query_view) or die ("Error in query: $query_view " . mysqli_error());
$row_view = mysqli_fetch_array($result1);
extract($row_view);

$query_comment = "SELECT COUNT(c_id) as all_comment FROM tbl_comment ";
$result4 = mysqli_query($con, $query_comment) or die ("Error in query:  $query_comment " . mysqli_error());
$row_comment = mysqli_fetch_array($result4);
extract($row_comment);


$query_pro = "SELECT COUNT(pro_id) as all_pro FROM tbl_pro_dormitory ";
$result5 = mysqli_query($con, $query_pro) or die ("Error in query:  $query_pro " . mysqli_error());
$row_promotion = mysqli_fetch_array($result5);
extract($row_promotion);







//  echo '$query_dormitory';
//  exit(); 
?>




<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<br><br>
<!-- Main content -->
<section class="content">





    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-database"></i> ข้อมูลทั้งหมด</h3>
        </div>
        <br>
        <div class="card-body p-1">

            <div class="row">
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h1> <?php echo $row['all_dormitory'] ?> </h1>
                            <h4>จำนวนหอพัก :</h4>
                        </div>
                        <div class="icon">
                            <i class="fas fas fa-hotel text-white"></i>
                        </div>
                        <a href="dormitory.php" class="small-box-footer">
                           รายละเอียด <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h1 text-white> <?php echo $row_type['all_type'] ?> </h1>
                            <h4 class="text-white">จำนวนประเภทหอพัก :</h4>
                        </div>
                        <div class="icon">
                            <i class="fas fa-sliders-h text-white "></i>
                        </div>
                        <a href="type.php" class="small-box-footer">
                           รายละเอียด <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h1> <?php echo $row_member['all_member'] ?></h1>
                            <h4>จำนวนสมาชิก :</h4>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users text-white"></i>
                        </div>
                        <a href="member.php" class="small-box-footer">
                           รายละเอียด <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h1> <?php echo $row_comment['all_comment'] ?> </h1>
                            <h4>จำนวนความคิดเห็น :</h4>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comments text-white"></i>
                        </div>
                        <a href="comment.php" class="small-box-footer">
                           รายละเอียด <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h1> <?php echo $row_promotion['all_pro'] ?> </h1>
                            <h4>จำนวนโปรโมชั่น :</h4>
                        </div>
                        <div class="icon">
                        <i class="far fa-clock text-white"></i>
                        </div>
                        <a href="promotion.php" class="small-box-footer">
                           รายละเอียด <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h1 > <?php echo $row_promotion['all_pro'] ?> </h1>
                            <h4>จำนวนผู้ดูแลระบบ :</h4>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-cog text-white"></i>
                        </div>
                        <a href="admin.php" class="small-box-footer">
                           รายละเอียด <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

            </div>




        </div>

    </div>







    </div>
    <!-- /.col -->
    </div>



</section>
<!-- /.content -->

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