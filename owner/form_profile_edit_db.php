<?php 
include('../backend/condb.php');


// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
// exit(); 


$member_id = mysqli_real_escape_string($con,$_POST["member_id"]);
$m_user = mysqli_real_escape_string($con,$_POST["m_user"]);
$m_pass = mysqli_real_escape_string($con,$_POST["m_pass"]);
$m_name = mysqli_real_escape_string($con,$_POST["m_name"]);
$m_last = mysqli_real_escape_string($con,$_POST["m_last"]);
$m_sex = mysqli_real_escape_string($con,$_POST["m_sex"]);
$m_date = mysqli_real_escape_string($con,$_POST["m_date"]);
$m_tel = mysqli_real_escape_string($con,$_POST["m_tel"]);
$m_email = mysqli_real_escape_string($con,$_POST["m_email"]);
$m_address = mysqli_real_escape_string($con,$_POST["m_address"]);
$m_img2 = mysqli_real_escape_string($con,$_POST['m_img2']);

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$m_img = (isset($_REQUEST['m_img']) ? $_REQUEST['m_img'] : '');
	$upload=$_FILES['m_img']['name'];
	if($upload !='') { 

		$path="../m_img/";
		$type = strrchr($_FILES['m_img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../m_img/".$newname;
		move_uploaded_file($_FILES['m_img']['tmp_name'],$path_copy);  
	}else{
		$newname=$m_img2;
	}



	$sql = "UPDATE tbl_member SET 
	m_user='$m_user',
	m_pass='$m_pass',
	m_name='$m_name',
	m_last='$m_last',
	m_sex='$m_sex',
	m_date='$m_date',
	m_tel='$m_tel',
	m_email='$m_email',
    m_address='$m_address',
    m_img='$newname'
	WHERE member_id=$member_id" ;

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con). "<br>$sql");
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
				text: "แก้ไขข้อมูลส่วนตัวสำเร็จ",
				type: "success"
			}, function() {
				window.location = "profile.php";
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
            text: "แก้ไขข้อมูลไม่สำเร็จ!!!!!!",
            type: "warning"
        }, function() {
            window.location = "form_profile.php";
        });
    }, 100);
</script>
';
}
?>
