<meta charset="UTF-8">
<?php 

include('../backend/condb.php');
  
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
// exit(); 


$c_id = $_POST['c_id'];
$report = $_POST['report'];
$ref_p_id = $_POST['ref_p_id'];
$c_status = $_POST['c_status'];
$member_id = $_POST['member_id'];

	$sql = " INSERT INTO tbl_comment_report (c_id,ref_p_id,report,c_status,member_id)VALUES('$c_id','$ref_p_id','$report','$c_status','$member_id')";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con). "<br>$sql");
	mysqli_close($con);
	

	if($result){
        echo "<script type='text/javascript'>";
        echo "alert('สำเร็จ');";
        echo "window.location = 'detail.php?p_id=$ref_p_id'; ";
        echo "</script>";
        }
        else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "window.location = 'detail.php?p_id=$ref_p_id'; ";
        echo "</script>";
      }
?>