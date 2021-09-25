<?php 

$menu = "promotion"

?>

<title>จัดการโปรโมชั่น</title>
<?php include('header.php');
error_reporting( error_reporting() & ~E_NOTICE );


// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// exit;

$member_id=$_SESSION['user_id'];


?>

<br>
<br>
      <?php
            $act = (isset($_GET['act'])? $_GET['act'] : '');
            if($act == 'add'){
            include('promotion_form_add.php');
            }elseif ($act == 'edit') {
            include('promotion_form_edit.php');
            }
            else {
            include('promotion_list.php');
            }
      ?>


<script src="../ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('detail');
</script>
<script>
CKEDITOR.replace('detail1');
</script>
<script>
CKEDITOR.replace('detail2');
</script>
<script>
CKEDITOR.replace('detail3');
</script>

</body>

</html>