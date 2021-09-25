<?php 
session_start();
include('h.php');
include('navbar.php');
include('backend/condb.php');
?>
<title>หน้าแรก</title>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>

<link rel="stylesheet" href="css/form.css">
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
                        <h2 class="text-center">ระบบค้นหาแนะนำหอพัก</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" bg-light container  shadow-sm">
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
    <br>
</div>


<?php $querytotal = "SELECT * FROM tbl_type ORDER BY type_id ASC ";
	$result_total =mysqli_query($con, $querytotal);
   
?> 


<footer class=" bg-dark"style="width:100%;height:auto;padding:50px 100px 50px 100px">
    <div class="container">
        <p class=" text-center text-white"style="font-size:20px">Copyright &copy; ระบบแนะนำค้นหาหอพัก 2021 devCS</p>
    </div>
    <!-- /.container -->
</footer>


<!-- Footer -->
<!-- <footer class=" bg-dark"style="height:auto;padding:0px 20px 0px 20px; ">
    <div class="container">
        <p class=" text-center text-white " style="padding:50px 0 50px 0;margin:0px 0px 30px 0px;font-size:1.25rem">Copyright &copy; ระบบแนะนำค้นหาหอพัก 2021 devCS</p>
        </div>
       <div class="col-md-12">
       <div class="row"> 
        <?php foreach ($result_total as $row_t )  { ?> 
            <div class="col-md-6" style="padding:0 20px 15px 20px;margin:0px 0px 20px 0px">
            <a class="text-white " href="index.php?act=showbytype&type_id=<?php echo $row_t['type_id'];?>"><li><?php echo $row_t['type_name'];?></li> </a>
            </div>
            <?php }?>
            </div>
       </div>
</footer> -->



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

<?php include('js.php'); ?>

</body>

</html>