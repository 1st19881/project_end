<meta charset="UTF-8">
<?php
include('../backend/condb.php'); 
date_default_timezone_set('Asia/Bangkok');
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());

	//รับค่าไฟล์จากฟอร์ม
	$p_name = mysqli_real_escape_string($con,$_POST['p_name']);
	$type_id = mysqli_real_escape_string($con,$_POST['type_id']);
	$detail = mysqli_real_escape_string($con,$_POST['detail']);
	$detail_Facilities	 = mysqli_real_escape_string($con,$_POST['detail_Facilities	']);
	$detail_service = mysqli_real_escape_string($con,$_POST['detail_service']);
	$detail_contac = mysqli_real_escape_string($con,$_POST['detail_contac']);
	$price = mysqli_real_escape_string($con,$_POST['price']);
	$unit = mysqli_real_escape_string($con,$_POST['unit']);
	$p_link = mysqli_real_escape_string($con,$_POST['p_link']);
	$tag_name = mysqli_real_escape_string($con,$_POST['tag_name']);
    $member_id = mysqli_real_escape_string($con,$_POST['member_id']);

	
//img
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$p_img =(isset($_POST['p_img']) ? $_POST['p_img'] :'');
	$upload=$_FILES['p_img']['name'];
	if($upload !='') { 

		$path="../backend/p_imghome/";
		$type = strrchr($_FILES['p_img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../backend/p_imghome/".$newname;
		move_uploaded_file($_FILES['p_img']['tmp_name'],$path_copy);  
	}else{
		$newname='';
	}

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$p_img2 = (isset($_POST['p_img2']) ? $_POST['p_img2'] : '');
	$upload=$_FILES['p_img2']['name'];
	if($upload !='') { 

		$path="../backend/p_imghome/";
		$type = strrchr($_FILES['p_img2']['name'],".");
		$newname2 =$numrand.$date1.$type;
		$path_copy=$path.$newname2;
		$path_link="p_imghome/".$newname2;
		move_uploaded_file($_FILES['p_img2']['tmp_name'],$path_copy);  
	}else{
		$newname2='';
	}

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$p_img3 = (isset($_POST['p_img3']) ? $_POST['p_img3'] : '');
	$upload=$_FILES['p_img3']['name'];
	if($upload !='') { 

		$path="../backend/p_imghome/";
		$type = strrchr($_FILES['p_img3']['name'],".");
		$newname3 =$numrand.$date1.$type;
		$path_copy=$path.$newname3;
		$path_link="p_imghome/".$newname3;
		move_uploaded_file($_FILES['p_img3']['tmp_name'],$path_copy);  
	}else{
		$newname3='';
	}
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$p_img4 = (isset($_POST['p_img4']) ? $_POST['p_img4'] : '');
	$upload=$_FILES['p_img4']['name'];
	if($upload !='') { 

		$path="../backend/p_imghome/";
		$type = strrchr($_FILES['p_img4']['name'],".");
		$newname4 =$numrand.$date1.$type;
		$path_copy=$path.$newname4;
		$path_link="p_imghome/".$newname4;
		move_uploaded_file($_FILES['p_img4']['tmp_name'],$path_copy);  
	}else{
		$newname4='';
	}


	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	// exit;

	
		$sql = "INSERT INTO tbl_dormitory
		(
		p_name,type_id,detail,detail_Facilities,detail_service,detail_contac,price,unit,p_img,p_link,p_img2,p_img3,p_img4,tag_name,member_id)VALUES('$p_name','$type_id','$detail','$detail_Facilities','$detail_service','$detail_contac','$price','$unit','$newname','$p_link','$newname2','$newname3','$newname4','$tag_name','$member_id')";
		
		$result = mysqli_query($con, $sql);// or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	
	echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	';		
	if($result){
		echo '
		<script>
		   setTimeout(function() {
			swal({
				title: "สำเร็จ",
				text: "เพิ่มข้อมูลหอพักสำเร็จ",
				type: "success"
			}, function() {
				window.location = "../owner/dormitory.php";
			});
		}, 100);
	</script>
	';
}
else{
echo "<script type='text/javascript'>";
echo "alert('เพิ่มข้อมูลหอพักไม่สำเร็จ');";
echo "window.location = '../owner/dormitory.php'; ";
echo "</script>";
}
?>