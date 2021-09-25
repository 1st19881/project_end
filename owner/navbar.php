<link rel="stylesheet" href="../css/navbar.css">
<?php 
$member_id = $_SESSION['member_id'];



$sql="SELECT * FROM tbl_member WHERE member_id=$member_id ";
$resault = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($resault);
?>





 <?php  require_once('../backend/condb.php');
	$querytotal = "SELECT t.type_id, t.type_name, COUNT(p.type_id) as ttotal
  FROM tbl_type as  t 
  LEFT JOIN tbl_dormitory as  p ON t.type_id=p.type_id 
  GROUP BY t.type_id
  ORDER BY t.type_name ASC";
	$result_total =mysqli_query($con, $querytotal) or die ("Error in query: $querytotal " . mysqli_error());
		// print_r($querytotal);
    //     exit()
 ?> 



<nav id="navbar" class="navbar navbar-expand-lg navbar navbar-dark bg-dark navbar-inverse fixed-top  "style=" transition: top 0.4s;" data-spy="affix" data-offset-top="197"><button class="navbar-toggler bg-dark " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
  <a class="navbar-brand" href="#"><i class="far fa-building fa-2x text-warning d-none d-md-block"></i></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    

     <li class="nav-item active">
        <a class="nav-link text-warning  active " href="owner.php"><i class="fas fa-home"></i>  หน้าแรก <span class="sr-only"></span></a>
      </li>


    <li class="nav-item active">
        <a class="nav-link text-warning  " href="show_pro.php"><i class="far fa-clock"></i>  โปรโมชั่นหอพัก<span class="sr-only"></span></a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link text-warning  active dropdown-toggle  " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
        <i class="fas fa-th-large"></i>  ประเภท
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="owner.php">ทั้งหมด</a>
        <?php foreach ($result_total as $row1 )  { ?>
        <a class="dropdown-item" href="owner.php?act=showbytype&type_id=<?php echo $row1['type_id'];?>">
        <i class="fas fa-home"></i><?php echo $row1["type_name"];  ?> ( <?php echo $row1['ttotal'];?> )</a>
                
        <?php } ?>
        </div>
      </li> 
      
      
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-edit"></i>  จัดการข้อมูล
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="dormitory.php"><i class="fas fa-edit"></i> จัดการหอพัก</a>
          <a class="dropdown-item" href="promotion.php"><i class="fas fa-edit"></i> จัดการโปรโมชั่น</a>
          <a class="dropdown-item" href="comment.php"><i class="fas fa-edit"></i> จัดการความคิดเห็น</a>
        </div>
      </li>





      <li class="nav-item dropdown">
        <a class="nav-link text-warning  dropdown-toggle  " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
        <i class="fas fa-user-cog"></i>  <?php echo $_SESSION['m_name']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="profile.php">
          <img class="rounded-circle"  src="../m_img/<?php echo $row['m_img'];?>"width="30px" height="30px"  >
          ข้อมูลส่วนตัว</a>
          
          <a class="dropdown-item" >
          สถานะ : <i class="text-success"> Online</i>  &nbsp; <i class="fas fa-circle text-success"></i> </a>

          <a class="dropdown-item " > ระดับผู้ใช้งาน : <div class="text text-success"><?php echo $_SESSION['user_level']; ?></div> </a>

          <a class="dropdown-item" href="../logout1.php">
          <!-- ใส่icon -->
          <i class="fas fa-sign-out-alt"></i>   ออกจากระบบ</a>
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




