<?php  

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
include('../backend/condb.php');

$sql="SELECT * FROM tbl_member WHERE member_id=$member_id"or die("Error:" . mysqli_error());
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// $member_id = $_SESSION['member_id'];
// $sql2="SELECT * FROM tbl_member WHERE member_id=$member_id ";
// $resault2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
// $row_m = mysqli_fetch_array($resault2)

$query_dormitory = "SELECT COUNT(p_id) as all_dormitory 
FROM tbl_dormitory 
WHERE member_id=$member_id";
$result1 = mysqli_query($con, $query_dormitory) or die ("Error in query:  $query_dormitory " . mysqli_error());
$row_dormitory = mysqli_fetch_array($result1);
extract($row_dormitory);


$query_pro = "SELECT COUNT(pro_id) as all_pro 
FROM tbl_pro_dormitory 
WHERE member_id=$member_id";
$result2 = mysqli_query($con, $query_pro) or die ("Error in query:  $query_pro " . mysqli_error());
$row_pro = mysqli_fetch_array($result2);
extract($row_pro);



?>


<div class="list-group">
	<img src="../m_img/<?php echo $row['m_img'] ; ?>" alt="" class="img-thumbnail"></a>
	<a class="list-group-item list-group-item-action disabled bg-dark"><i class="fas fa-bars"></i>   ข้อมูลส่วนตัว</a>
	<a href="" class="list-group-item list-group-item-action  disabled  "><i class="fas fa-user-circle"></i> ชื่อผู้ใช้ : <?php echo $_SESSION['m_name']; ?></a>
	<a href="" class="list-group-item list-group-item-action  disabled "><i class="fas fa-user-cog"></i> ระดับ :<?php echo $_SESSION['user_level']; ?> </a>
	<a href="../logout1.php" class="list-group-item list-group-item-action  "><i class="fas fa-power-off text-danger"></i> ออกจากระบบ</a>
	<br>
	<a class="list-group-item list-group-item-action disabled bg-dark" ><i class="fas fa-bars"></i>  เมนู จัดการข้อมูล</a>
	<a href="dormitory.php" class="list-group-item list-group-item-action <?php if($menu=="dormitory"){echo"bg-Info";} ?>"><i class="fas fa-edit"></i>  จัดการหอพัก <span class="badge  bg-warning"> <?php echo $row_dormitory['all_dormitory'] ?></span></a>
	<a href="promotion.php" class="list-group-item list-group-item-action <?php if($menu=="promotion"){echo"bg-Info";} ?>"><i class="fas fa-edit"></i>  จัดการโปรโมชั่น <span class="badge  bg-warning"> <?php echo $row_pro['all_pro'] ?></span></a>
	<a href="comment.php" class="list-group-item list-group-item-action <?php if($menu=="comment"){echo"bg-Info";} ?>"><i class="fas fa-trash-alt"></i>  ลบความคิดเห็น </a>
	<a href="notify.php" class="list-group-item list-group-item-action <?php if($menu=="notify"){echo"bg-Info";} ?>"><i class="fas fa-bullhorn"></i>  แจ้งลบความคิดเห็น </a>
</div>
<br>
<br>

