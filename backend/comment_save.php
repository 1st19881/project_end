<meta charset="utf8">
<?php
include('condb.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit();

$c_detail =  mysqli_real_escape_string($con,$_POST["c_detail"]);
$ref_p_id =  mysqli_real_escape_string($con,$_POST["ref_p_id"]);
$member_id   =  mysqli_real_escape_string($con,$_POST["member_id"]);

$sql ="INSERT INTO tbl_comment
    
    (c_detail,ref_p_id,member_id) 
    VALUES 
    ('$c_detail',$ref_p_id,'$member_id')";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

    mysqli_close($con);

    
		
    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มสำเร็จ');";
        echo "window.location = '../member/detail.php?p_id=$ref_p_id'; ";
        echo "</script>";
        }
        else{
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มไม่สำเร็จ');";
        echo "window.location = '../member/detail.php?p_id=$ref_p_id'; ";
        echo "</script>";
      }

?>