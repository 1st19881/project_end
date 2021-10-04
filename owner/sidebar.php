<?php 
include('../backend/condb.php');
$member_id = $_SESSION['member_id'];
$sql_m =" SELECT * FROM tbl_member WHERE member_id=$member_id";
$rs= mysqli_query($con,$sql_m);
$row =mysqli_fetch_array($rs);
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link bg-dark">
      <img src="../backend/assets/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SYSTEM SEARCH DORMITORY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../m_img/<?php echo $row['m_img'];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" target="_bank" class="d-block"><?php echo $_SESSION['m_name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <!-- nav-compact -->
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header"><h5><i class="fas fa-bars"></i>  รายการ</h5><hr></li> 

          <li class="nav-item">
            <a href="owner.php" class="nav-link <?php if($menu=="index"){echo "active";} ?> ">
              <!-- <i class="nav-icon fas fa-chart-line"></i> -->
              <i class="nav-icon fas fa-hotel "></i>
              <p></i>หน้าแรก</p>
            </a>
          </li>




          <li class="nav-item">
            <a href="dormitory.php" class="nav-link <?php if($menu == "dormitory"){echo "active";} ?>">
              <!-- <i class="nav-icon fas fa-user-lock"></i> -->
              <i class="nav-icon fas fa-edit"></i>
              <p></i>จัดการหอพัก</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="promotion.php" class="nav-link <?php if($menu=="promotion"){echo "active";} ?> ">
              <!-- <i class="nav-icon fas fa-chart-line"></i> -->
              <i class="nav-icon fas fa-user-edit"></i>
              <p></i>จัดการโปรโมชั่น</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="comment.php" class="nav-link <?php if($menu=="comment"){echo "active";} ?> ">
              <!-- <i class="nav-icon fas fa-chart-line"></i> -->
              <i class="nav-icon fas fa-user-edit"></i>
              <p></i>ลบความคิดเห็น</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="notify.php" class="nav-link <?php if($menu=="notify"){echo "active";} ?> ">
              <!-- <i class="nav-icon fas fa-chart-line"></i> -->
              <i class="nav-icon fas fa-bullhorn"></i>
              <p></i>แจ้งลบความคิดเห็น</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="profile.php" class="nav-link <?php if($menu=="notify"){echo "active";} ?> ">
              <!-- <i class="nav-icon fas fa-chart-line"></i> -->
              <i class="nav-icon fas fa-user-edit"></i>
              <p></i>แก้ไขข้อมูลส่วนตัว</p>
            </a>
          </li>

        


          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="../logout1.php" class="nav-link text-danger">
              <i class="nav-icon fas fa-power-off"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
  </aside>