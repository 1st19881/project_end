<meta charset="UTF-8">
<?php
include('condb.php');  
$p_id =  mysqli_real_escape_string($con,$_REQUEST["ID"]);

$sql="SELECT*FROM tbl_dormitory WHERE p_id='$p_id' "; //คิวรี่ข้อมูลออกมา
	$resault = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($resault );
	$path="p_imghome/"; //path ที่ไว้เก็บรูปภาพ	

	$newname =$row['p_img']; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล	
    $newname2 =$row['p_img2']; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล
    $newname3 =$row['p_img3']; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล
    $newname4 =$row['p_img4']; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล	
    		 
		$file=$path.$newname;
		if (unlink($file)){  
		echo ("deleted $file");
		}else{
		echo ("error");
		}
    $file2=$path.$newname2;
		if (unlink($file2)){  
		echo ("deleted $file2");
		}else{
		echo ("error");
		}
    $file3=$path.$newname3;
		if (unlink($file3)){  
		echo ("deleted $file3");
		}else{
		echo ("error");
		}
    $file4=$path.$newname4;
		if (unlink($file4)){  
		echo ("deleted $file4");
		}else{
		echo ("error");
		}

$sql_del= "DELETE FROM tbl_dormitory WHERE p_id='$p_id' ";
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
      title: "ลบสำเร็จ",
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
echo "alert('ลบข้อมูลหอพักไม่สำเร็จ');";
echo "window.location = 'dormitory.php' ";
echo "</script>";
}

?>