<?php 
include('../backend/condb.php');

$s = $_GET['s'];

$query_pro = "SELECT * FROM tbl_pro_dormitory as pro
WHERE pro.pro_name LIKE '%$s%' or pro.price  LIKE '%$s%' or pro.pro_price  LIKE '%$s%' 
ORDER BY pro.pro_id ASC " ;

$result_pro =mysqli_query($con, $query_pro) or die ("Error in query: $query_pro " . mysqli_error());

$count = mysqli_num_rows($result_pro);

?>

<style>
#img1:hover {

    transform: scale(0.9);

}

.btnsub {
    border-radius: 20px;
}
</style>
<section class="box_shop p-2 ">
    <div class="border1 col-md-12 p-5 border border-dark">
        <form action="show_pro.php" method="get">
            <div class="form-row">
                <div class="col-sm-8 mb-2">
                    <input type="search" id="input1" class="form-control border border-dark " name="s" id=""
                        placeholder="โปรโมชั่น , ราคา" value="<?php echo $_GET['s'] ;?>">
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn4 form-control"><i class="fas fa-search-dollar fa-1x "></i>
                    </button>
                </div>
                <div class="col-sm-12">
                    <br>
                    <br>
                    <div class="text-center">
                        <h4 class="text-white"><i class="fas fa-search-dollar"></i> : " <?php echo $_GET['s'] ;?> "
                        </h4>
                    </div>
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
    <?php  if($count > 0) { ?>
    <div class="row ">
        <?php foreach($result_pro as $row_pro){ ?>
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
    <?php } else{ ?>

    <h3 class="text-center" style="margin:100px 0 50px 0;"><i class="fas fa-times text-danger"></i> ไม่พบคำที่ค้นหา
        กรุณาลองใหม่อีกครั้ง!! <i class="fas fa-times text-danger"></i></h3>

    <?php } ?>
    <br><br>


</section>

<?php include('../js.php'); ?>
<script>
AOS.init();
</script>