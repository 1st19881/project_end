<meta charset="UTF-8">
<?php
include('condb.php'); 
date_default_timezone_set('Asia/Bangkok');
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());

	//รับค่าไฟล์จากฟอร์ม
	$member_id =  mysqli_real_escape_string($con,$_POST['member_id']);
	$pro_name =  mysqli_real_escape_string($con,$_POST['pro_name']);
	$pro_detail =  mysqli_real_escape_string($con,$_POST['pro_detail']);
	$price =  mysqli_real_escape_string($con,$_POST['price']);
	$pro_price =  mysqli_real_escape_string($con,$_POST['pro_price']);
	$startdate =  mysqli_real_escape_string($con,$_POST['startdate']);
	$enddate =  mysqli_real_escape_string($con,$_POST['enddate']);
	$Detail_contac =  mysqli_real_escape_string($con,$_POST['Detail_contac']);
    $detail_Facilities =  mysqli_real_escape_string($con,$_POST['detail_Facilities']);
  //img
  $date1 = date("Ymd_His");
  $numrand = (mt_rand());
  $proimg = (isset($_POST['proimg']) ? $_POST['proimg'] : '');
  $upload=$_FILES['proimg']['name'];
  if($upload !='') { 

      $path="pro_img/";
      $type = strrchr($_FILES['proimg']['name'],".");
      $newname =$numrand.$date1.$type;
      $path_copy=$path.$newname;
      $path_link="pro_img/".$newname;
      move_uploaded_file($_FILES['proimg']['tmp_name'],$path_copy);  
  }else{
      $newname='';
  }
	
	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	// exit;
    

	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
		$sql = "INSERT INTO tbl_pro_dormitory
		(member_id,pro_name,proimg,pro_detail,detail_Facilities,Detail_contac,price,pro_price,startdate,enddate) VALUES ('$member_id','$pro_name','$newname','$pro_detail','$detail_Facilities','$Detail_contac','$price','$pro_price','$startdate','$enddate')";
		
		$result = mysqli_query($con, $sql);// or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	// javascript แสดงการ upload file
	
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
				title: "เพิ่มสำเร็จ !!",
				text: "เพิ่มข้อมูลโปรโมชั่นสำเร็จ",
				type: "success"
			}, function() {
				window.location = "promotion.php";
			});
		}, 100);
	</script>
	';
}
else{
    echo '
    <script>
       setTimeout(function() {
        swal({
            title: "เพิ่มไม่สำเร็จ",
            text: "เพิ่มข้อมูลโปรโมชั่นไม่สำเร็จ!!!!!!",
            type: "warning"
        }, function() {
            window.location = "promotion.php?act=edit";
        });
    }, 100);
</script>
';
}
?>