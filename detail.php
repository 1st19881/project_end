<?php
session_start();
include('h.php');
include('navbar.php');



// รับค่าตัวแปร
$p_id = $_GET['p_id'];

$sql = "SELECT p.*,m.m_name,t.type_name
FROM tbl_dormitory as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
LEFT JOIN tbl_member  as m ON p.member_id=m.member_id 
WHERE p.p_id=$p_id ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);


// update view รับจาก p_id
$sql2 = "UPDATE tbl_dormitory SET
p_view=p_view+1
WHERE p_id=$p_id";
$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());



$query_comment = "SELECT COUNT(c_id) as commentt
FROM tbl_comment
WHERE ref_p_id=$p_id";
$result_c1 = mysqli_query($con, $query_comment);
$row_comment = mysqli_fetch_array($result_c1);

?>


<link rel="stylesheet" href="css/detail_button.css">



<!-- head -->
<title><?php echo $row["p_name"];?></title>
<meta charset="utf-8">

<!-- Page Content -->
<div class="container  ">


    <!-- head Content Column -->
    <div class="col-lg-12 my-4">

        <br><br><br>

        <div class="box1 p-5">
            <h3><b><i class="fas fa-building"></i> <?php echo $row["p_name"];?></b></h3>
            <b>
                <p class="text-dark"><i class="fas fa-th-large"></i> ประเภท <?php echo $row["type_name"];?></p>
            </b>
            <b>
                <p class="text-dark"><i class="fas fa-dollar-sign"></i> ราคา <?php echo number_format($row["price"]);?>
                    บาท</p>
            </b>
            <hr>
            <div class="d-flex">
                <h6 id="count1"><i class="fas fa-user-tag"></i> เพิ่มโดย <?php echo $row['m_name']; ?></h6>
                <p></p>
                </p>
                &nbsp;&nbsp;
                <p class="lead">
                <h6 id="count1"><i class="far fa-eye"></i> จำนวนการเข้าชม <?php echo $row['p_view']; ?> ครั้ง </h6>
                <p></p>
                </p>
                &nbsp;&nbsp;
                <h6 id="count1"></i><i class="far fa-clock"></i>
                    <?php echo date("$d"." d-m-Y"." $t"."  H:i:s $s",strtotime($row['datesave'])); ?></h6>
                <p></p>
                &nbsp;&nbsp;
                <h6 id="count1"><i class="far fa-comments" data-toggle="modal" data-target="#modaldetail1"></i>
                    <?php echo $row_comment['commentt']; ?></h6>
                <p></p>
            </div>
            <div class="d-flex justify-content-end">
                <a href="#comment"><i class="fas fa-angle-double-down"></i> ความคิดเห็น</a>
            </div>
        </div>

        <!-- แสดงภาพใหญ่ -->
        <div class="box1 card my-4">
            <div class="card-body ">
                <a data-fancybox="gallery" href="backend/p_imghome/<?php echo $row['p_img'];?>">
                    <img class=" d-block w-100 mw-100" src="backend/p_imghome/<?php echo $row['p_img'];?>" width="100%"
                        height="auto"></a>
                <br>
                <div class="card-footer">

                </div>
            </div>
        </div>

        <!-- แสดงภาพเล้ก -->
        <div class="box1 card my3 p-4">
            <div class="text-dark">
                <h5><i class="fas fa-images"></i> รูปภาพเพิ่มเติม</h5>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box1 my-4">
                        <div class="card-body ">
                            <label for=""> <i class="far fa-image"></i> ภาพ1</label>
                            <a data-fancybox="gallery" href="backend/p_imghome/<?php echo $row['p_img2'];?>">
                                <img class="img-fluid rounded shadow-sm"
                                    src="backend/p_imghome/<?php echo $row['p_img2'];?>" width="100%" height="auto;"
                                    alt="..."></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="box1 my-4">
                        <div class="card-body ">
                            <label for=""> <i class="far fa-image"></i> ภาพ2</label>
                            <a data-fancybox="gallery" href="backend/p_imghome/<?php echo $row['p_img3'];?>">
                                <img class="img-fluid rounded shadow-sm"
                                    src="backend/p_imghome/<?php echo $row['p_img3'];?>" width="100%" height="auto;"
                                    alt="..."></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box1 my-4">
                        <div class="card-body ">
                            <label for=""> <i class="far fa-image"></i> ภาพ3</label>
                            <a data-fancybox="gallery" href="backend/p_imghome/<?php echo $row['p_img4'];?>">
                                <img class="img-fluid rounded shadow-sm"
                                    src="backend/p_imghome/<?php echo $row['p_img4'];?>" width="100%" height="auto;"
                                    alt="..."></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Post Content detail -->
        <div class="box1 card my-4">
            <h5 style="background-color:#FFFAFA" ; class="card-header"><i class="fas fa-info-circle"></i>
                รายละเอียด : </h5>
            <div style="background-color:#FFFAFA" ; class="card-body ">
                <?php echo $row["detail"];?>
            </div>
            <div class="card-footer">
            </div>
        </div>

        <div class="box1 card my-4">
            <h5 style="background-color:#FFFAFA" ; class="card-header"><i class="fas fa-info-circle"></i>
                สิ่งอำนวยความสะดวก : </h5>
            <div style="background-color:#FFFAFA" ; class="card-body ">
                <?php echo $row["detail_Facilities"];?>
            </div>
            <div class="card-footer">
            </div>
        </div>



        <div class="box1 card my-4">
            <h5 style="background-color:#FFFAFA" ; class="card-header"><i class="fas fa-info-circle"></i>
                ข้อมูลค่าบริการ : </h5>
            <div style="background-color:#FFFAFA" ; class="card-body ">
                <?php echo $row["detail_service"];?>
            </div>
            <div class="card-footer">
            </div>
        </div>



        <div class="box1 card my-4">
            <h5 style="background-color:#FFFAFA" ; class="card-header"><i class="fas fa-info-circle"></i>
                ข้อมูลค่าบริการ : </h5>
            <div style="background-color:#FFFAFA" ; class="card-body ">
                <?php echo $row["detail_service"];?>
            </div>
            <div class="card-footer">
            </div>
        </div>


        <h5 style="background-color:#FFFAFA" ; class="box1 card-header"><i
                class="fas fa-map-marker-alt text-danger"></i> แผนที่หอพัก </h5>
        <div class="box1 card">
            <div class="map-responsive">
                <?php echo $row["p_link"];?>
            </div>
        </div>

        <?php include('comment_list.php'); ?>



