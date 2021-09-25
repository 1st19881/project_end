<!-- <?php 
include('../backend/condb.php');  
$query_s = "SELECT * FROM tbl_slide 
ORDER BY s_id DESC " or die("Error:" . mysqli_error());
$result_slider = mysqli_query($con, $query_s);
?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
              <?php $i=0; 
                foreach ($result_slider as $row)
                {
                  $actives='';
                  if($i==0){
                  $actives='active';
                }
              ?>
                <div class="carousel-item <?php echo $actives;?>">
                  <img class="d-block w-100" src="../backend/s_img/<?php echo $row['s_img'];?>" width="1100px" height="450px" alt="">
                </div>
                <?php 
                $i++;
                }?>  
              </div>
      </div> -->