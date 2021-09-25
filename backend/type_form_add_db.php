<?php
include('condb.php');

$type_name =  mysqli_real_escape_string($con,$_POST['type_name']);

$sql ="INSERT INTO tbl_type
    
    (type_name) 

    VALUES 

    ('$type_name')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
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
          title: "เพิ่มสำเร็จ",
          text: "เพิ่มข้อมูลประเภทหอพักสำเร็จ",
          type: "success"
        }, function() {
          window.location = "type.php";
        });
      }, 1000);
    </script>
    ';
  }else{
    echo '
    <script>
        setTimeout(function() {
        swal({
                title: "ไม่สำเร็จ!!",
                text: "เพิ่มข้อมูลประเภทหอพักไม่สำเร็จ กรุณาลองใหม่อีกครั้ง",
                type: "warning"
            }, function() {
            window.location = "type.php";
        });
        }, 1000);
    </script>
    ';

  }
?>