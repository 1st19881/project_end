<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$c_id = $_REQUEST["c_id"];

//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา

$sql = "DELETE FROM tbl_comment WHERE c_id='$c_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  


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
                              title: "ลบสำเร็จ",
                              text: "ลบความคิดเห็นสำเร็จ",
                              type: "success"
                          }, function() {
                          window.location = "comment.php";
                      });
                      }, 1000);
                  </script>
                  ';
                }else{
                  echo '
                  <script>
                      setTimeout(function() {
                      swal({
                              title: "ลบไม่สำเร็จ  !!",
                              text: "ลบความคิดเห็นไม่สำเร็จ กรุณาลองใหม่อีกครั้ง",
                              type: "warning"
                          }, function() {
                          window.location = "comment.php";
                      });
                      }, 1000);
                  </script>
                  ';

                }

?>