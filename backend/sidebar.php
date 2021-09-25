<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-dark elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link bg-dark">
      <img src="assets/dist/img/AdminLTELogo.png"
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
          <img src="assets/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" target="_bank" class="d-block"><?php echo $_SESSION['a_name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <!-- nav-compact -->
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header"><h5><i class="fas fa-bars"></i>  รายการ</h5><hr></li> 
          <!-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="../examples/blank.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="assets/starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li> -->

          <li class="nav-item">
            <a href="index.php" class="nav-link <?php if($menu=="index"){echo "active";} ?> ">
              <!-- <i class="nav-icon fas fa-chart-line"></i> -->
              <i class="nav-icon fas fa-hotel "></i>
              <p></i>หน้าแรก</p>
            </a>
          </li>





          <li class="nav-item">
            <a href="admin.php" class="nav-link <?php if($menu=="admin"){echo "active";} ?> ">
              <!-- <i class="nav-icon fas fa-chart-line"></i> -->
              <i class="nav-icon fas fa-user-cog"></i>
              <p></i>จัดการผู้ดูแลระบบ</p>
            </a>
          </li>



          <li class="nav-item">
            <a href="member.php" class="nav-link <?php if($menu=="member"){echo "active";} ?> ">
              <!-- <i class="nav-icon fas fa-chart-line"></i> -->
              <i class="nav-icon fas fa-user-edit"></i>
              <p></i>จัดการสมาชิก</p>
            </a>
          </li>



          <li class="nav-item">
            <a href="type.php" class="nav-link <?php if($menu=="type"){echo "active";} ?> ">
              <!-- <i class="nav-icon fas fa-user-lock"></i> -->
              <i class="nav-icon fas fa-edit"></i>
              <p></i>จัดการประเภทหอพัก</p>
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
            <a href="promotion.php" class="nav-link <?php if($menu == "promotion"){echo "active";} ?>">
              <!-- <i class="nav-icon fas fa-user-lock"></i> -->
              <i class="nav-icon fas fa-edit"></i>
              <p></i>จัดการโปรโมชั่น</p>
            </a>
          </li>



          <li class="nav-item">
            <a href="comment.php" class="nav-link <?php if($menu=="comment"){echo "active";} ?> ">
              <!-- <i class="nav-icon fas fa-chart-line"></i> -->
              <i class="nav-icon fas fa-comments"></i>
              <p></i>จัดการแสดงความคิดเห็น</p>
            </a>
          </li>


        


          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link text-danger">
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