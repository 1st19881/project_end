<meta charset="UTF-8">

<?php

include('../backend/condb.php');
 
$pro_id = mysqli_real_escape_string($con,$_REQUEST["ID"]);

$sql="SELECT*FROM tbl_pro_dormitory WHERE pro_id='$pro_id' "; //คิวรี่ข้อมูลออกมา
	$resault = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($resault );
		$path="../backend/pro_img/"; //path ที่ไว้เก็บรูปภาพ		
		$newname =$row['proimg']; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล			 
		$file=$path.$newname;
		if (unlink($file)){  
		echo ("deleted $file");
		}else{
		echo ("error");
		}
		$sql_del_pro = "DELETE FROM tbl_pro_dormitory WHERE pro_id='$pro_id' ";
        $rs_del = mysqli_query($con, $sql_del_pro) or die ("Error in query: $sql_del_pro" . mysqli_error());
        mysqli_close($con);
	
	
        echo '
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        ';		
        if($rs_del){
            echo '
            <script>
               setTimeout(function() {
                swal({
                    title: "สำเร็จ !!",
                    text: "ลบโปรโมชั่นสำเร็จ",
                    type: "success"
                }, function() {
                    window.location = "promotion.php";
                });
            }, 100);
        </script>
        ';
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('ไม่สำเร็จ');";
    echo "window.location = 'promotion.php'; ";
    echo "</script>";
    }
?>