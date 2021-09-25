<?php session_start();?>
<?php 
 $member_id = $_SESSION['member_id'];
 $m_name = $_SESSION['m_name'];
 $level_m = $_SESSION['user_level'];
if($level_m!='สมาชิก'){
  Header("Location: ../form_login_user.php");    //ไม่พบผู้ใช้กระโดดกลับไปหน้า login user form 
  
}?>
<?php include('h.php');?>
<title>หน้าแรก</title>

<?php include('navbar.php');
include('../backend/condb.php');
?>

<link rel="stylesheet" href="../css/form.css">
<style>
#img1:hover{
     
    transform: scale(0.9);

}
</style>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<div class="container">
<br><br><br>
<?php  include('slide.php'); ?>
<br><br><br><br>
      <section class="box_how_to_use p-3 p-md-12 text-center bg-light">
        <div class="container">
            <div class="box_how_to_user__header">
                <div class="row">
                    <div class="col-12">
                    <br>
                        <h2 class="">ระบบค้นหาแนะนำหอพัก</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="  bg-light container  shadow-sm ">
      <?php
      $act = (isset($_GET['act'])? $_GET['act'] : '');
      $q = (isset($_GET['q'])? $_GET['q'] : '');
      if($act == 'showbytype'){
        include('show_type.php') ;
        }elseif ($q!='') {
        include('search.php') ;
        }elseif ($act =='p') {
        include('search_price.php') ;
        }else{
        include('show.php');
      }
       ?>
    </section>
    <br>
  </div> 
  <br>
  <!-- Footer -->
<footer class="py-5 bg-dark">
<div class="container">
  <p class="m-0 text-center text-white">Copyright &copy; ระบบแนะนำค้นหาหอพัก 2021 devCS</p> 
</div>
<!-- /.container -->
</footer>
    

<script type="text/javascript">
      $('[data-fancybox]').fancybox({

        //loop: false,
        loop: true,
        buttons: [
            "zoom",
            //"share",
            "slideShow",
            //"fullScreen",
            //"download",
            "thumbs",
            "close"
        ],

        // Open/close animation type
        // Possible values:
        //   false            - disable
        //   "zoom"           - zoom images from/to thumbnail
        //   "fade"
        //   "zoom-in-out"
        //
        animationEffect: "zoom",

        // Transition effect between slides
        //
        // Possible values:
        //   false            - disable
        //   "fade'
        //   "slide'
        //   "circular'
        //   "tube'
        //   "zoom-in-out'
        //   "rotate'
        //
        transitionEffect: "slide",
      
      });
</script>


</body>
</html>


