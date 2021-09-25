<link rel="stylesheet" href="css/navbar.css">

 <?php  require_once('backend/condb.php');
	$querytotal = "SELECT t.type_id, t.type_name, COUNT(p.type_id) as ttotal
  FROM tbl_type as  t 
  LEFT JOIN tbl_dormitory as  p ON t.type_id=p.type_id 
  GROUP BY t.type_id
  ORDER BY t.type_name ASC";
	$result_total =mysqli_query($con, $querytotal) 
  or die ("Error in query: $querytotal " . mysqli_error());
 ?> 



 <nav id="navbar" class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top "style=" transition: top 0.4s;" data-spy="affix" data-offset-top="197">  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php"><i class="far fa-building fa-2x text-warning d-none d-md-block"></i></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
    
  <li class="nav-item ">
        <a class="nav-link text-warning  " href="index.php"><i class="fas fa-home"></i>  หน้าแรก <span class="sr-only"></span></a>
      </li>

      <li class="nav-item ">
        <a class="nav-link text-warning " href="show_pro.php"><i class="far fa-clock"></i>  โปรโมชั่นหอพัก<span class="sr-only"></span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link text-warning  dropdown-toggle  " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
        <i class="fas fa-th-large"></i>  ประเภท
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="index.php">ทั้งหมด</a>
        <?php foreach ($result_total as $row1 )  { ?>
        <a class="dropdown-item" href="index.php?act=showbytype&type_id=<?php echo $row1['type_id'];?>">
        <i class="fas fa-home"></i>  <?php echo $row1["type_name"];  ?> ( <?php echo $row1['ttotal'];?> )</a>
                
        <?php } ?>
        </div>
      </li> 
      
  


      <li class="nav-item dropdown">
        <a class="nav-link text-warning dropdown-toggle  " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
        <i class="fas fa-user-cog"></i> คุณยังไม่ได้เข้าสู่ระบบ ?
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="form_login_user.php"  >
          <i class="fas fa-user"></i> เข้าสู่ระบบสมาชิก</a>
          <a class="dropdown-item" href="form_login.php" >
          <i class="fas fa-user-cog"></i>  เข้าสู่ระบบผู้ดูแลระบบ</a>
          <a class="dropdown-item" href="form_register.php"  >
          <!-- ใส่icon -->
          <i class="fas fa-user-plus"></i> สมัครสมาชิก</a>
        </div>
      </li>

    </ul>
  </div>
</nav>


<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-70px";
  }
  prevScrollpos = currentScrollPos;
  
}

</script>


