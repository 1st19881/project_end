<meta charset="utf8">
<?php
include('../backend/condb.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit();

$c_detail = $_POST["c_detail"];
$ref_p_id = $_POST["ref_p_id"];
$member_id   = $_POST["member_id"];

$sql ="INSERT INTO tbl_comment
    
    (c_detail,ref_p_id,member_id) 
    VALUES 
    ('$c_detail',$ref_p_id,'$member_id')";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

    $sql3 = "SELECT MAX(c_id) as c_id FROM tbl_comment
    WHERE ref_p_id='$ref_p_id'  ";
	$query2	= mysqli_query($con, $sql3)or die ("Error in query: $sql3 " . mysqli_error($con));
	$row = mysqli_fetch_array($query2);
    
	$c_id = $row["c_id"];


//     print_r($c_id);
// exit();


$sql2 ="INSERT INTO tbl_have
    
    (c_id,ref_p_id) 
    VALUES 
    ('$c_id','$ref_p_id')";
    $result_c = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error($con)); 

    mysqli_close($con);

    
    echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	';		
    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('สำเร็จ');";
        echo "window.location = '../member/detail.php?p_id=$ref_p_id'; ";
        echo "</script>";
        }
        else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "window.location = '../member/detail.php?p_id=$ref_p_id'; ";
        echo "</script>";
      }

?>