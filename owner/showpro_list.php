<?php 
include('../backend/condb.php');
mysqli_query($con, "SET NAMES 'utf8' ");
$query=mysqli_query($con,"SELECT COUNT(pro_id) FROM `tbl_pro_dormitory` ");
$row = mysqli_fetch_row($query);


 
	$rows = $row[0];
 
	$page_rows = 6;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 
 
	$last = ceil($rows/$page_rows);
 
	if($last < 1){
		$last = 1;
	}
 
	$pagenum = 1;
 
	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}
 
	if ($pagenum < 1) {
		$pagenum = 1;
	}
	else if ($pagenum > $last) {
		$pagenum = $last;
	}
 
	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
 
	$numquery=mysqli_query($con,"SELECT * FROM tbl_pro_dormitory 
    ORDER BY pro_id DESC $limit");
 
	$paginationCtrls = '';
 
	if($last != 1){
 
        if ($pagenum > 1) {
            $previous = $pagenum - 1;
            $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-primary btn-flat">< ย้อนกลับ</a> &nbsp; &nbsp; ';
     
            for($i = $pagenum-4; $i < $pagenum; $i++){
                if($i > 0){
            $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary btn-flat">'.$i.'</a> &nbsp; ';
                }
        }
    }
     
        $paginationCtrls .= ''.$pagenum.' &nbsp; ';
     
        for($i = $pagenum+1; $i <= $last; $i++){
            $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary btn-flat">'.$i.'</a> &nbsp; ';
            if($i >= $pagenum+4){
                break;
            }
        }
     
    if ($pagenum != $last) {
    $next = $pagenum + 1;
    $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-primary  btn-flat">ถัดไป > </a> ';
    }
}
?>

<?php $count = mysqli_num_rows($numquery);?>

<section class="box_shop mt-5 p-2">
    <div class="border1 col-md-12 p-5 ">
        <form action="show_pro.php" method="get">
            <div class="form-row">
                <div class="col-sm-8 mb-2">
                    <input type="search" id="input1" class="form-control  " name="s" id=""
                        placeholder="โปรโมชั่น , ราคา">
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn4 form-control"><i class="fas fa-search-dollar fa-1x "></i></button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="box_how_to_use p-3 p-md-12 text-center bg-light">
    <div class="container">
        <div class="box_how_to_user__header">
            <div class="row">
                <div class="col-12">
                    <br>
                    <h2 class=""><i class="far fa-clock"></i> โปรโมชั่นหอพัก ( <?php echo $count;  ?> ) </h2>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="box_shop p-md-5">
    <?php if($count > 0){?>
    <div class="row">
        <?php foreach($numquery as $row_pro){ ?>
        <div class="col-xs-6 col-lg-4 col-sm-12 col-md-6 mb-5 ">
            <div class="card_c border h-100 bg-dark " data-aos="zoom-in-right" data-aos-duration="2000">
                <div class="card-header bg-dark text-white">
                    <i class="fas fa-clock"></i> <?php echo iconv_substr($row_pro['pro_name'],0,24,'utf-8'); ?>...
                </div>
                <a data-fancybox="gallery" href="../backend/pro_img/<?php echo $row_pro['proimg'];?>">
                    <img id="img1" src="../backend/pro_img/<?php echo $row_pro['proimg'];?>" width="100%" height="250px"
                        class="card-img-top" alt="Card image cap" data-aos="zoom-in" data-aos-duration="1500">
                </a>
                <a href="detail_pro.php?pro_id=<?php echo $row_pro['pro_id'];?>" style="text-decoration:none">
                    <div class="card-body text-left bg-dark ">
                        <h5 class="card-title text-white"><i class="fas fa-clock text-success"></i>&nbsp;
                            <?php echo $row_pro['pro_name']; ?></h5>
                        <br>
                        <hr class="bg-white">
                        <div class="d-flex">
                            <p class="card-text text-white"><i class="fas fa-money-check-alt"></i>
                                <s><?php echo number_format($row_pro['price']); ?></s> บาท
                            </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <p class="text-right text-white"> <i class="fab fa-salesforce"></i>
                                <?php echo number_format($row_pro['pro_price']); ?> บาท </p>
                        </div>
                        <div class="d-flex">
                            <p class="card-text text-white"><i class="fas fa-calendar-alt"></i>
                                <?php echo date(" d-m-Y",strtotime($row_pro['startdate'])); ?> </p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <p class="text-right text-white"><i class="fas fa-calendar-alt"></i>
                                <?php echo date(" d-m-Y",strtotime($row_pro['enddate'])); ?> </p>
                        </div>
                        <br>
                        <hr class="bg-white">
                        <div class="d-flex justify-content-center">
                            <a href="detail_pro.php?pro_id=<?php echo $row_pro['pro_id'];?>"
                                class="btnsubpro btn border btn-block btn-outline-success"><i
                                    class="fas fa-info-circle"></i> รายละเอียดเพิ่มเติม</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } else{?>

    <h3 class="text-center" style="margin:100px 0 50px 0;"><i class="fas fa-times text-danger"></i>
        ไม่พบข้อมูลโปรโมชั่นหอพัก <i class="fas fa-times text-danger"></i></h3>

    <?php  } ?>
    <br><br>

    <center>
        <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
    </center>

    <br><br>

</section>




<?php  include('../js.php'); ?>

<script>
AOS.init();
</script>