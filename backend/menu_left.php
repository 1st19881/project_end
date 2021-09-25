<div class="list-group">
	<a href="" class="list-group-item list-group-item-action disabled">  ยินดีต้อนรับ แอดมิน : <?php echo $a_name; ?> </a>
	<a href="admin.php" class="list-group-item list-group-item-action">จัดการผู้ดูแลระบบ</a>
	<a href="member.php" class="list-group-item list-group-item-action">จัดการสมาชิก</a>
	<a href="type.php" class="list-group-item list-group-item-action">จัดการประเภทหอพัก</a>
	<a href="price.php" class="list-group-item list-group-item-action">จัดการราคา</a>
	<a href="product.php" class="list-group-item list-group-item-action ">จัดการหอพัก</a>
	<a href="../logout.php"  class="list-group-item list-group-item-action" name="archive" onclick="archiveFunction()" >ออกจากระบบ</a>
		<?php
	 echo'<script>
	 function archiveFunction() {
	 event.preventDefault(); // prevent form submit
	 var form = event.target.form; // storing the form
			 swal({
	   title: "ต้องการออกจากระบบ?",
	   text: "But you will still be able to retrieve this file.",
	   type: "info",
	   showCancelButton: true,
	   confirmButtonColor: "#DD6B55",
	   confirmButtonText: "ใช่",
	   cancelButtonText: "ยกเลิก",
	   closeOnConfirm: false,
	   closeOnCancel: false
	 },
	 function(isConfirm){
	   if (isConfirm) {
		window.location.href = "../logout.php";        
	   } else {
			window.location.href = "index.php";   
	   }
	 });
	 }
	 </script>' ;
	 ?>
</div>
