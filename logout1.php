<?php 
session_start();
session_destroy();

//เรียกใช้งาน sweet alert 
echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  	';


  	echo '
					<script>
				       setTimeout(function() {
				        swal({
				            title: "เรียบร้อย",
				            text: "ออกจากระบบ",
				            type: "success"
				        }, function() {
				            window.location = "index.php";
				        });
				    }, 100);
				</script>
				';



?>