<div id="comment"></div>

<div id="accordion">
  <div class="card mb-5 mt-5">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <h4> <i class="fas fa-comments"></i> ความคิดเห็น ( <?php echo $row_comment['commentt'] ?> ) </h4>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      <div class="mt-2">
        <div class="d-flex justify-content-center row ">
            <div class="col-md-12 mb-4 ">
                <div class="card bg-light">
                    <div class="card-body">
                        <?php  foreach($result as $row_c) { ?>
                        <?php $st = $row_c['level_m']; ?>
                        <div class="d-flex flex-column comment-section " id="myGroup">
                            <div class="bg-light p-2 text-dark">
                                <div class="d-flex justify-content-end">
                                    <span class="bg-warning p-1">ความคิดเห็นที่ <?php echo $i++; ?>
                                    </span>
                                </div>
                                <div class="d-flex flex-row user-info"><img class="rounded-circle"
                                        src="m_img/<?php echo $row_c['m_img'] ; ?>" width="75">
                                    <div class="d-flex flex-column justify-content-start ml-2"><span
                                            class="d-block font-weight-bold">ชื่อ :
                                            <?php echo $row_c['m_name']; ?></span>
                                        <span class="d-block font-weight-bold">ตอบ :
                                            <?php echo $row_c['reply_name']; ?></span>
                                        <span class="text-dark font-weight-bold">เวลา :
                                            <?php echo $row_c['c_date']; ?> น.</span>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="d-block font-weight-bold">ความคิดเห็น :</span>
                                    <p class="text-danger"><?php echo $row_c['c_detail']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <?php if ($st == 'เจ้าของหอพัก') {
                                     echo ""."<br> <small  class='badge badge-info p-2'>เจ้าของหอพัก</small>";
                                    }elseif($st == 'สมาชิก') {
                                        echo ""."<br> <small  class='badge badge-warning p-2'>สมาชิก</small>";
                                    }
                                    ?>
                        </div>
                        <br>
                        <hr>
                        <?php  } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>
 
</div>

<!-- /.row -->



</div>
<!-- /.container -->


</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ระบบแนะนำค้นหาหอพัก 2021 devCS</p>
        <div class="d-flex justify-content-end">
            <a href="#top" class="btnfoot btn btn-sm "></i> ข้างบนสุด</a>
        </div>
    </div>
    <!-- /.container -->
</footer>






<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
</script>
</body>

</html>