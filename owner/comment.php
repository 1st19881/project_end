<html>
<link rel="stylesheet" href="../backend/assets/dist/css/adminlte.min.css">

<head>
    <?php 
session_start();
include('h.php');
$menu = "comment";
?>

    <head>

    <body>
        <?php include('navbar.php');?>
        <div class="container-fluid">
            <p></p>
            <br><br><br>
            <div class="row">
                <div class="col-md-2 "><br>
                    <!-- Left side column. contains the logo and sidebar -->
                    <?php include('menu.php');?>
                    <!-- Content Wrapper. Contains page content -->
                </div>
                <div class="col-md-10 ">
                    <br>
                    <?php 
                  error_reporting( error_reporting() & ~E_NOTICE );

                      include('comment_list.php');

                  ?>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
        </div>
        <footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ระบบแนะนำค้นหาหอพัก 2021 devCS</p>
    </div>
    <!-- /.container -->
</footer>
    </body>

</html>