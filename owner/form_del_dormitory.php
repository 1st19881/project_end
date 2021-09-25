<meta charset="UTF-8">
<?php
include('../backend/condb.php'); 

$p_id = mysqli_real_escape_string($con,$_REQUEST["ID"]);

$sql="SELECT*FROM tbl_dormitory WHERE p_id='$p_id' "; //คิวรี่ข้อมูลออกมา
	$resault = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($resault );
	$path="../backend/p_imghome/"; //path ที่ไว้เก็บรูปภาพ	

//ลบภาพในโฟลเดอร์

	$newname =$row['p_img']; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล	
    $newname2 =$row['p_img2']; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล
    $newname3 =$row['p_img3']; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล
    $newname4 =$row['p_img4']; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล	
    		 
	$file=$path.$newname;
		(unlink($file)) ;
    $file2=$path.$newname2;
		(unlink($file2));
    $file3=$path.$newname3;
		(unlink($file3));
    $file4=$path.$newname4;
		(unlink($file4));

$sql_del = "DELETE FROM tbl_dormitory WHERE p_id='$p_id' ";
$result_del = mysqli_query($con, $sql_del) or die ("Error in query: $sql_del " . mysqli_error());


  
echo '
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
';		
if($result_del){
	echo '
	<script>
	   setTimeout(function() {
		swal({
			title: "สำเร็จ",
			text: "ลบข้อมูลหอพักสำเร็จ",
			type: "success"
		}, function() {
			window.location = "dormitory.php";
		});
	}, 100);
</script>
';
}
else{
echo "<script type='text/javascript'>";
echo "alert('เพิ่มข้อมูลหอพักไม่สำเร็จ');";
echo "window.location = 'dormitory.php'; ";
echo "</script>";
}
?>