<?php
//1. เชื่อมต่อ database:
include('../backend/condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$pro_id = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_pro_dormitory
WHERE pro_id = '$pro_id'
ORDER BY pro_id asc";
$result2 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);



?>
<title>แก้ไข <?php echo $row['pro_name']; ?> </title>
<section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-edit"></i> แก้ไขโปรโมชั่น<label style="color: red;">*</label></h3>
      </div>
      <br>
      <div class="card-body">
      <form   action="form_promotion_edit_db.php" method="post" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-row">
            <div class="col-12">
            <center><img src="../backend/pro_img/<?php echo $row['proimg'];?>" width="200px"  class="thumbnail"  alt="..."  ></center>
            <br><br>
            <label for=""><h5>ชื่อโปรโมชั่น</h5></label>
            <input type="text"  name="pro_name" class="form-control" required placeholder="ชื่อโปรโมชั่น" value="<?php echo $row['pro_name']; ?>" />
        </div>
        <div class="col-12">
       <label for=""> <p> <h5>รายละเอียดโปรโมชั่น</h5> </p></label>
        <textarea  name="pro_detail" rows="5" cols="60" id="detail" <?php echo $pro_detail;?></textarea>
        <br>
        </div>
        <div class="col-6">
      <label for=""><h5>ราคา ฿</h5></label>
        <input type="text"  name="price" class="form-control" required placeholder="ราคา" value="<?php echo $row['price']; ?>" />
       <br>
        <br>
      </div>
      <div class="col-6">
      <label for=""><h5>ราคาโปรโมชั่น ฿</h5></label>
        <input type="text"  name="pro_price" class="form-control" required placeholder="ราคาโปรโมชั่น" value="<?php echo $row['pro_price']; ?>" />
       <br>
        <br>
      </div> 
      <div class="col-6">
      <label for=""><h5>วันที่เริ่ม</h5></label>
        <input type="date"  name="startdate" class="form-control" required placeholder="ราคา" value="<?php echo $row['startdate']; ?>" />
       <br>
        <br>
      </div>
      <div class="col-6">
      <label for=""><h5>วันที่สิ้นสุด</h5></label>
        <input type="date"  name="enddate" class="form-control" required placeholder="ราคาโปรโมชั่น"
        value="<?php echo $row['enddate']; ?>" />
       <br>
        <br>
      </div>
        <div class="col-12">
       <label for=""> <p> <h5>สิ่งอำนวยความสะดวก</h5> </p></label>
        <textarea  name="detail_Facilities" rows="5" cols="60" id="detail1"><?php echo $detail_Facilities; ?></textarea>
        <br>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5>ข้อมูลติดต่อ</h5> </p></label>
        <textarea  name="detail_contac" rows="5" cols="60" id="detail2">
        <?php echo $detail_contac; ?></textarea>
        <br>
        </div>
        <div class="col-12">
        <label for=""><h5>ภาพโปรโมชั่น <small class="text-danger">* ภาพขนาด 800 x 600 px</small></h5></label>
        <input type="file" name="proimg" class="form-control" />
        </div>  
        </div>
        <br>           
      <div class="d-flex justify-content-center">
      <input type="hidden"name="pro_id" value="<?php echo $pro_id ?>">
      <input type="hidden" name="proimg2" value="<?php echo $row['proimg']; ?>">
      <button type="submit" class="btn btn-success btn-flat col-2" ><i class="fas fa-save "></i>  บันทึก </button>
      <button type="button"  onclick="window.location='promotion.php'" class="btn btn-danger btn-flat col-2" name=""> <i class="fas fa-window-close "></i> ยกเลิก </button>
       <br>
        <br>
      </div> 
      </form>          






        </div>


      </div>
        
    </div>
    
    </section>
    
    
