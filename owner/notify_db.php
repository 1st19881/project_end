<meta charset="UTF-8">
<?php 

include('../backend/condb.php');
  
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
// exit(); 


$id = $_GET['id'];

$sql = "UPDATE tbl_comment_report SET 
	c_status=2
	WHERE id=$id" ;

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con). "<br>$sql");
	mysqli_close($con);
	

	if($result){
        echo "<script type='text/javascript'>";
        echo "alert('สำเร็จ');";
        echo "window.location = 'notify.php'; ";
        echo "</script>";
        }
        else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "window.location = 'notify.php'; ";
        echo "</script>";
      }
?>