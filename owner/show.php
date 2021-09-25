<?php 

$sql = "SELECT * FROM tbl_dormitory as p
INNER JOIN tbl_type as t ON p.type_id = t.type_id 
LEFT JOIN tbl_member as m ON p.member_id = m.member_id 
ORDER BY p.p_id DESC";

$result_pro =mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

$count_rs = mysqli_num_rows($result_pro);


// var_dump($sql);
// exit;

 ?>

<!-- navbar -->
<?php  require_once('../backend/condb.php');
	$querytotal = "SELECT t.type_id, t.type_name, COUNT(p.type_id) as ttotal
  FROM tbl_type as  t 
  INNER JOIN tbl_dormitory as  p ON t.type_id=p.type_id 
  GROUP BY t.type_id
  ORDER BY t.type_name DESC";
	$result_total =mysqli_query($con, $querytotal) or die ("Error in query: $querytotal " . mysqli_error());
		// print_r($querytotal);
    //     exit()
 ?>

<?php 
include('../backend/condb.php');
mysqli_query($con, "SET NAMES 'utf8' ");
$query=mysqli_query($con,"SELECT COUNT(p_id) FROM `tbl_dormitory` ");
$row = mysqli_fetch_row($query);
 
	$rows = $row[0];
 
	$page_rows = 6;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า   
 
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
 
	$nquery=mysqli_query($con,$sql = "SELECT * FROM tbl_dormitory as p
    INNER JOIN tbl_type as t ON p.type_id = t.type_id 
    LEFT JOIN tbl_member as m ON p.member_id = m.member_id 
    ORDER BY p.price ASC $limit");
 
 $paginationCtrls = '';
 
 if($last != 1){

 if ($pagenum > 1) {
     $previous = $pagenum - 1;
     $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-primary btn-flat ">< ย้อนกลับ</a> &nbsp; &nbsp; ';

     for($i = $pagenum-4; $i < $pagenum; $i++){
         if($i > 0){
     $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary btn-flat ">'.$i.'</a> &nbsp; ';
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

<link rel="stylesheet" href="../css/dropdow.css">

<section class="box_shop p-2">
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
                    <input type="number" id="input1" name="min" class=" form-control " placeholder="ราคาต่ำสุด"
                        required>
                </div>
                <div class="col-sm-4 mb-2">
                    <input type="number" id="input1" name="max" class=" form-control " placeholder="ราคาสูงสุด"
                        required>
                </div>
                <div class="col-sm-4">
                    <button type="submit" name="act" value="p" class=" btn4 form-control"><i
                            class="fas fa-search-dollar fa-1x "> ค้นหาตามราคา </i></button>
                </div>
            </div>
        </form>
    </div>

</section>


<section class="box_shop p-md-5 ">
    <div class="row">
        <div class="col-md-12">
            <div class="text-left">
            <h3 class="mb-5  p-3  text-dark d-inline-block "><i class="far fa-building"></i> หอพัก ( <?php echo $count_rs; ?> ) </h2>
            </div> 
        </div>
        </div>
        <?php if($count_rs > 0) { ?>
            <div class="row">
        <?php foreach($nquery as $row_pro){ ?>
        <div class="col-xs-6 col-lg-4 col-sm-12 col-md-6 mb-5 ">
            <div class="card_c border h-100 bg-dark" data-aos="zoom-in-right" data-aos-duration="2000">
                <div class="card-header bg-dark text-white">
                    <i class="fas fa-map-marker-alt text-danger"></i> <?php echo $row_pro['p_name'] ?>
                </div>
                <a data-fancybox="gallery" href="../backend/p_imghome/<?php echo $row_pro['p_img'];?>">
                    <img id="img1" src="../backend/p_imghome/<?php echo $row_pro['p_img'];?>"  class="card-img-top" alt="Card image cap" width="100%" height="250px"   data-aos="zoom-in" data-aos-duration="1500">
                </a>
                <a href="detail.php?p_id=<?php echo $row_pro['p_id'];?>" style="text-decoration:none">
                    <div class="card-body text-left bg-dark">
                        <h5 class="card-title text-white"><i class="fas fa-hotel"></i> <?php echo $row_pro['p_name']; ?>
                        </h5>
                        <p class="card-text  text-white text-nowrap"><i class="fas fa-th-large"></i> ประเภท:
                            <?php echo $row_pro['type_name']; ?></p>
                        <p class="card-text text-white"><i class="fas fa-dollar-sign"></i> ราคา: <?php echo  
                         number_format($row_pro['price']); ?> บาท / <?php echo $row_pro['unit'];?></p>
                        <p class="text-right text-white"><i class="fas fa-tags"></i> <?php echo $row_pro['tag_name']; ?>
                        </p>
                        <a id="img1" href="detail.php?p_id=<?php echo $row_pro['p_id'];?>"
                        class="btnsub btn btn-light   btn-block btn-flat p-2"style="text-decoration:none"><i
                        class="fas fa-info-circle"></i> รายละเอียดเพิ่มเติม</a>
                    </div>
                    <div class="card-footer bg-dark text-white">
                     <small><i class="fas fa-user-plus"></i></i> <?php echo $row_pro['m_name']; ?></small>
                    </div>
                </a>
            </div>

        </div>
        <?php } ?>
    </div>
   <?php } else{?>

    <h3 class="text-center"style="margin:100px 0 50px 0;"><i class="fas fa-times text-danger"></i> ไม่พบข้อมูลหอพัก <i class="fas fa-times text-danger"></i></h3>

    <?php } ?>
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