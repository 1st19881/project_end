<title>แก้ไขหอพัก  </title>

<?php

error_reporting( error_reporting() & ~E_NOTICE );

include('../backend/condb.php'); 
$p_id = $_GET["ID"];

$sql = "SELECT p.*,t.type_name
FROM tbl_dormitory as p 
INNER JOIN tbl_type as t ON p.type_id = t.type_id
WHERE p.p_id ='$p_id'
ORDER BY p.type_id asc";
$result2 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);


$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);


?>
<!-- Main content -->
<section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-edit"></i> แก้ไขหอพัก<label style="color: red;">*</label></h3>
      </div>
      <br>
      <div class="card-body">
      <form  name="adddormitory" action="form_edit_dormitory_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-row">
            <div class="col-6">
            <label for=""><h5>ชื่อหอพัก</h5></label>
            <input type="text"  name="p_name" class="form-control" required placeholder="ชื่อหอพัก" value="<?php echo $row['p_name']; ?>" />
        </div>
        <div class="col-6">
            <label for=""><h5>ประเภทหอพัก</h5></label>
            <select name="type_id" class="form-control" required>
              <option value="<?php echo $row["type_id"];?>">
                <?php echo $row["type_name"]; ?>
              </option>
              <option value="type_id">ประเภทหอพักทั้งหมด</option>
              <?php foreach($result as $results){?>
              <option value="<?php echo $results["type_id"];?>">
                <?php echo $results["type_name"]; ?>
              </option>
              <?php } ?>
            </select>
      </div>
        <div class="col-12">
       <label for=""> <p> <h5>รายละเอียด</h5> </p></label>
        <textarea  name="detail" rows="5" class="form-control" cols="60" id="detail"><?php echo $detail;  ?></textarea>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5>สิ่งอำนวยความสะดวก</h5> </p></label>
       <textarea  name="detail_Facilities" rows="5" cols="60" id="detail1"><?php echo $detail_Facilities;  ?></textarea>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5>ข้อมูลค่าบริการ</h5> </p></label>
       <textarea  name="detail_service" rows="5" cols="60" id="detail2"><?php echo $detail_service;  ?></textarea>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5>ข้อมูลติดต่อ</h5> </p></label>
       <textarea  name="detail_contac" rows="5" class="form-control" cols="60" id="detail3"><?php echo $detail_contac;  ?></textarea>
       <br>
        <br>
      </div>
        <div class="col-3">
        <label for=""><h5>ภาพหอพัก1</h5></label>
            <input type="file" name="p_img" id="p_img" class="form-control" >
            <img class="img-thumbnail  shadow-sm " class="img"
            src="../backend/p_imghome/<?php echo $row['p_img'];?>" width="200px">
        </div>  
        <div class="col-3">
        <label for=""><h5>ภาพหอพัก2</h5></label>
        <input type="file" name="p_img2" id="p_img2" class="form-control"  >
        <img class="img-thumbnail  shadow-sm " class="img"
            src="../backend/p_imghome/<?php echo $row['p_img2'];?>" width="200px">
        </div>  
        <div class="col-3">
        <label for=""><h5>ภาพหอพัก3</h5></label>
        <input type="file" name="p_img3" id="p_img3" class="form-control"  >
        <img class="img-thumbnail  shadow-sm " class="img"
            src="../backend/p_imghome/<?php echo $row['p_img3'];?>" width="200px">
        </div>
        <div class="col-3">
        <label for=""><h5>ภาพหอพัก4</h5></label>
        <input type="file" name="p_img4" id="p_img4" class="form-control"  >
        <img class="img-thumbnail  shadow-sm " class="img"
            src="../backend/p_imghome/<?php echo $row['p_img4'];?>" width="200px">
        <br>
        <br>
        <br>
        </div>            
      <div class="col-12">
      <label for="">แผนที่หอพัก</label>   &nbsp;&nbsp;<span class="badge badge-pill badge-warning text-sm"><a href="https://map.longdo.com/" target="_blank" style="color: white;"><i class="fas fa-map-marker-alt text-danger"></i> longdo map</a></span> <span class="badge badge-pill badge-dark text-sm" data-toggle="modal" data-target="#modaldetail1"><i class="far fa-hand-point-right text-danger"></i> ตัวอย่างคลิก</span>
        <textarea name="p_link" id="" class="form-control" cols="30" rows="5"><?php echo $row['p_link'];?></textarea>
       <br>
        <br>
      </div>  
      <div class="form-row">
      <div class="col-6">
      <label for=""><h5>ราคา ฿</h5></label>
        <input type="text"  name="price" class="form-control" value="<?php echo $row['price'];?>" required placeholder=" ราคา" />
        </div>
        <div class="col-6">
      <label for=""><h5>หน่วย</h5></label>
      <select class="custom-select form-control" id="inlineFormCustomSelectPref"name="unit">
           <option value="<?php echo $row["unit"];?>">
          <?php echo $row["unit"];?>
          </option>
          <option  >กรุณาเลือกหน่วยราคา</option>
          <option name="unit" value="เดือน">เดือน</option>
          <option name="unit" value="เทอม">เทอม</option>
          <option name="unit" value="วัน">วัน</option>
      </select>
        </div>
      </div>
      <div class="col-6">
      <label for=""><h5>ป้ายกำกับ #</h5></label>
        <input type="text"  name="tag_name" class="form-control" required placeholder="เช่น ( หอพัก1 , หอพัก2 , หอพัก3 )" value="<?php echo $row['tag_name']; ?>" />
       <br>
        <br>
      </div>  
      <div class="col-12 text-center">
      <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
      <input type="hidden" name="p_id" value="<?php echo $p_id; ?>">
      <input type="hidden" name="p_img21" value="<?php echo $row['p_img']; ?>">
      <input type="hidden" name="p_img22" value="<?php echo $row['p_img2']; ?>">
      <input type="hidden" name="p_img23" value="<?php echo $row['p_img3']; ?>">
      <input type="hidden" name="p_img24" value="<?php echo $row['p_img4']; ?>">
      <div class="d-flex justify-content-center">
      <input type="hidden"name="member_id" value="<?php echo $member_id ?>">
      <button type="submit" class="btn btn-success btn-flat col-2" ><i class="fas fa-save"></i> บันทึก </button>
      <button type="button"  onclick="window.location='dormitory.php'" class="btn btn-danger btn-flat col-2" name=""> <i class="fas fa-window-close"></i> ยกเลิก </button>
       <br>
        <br>
      </div>
      </div>
      </div> 
      </form>          



<?php include('modal_test.php');?>


        </div>


      </div>
        
    </div>
    </section>    

    
