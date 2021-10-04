<?php 
include('../backend/condb.php');

$q = $_GET['q'];

$query_dormitory = "SELECT * FROM tbl_dormitory as p
INNER JOIN tbl_type as t ON p.type_id = t.type_id 
LEFT JOIN tbl_member as m ON p.member_id = m.member_id 
WHERE p.p_name LIKE '%$q%' or t.type_name  LIKE '%$q%' or p.price  LIKE '%$q%' or p.tag_name  LIKE '%$q%' 
ORDER BY p.price ASC " ;

$result_s =mysqli_query($con, $query_dormitory) or die ("Error in query: $query_dormitory " . mysqli_error());

$count = mysqli_num_rows($result_s);

?>



<style>
#img1:hover {

    transform: scale(0.9);

}
</style>

<section class="box_shop p-2 ">
    <div class="border1 col-md-12  p-5 ">
        <form action="owner.php" method="get">
            <div class="form-row">
                <div class="col-sm-8 mb-2">
                    <input type="search" id="input1" class=" form-control  " name="q" id=""
                        placeholder="ชื่อหอพัก,ราคา,ประเภทหอพัก">
                </div>
                <div class=" col-sm-4 mb-2">
                <button type="submit" class="btn4 form-control"><i class="fas fa-search fa-1x"> ค้นหา</i></button>
                </div>
            </div>
        </form>

        <label class="labelfollow" for=""><i class="fasprice fas fa-search-dollar"></i>
            ค้นหาตามช่วงราคา-ราคา</label>
        <form action="" method="GET">
            <div class="form-row">
                <div class="col-sm-4 mb-2">
                    <input type="number" id="input1" name="min"  min="0" class=" form-control " placeholder="ราคาต่ำสุด"
                        required>
                </div>
                <div class="col-sm-4 mb-2">
                    <input type="number" id="input1" name="max"  min="0" class=" form-control " placeholder="ราคาสูงสุด"
                        required>
                </div>
                <div class="col-sm-4">
                <button type="submit" name="act" value="p" class=" btn4 form-control"><i
                            class="fas fa-search-dollar fa-1x "> ค้นหาตามราคา </i>
                </div>
                <div class="col-sm-12">
                    <br>
                    <br>
                    <div class="text-center">
                        <h4 class="text-white"><i class="fas fa-search-dollar"></i> : " <?php echo $_GET['q'] ;?> "
                        </h4>
                    </div>
                </div>
            </div>
        </form>
    </div>

</section>


<section class="box_shop p-md-5">
    <div class="row">
        <div class="col-md-6">
            <div class="text-left">
                <h3 class="mb-5  p-3  text-dark d-inline-block "><i class="far fa-building"></i> หอพัก
                    ( <?php echo $count; ?> ) </h2>
            </div>
        </div>
    </div>
    <?php if($count > 0){ ?>
    <div class="card-deck">
        <?php foreach($result_s as $row_s){ ?>
        <div class="col-xs-6 col-lg-4 col-sm-12 col-md-6 mb-5 ">
            <div class="card_c border h-100 bg-dark" data-aos="zoom-in-right" data-aos-duration="2000">
                <div class="card-header bg-dark text-white">
                    <i class="fas fa-map-marker-alt text-danger"></i> <?php echo $row_s['p_name'] ?>
                </div>
                <a data-fancybox="gallery" href="../backend/p_imghome/<?php echo $row_s['p_img'];?>">
                    <img id="img1" src="../backend/p_imghome/<?php echo $row_s['p_img'];?>" class="card-img-top"
                        alt="Card image cap" width="100%" height="250px" data-aos="zoom-in" data-aos-duration="1500">
                </a>
                <a href="detail.php?p_id=<?php echo $row_s['p_id'];?>" style="text-decoration:none">
                    <div class="card-body text-left bg-dark">
                        <h5 class="card-title text-white"><i class="fas fa-hotel"></i> <?php echo $row_s['p_name']; ?>
                        </h5>
                        <p class="card-text  text-white text-nowrap"><i class="fas fa-th-large"></i> ประเภท:
                            <?php echo $row_s['type_name']; ?></p>
                        <p class="card-text text-white"><i class="fas fa-dollar-sign"></i> ราคา: <?php echo  
                         number_format($row_s['price']); ?> บาท / <?php echo $row_s['unit'];?></p>
                        <p class="text-right text-white"><i class="fas fa-tags"></i> <?php echo $row_s['tag_name']; ?>
                        </p>
                        <a id="img1" href="detail.php?p_id=<?php echo $row_s['p_id'];?>"
                            class="btnsub btn btn-light   btn-block btn-flat p-2"><i class="fas fa-info-circle"></i>
                            รายละเอียดเพิ่มเติม</a>
                    </div>
                    <div class="card-footer bg-dark text-white">
                        <small><i class="fas fa-user-plus"></i></i> <?php echo $row_s['m_name']; ?></small>
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

<?php  include('../js.php'); ?>

<script>
AOS.init();
</script>