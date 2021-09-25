<?php error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;


$a_user =  mysqli_real_escape_string($con,$_POST['a_user']);
$a_pass =  mysqli_real_escape_string($con,$_POST['a_pass']);
$a_name =  mysqli_real_escape_string($con,$_POST['a_name']);
$a_level =  mysqli_real_escape_string($con,$_POST['a_level']);


$check = " SELECT  a_user 
	FROM tbl_admin  
	WHERE a_user = '$a_user' 
	";
    $result_n = mysqli_query($con, $check);
    $num=mysqli_num_rows($result_n);
 
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลผู้ดูแลระบบซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{

  $sql ="INSERT INTO tbl_admin
    
    (a_user,a_pass,a_name,a_level)VALUES('$a_user', '$a_pass', '$a_name','$a_level')";
    
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    }
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
          text: "เพิ่มข้อมูลผู้ดูแลระบบสำเร็จ",
          type: "success"
        }, function() {
          window.location = "admin.php";
        });
      }, 100);
    </script>
    ';
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ไม่สำเร็จ');";
  echo "window.location = 'admin.php?act=add'; ";
  echo "</script>";
  }
?>