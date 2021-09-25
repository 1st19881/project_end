<?php session_start();
include('h.php');
include('navbar.php');
include('../backend/condb.php');

?>
<title>โปรโมชั่นหอพัก </title>
<link rel="stylesheet" href="../css/form.css">
<style>
#img1:hover{
     
    transform: scale(0.9);

}
.btnsub{
    border-radius: 20px;
}
</style>

<!-- <link rel="stylesheet" href="style.css"> -->
<div class="container">
<br><br><br>
<?php  include('slide.php'); ?>
    <br><br><br><br>
    <section class="  bg-light container  shadow-sm ">
        <?php
        $s = (isset($_GET['s'])? $_GET['s'] : '');
        if(($s!='')){
        include('search_pro.php');     
        } else{
        include('showpro_list.php');
        }    
    ?>
</div>
<br><br><br><br>


<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ระบบแนะนำค้นหาหอพัก 2021 devCS</p>
    </div>
    <!-- /.container -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
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