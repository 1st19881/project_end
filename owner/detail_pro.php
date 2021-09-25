<?php
session_start();
include('h.php');
include('../backend/condb.php');
include('navbar.php');

// รับค่าตัวแปร
$pro_id = $_GET['pro_id'];

$sql = "SELECT pro.*,m.m_name
FROM tbl_pro_dormitory as pro
INNER JOIN tbl_member  as m ON pro.member_id=m.member_id 
WHERE pro.pro_id=$pro_id ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);


// update view รับจาก pro_id
$sql2 = "UPDATE tbl_pro_dormitory SET
pro_view=pro_view+1
WHERE pro_id=$pro_id";
$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
?>

<!-- head -->
<title><?php echo $row["pro_name"];?></title>
<meta charset="utf-8">

<!-- Page Content -->
<div class="container  ">


<link rel="stylesheet" href="../css/detail_button.css">

<div class="col-lg-12 my-4">
        <br><br><br>

        <div class="box1 p-5">
         <h3><b><i class="fas fa-building"></i> <?php echo $row["pro_name"];?></b></h3>
            <br><hr>
            <div class="d-flex">
                <h6 id="count1"><i class="fas fa-user-tag"></i> เพิ่มโดย <?php echo $row['m_name']; ?></h6>
                <p></p>
                </p>
                &nbsp;&nbsp;
                <p class="lead">
                <h6 id="count1"><i class="far fa-eye"></i> จำนวนการเข้าชม <?php echo $row['pro_view']; ?> ครั้ง </h6>
                <p></p>
                </p>
                &nbsp;&nbsp;
                <h6 id="count1"></i><i class="far fa-clock"></i> <?php echo date("$d"." d-m-Y"." $t"."  H:i:s $s",strtotime($row['date'])); ?></h6>
                <p></p>
            </div>
         </div>

        <!-- แสดงภาพใหญ่ -->
        <div id="card1" class="box1 card my-4">
            <div class="card-body ">
            <a data-fancybox="gallery" href="../backend/pro_img/<?php echo $row['proimg'];?>">
                <img class=" d-block w-100 mw-100" src="../backend/pro_img/<?php echo $row['proimg'];?>" width="100%"  height="auto" ></a>
                <div class="card-footer">
                    <h4 class="m-3">LIKE</h4>
                </div>
            </div>
        </div>
            
<br>
        <section class="box1 p-5  bg-light shadow-sm">
            <h3 class="text-center"><i class="fas fa-hotel"></i>  <b><?php echo $row["pro_name"];?></b></h3>
        </section>
<br>
     <!-- Post Content detail -->
     <div class="box1 card my-4">
      <div style="background-color:#FFFAFA"; class="card-body ">
      <center><h5>ราคา/ราคาโปรโมชั่น</h5></center>
    <br>
      <div class="d-flex justify-content-center">
      <p class="card-text text-dark mr-5"> <i class="fas fa-money-check-alt fa-2x"></i>
            <h5><s class="text-danger"><?php echo number_format($row['price']); ?></s> &nbsp; บาท</h5></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p class="text-right text-dark ml-5"> <i class="fab fa-salesforce fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;
            <h5><?php echo number_format($row['pro_price']); ?> &nbsp; บาท</h5> </p>
    </div>
    <br><br>
    <center><h5>วันที่เริ่มต้น/วันที่สิ้นสุด</h5></center>
    <br>
    <div class="d-flex justify-content-center">
    <p class="card-text text-dark mr-5"><i class="fas fa-calendar-alt fa-2x"></i>
            <h5><?php echo date(" d-m-Y",strtotime($row['startdate'])); ?></h5> </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p class="text-right text-dark ml-5"><i class="fas fa-calendar-alt fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;
         <h5><?php echo date(" d-m-Y",strtotime($row['enddate'])); ?></h5> </p>
    </div>
      </div>
    </div>      
    
    <div class="box1 card my-4">
      <h5 style="background-color:#FFFAFA"; class="card-header"><i class="fas fa-info-circle"></i>  
      รายละเอียด  : </h5>
      <div style="background-color:#FFFAFA"; class="card-body ">
      <?php echo $row["pro_detail"];?>
      </div>
        <div class="card-footer">
        </div>
    </div>


    <!-- Post Content detail -->
    <div class="box1 card my-4">
      <h5 style="background-color:#FFFAFA"; class="card-header"><i class="fas fa-info-circle"></i>  
      สิ่งอำนวยความสะดวก : </h5>
      <div style="background-color:#FFFAFA"; class="card-body ">
      <?php echo $row["detail_Facilities"];?>
      </div>
        <div class="card-footer">
        </div>
    </div>


  <div class="box1 card my-4">
      <h5 style="background-color:#FFFAFA"; class="card-header"><i class="fas fa-info-circle"></i>  ข้อมูลติดต่อ  : </h5>
      <div style="background-color:#FFFAFA"; class="card-body ">
      <?php echo $row["detail_contac"];?>
      </div>
        <div class="card-footer">
        </div>
    </div>

    </div>


    <!-- /.row -->

</div>
<!-- /.container -->



<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ระบบแนะนำค้นหาหอพัก 2021 devCS</p>
        <div class="d-flex justify-content-end">
        <a href="#top" class="btn btn-sm "style="background-color:yellow;border-radius:15px;margin-top:20px;"></i> ข้างบนสุด</a>
        </div>
    </div>
    <!-- /.container -->
</footer>

</body>

</html>


