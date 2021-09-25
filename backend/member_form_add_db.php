<?php error_reporting( error_reporting() & ~E_NOTICE );

include('condb.php');


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;


  $m_user = mysqli_real_escape_string($con,$_POST["m_user"]);
  $m_pass = mysqli_real_escape_string($con,$_POST["m_pass"]);
  $m_name = mysqli_real_escape_string($con,$_POST["m_name"]);
  $m_last = mysqli_real_escape_string($con,$_POST["m_last"]);
  $m_sex  = mysqli_real_escape_string($con,$_POST["m_sex"]);
  $m_date = mysqli_real_escape_string($con,$_POST["m_date"]);
  $m_email= mysqli_real_escape_string($con, $_POST["m_email"]);
  $m_tel =  mysqli_real_escape_string($con,$_POST["m_tel"]);
  $m_address = mysqli_real_escape_string($con,$_POST["m_address"]);
  $level_m = mysqli_real_escape_string($con,$_POST["level_m"]);
	

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$m_img = (isset($_POST['m_img']) ? $_POST['m_img'] : '');
	$upload=$_FILES['m_img']['name'];
	if($upload !='') { 

		$path="../m_img/";
		$type = strrchr($_FILES['m_img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../m_img/".$newname;
		move_uploaded_file($_FILES['m_img']['tmp_name'],$path_copy);  
	}else{
		$newname='';
	}

	// เช็คผู้ใช้ซ้ำ
	$check = "
	SELECT m_user
	FROM tbl_member
	WHERE m_user = '$m_user'";
    $result1 = mysqli_query($con, $check);
    $num=mysqli_num_rows($result1);

    if($num > 0)
    {
		echo '
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
		';		
		echo '
		<script>
		   setTimeout(function() {
		  swal({
			title: "เกิดข้อผิดพลาดชื่อผู้ใช้ซ้ำลองใหม่อีกครั้ง",
			type: "warning"
		  }, function() {
			window.history.back();
		  });
		}, 100);
	  </script>
	  ';
		exit;
    }else{

    
	$sql = "INSERT INTO tbl_member (m_user,m_pass,m_name,m_last,m_sex,m_date,m_email,m_tel,m_address,m_img,level_m)VALUES('$m_user','$m_pass','$m_name','$m_last','$m_sex','$m_date','$m_email','$m_tel','$m_address','$newname','$level_m')";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con). "<br>$sql");

	}
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
				text: "เพิ่มข้อมูลสมาชิกสำเร็จ",
				type: "success"
			}, function() {
				window.location = "member.php";
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
            title: "ไม่สำเร็จ",
            text: "เพิ่มข้อมูลสมาชิกไม่สำเร็จ!!",
            type: "warning"
        }, function() {
            window.location = "member.php?act=add";
        });
    }, 100);
</script>
';
}
 ?>