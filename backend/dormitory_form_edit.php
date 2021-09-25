<title>แก้ไขหอพัก  </title>
<?php include('header.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$p_id = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT p.*,t.type_name
FROM tbl_dormitory as p 
INNER JOIN tbl_type as t ON p.type_id = t.type_id
WHERE p.p_id = '$p_id'
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
      <form  name="adddormitory" action="dormitory_form_edit_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-row">
            <div class="col-6">
            <label for="">ชื่อหอพัก</label>
            <input type="text"  name="p_name" class="form-control" required placeholder="ชื่อหอพัก" value="<?php echo $row['p_name']; ?>" />
        </div>
        <div class="col-6">
            <label for="">ประเภทหอพัก</label>
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
       <label for=""> <p> <h5 class="text-bold">ข้อมูลติดต่อ</h5> </p></label>
        <textarea  name="detail" rows="5" cols="60" id="detail"><?php echo $detail;  ?></textarea>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5 class="text-bold">สิ่งอำนวยความสะดวก</h5> </p></label>
       <textarea  name="detail_Facilities" rows="5" cols="60" id="detail1"><?php echo $detail_Facilities;  ?></textarea>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5 class="text-bold">ข้อมูลค่าบริการ</h5> </p></label>
       <textarea  name="detail_service" rows="5" cols="60" id="detail2"><?php echo $detail_service;  ?></textarea>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5 class="text-bold">ข้อมูลติดต่อ</h5> </p></label>
       <textarea  name="detail_contac" rows="5" cols="60" id="detail3"><?php echo $detail_contac;  ?></textarea>
       <br>
        <br>
        <br>
      </div>
        <div class="col-3">
        <label for="">ภาพหอพัก1</label>
            <input type="file" name="p_img" id="p_img" class="form-control" >
            <img class="img-thumbnail  shadow-sm " class="img"
            src="p_imghome/<?php echo $row['p_img'];?>" width="200px">
        </div>  
        <div class="col-3">
        <label for="">ภาพหอพัก2</label>
        <input type="file" name="p_img2" id="p_img2" class="form-control"  >
        <img class="img-thumbnail  shadow-sm " class="img"
            src="p_imghome/<?php echo $row['p_img2'];?>" width="200px">
        </div>  
        <div class="col-3">
        <label for="">ภาพหอพัก3</label>
        <input type="file" name="p_img3" id="p_img3" class="form-control"  >
        <img class="img-thumbnail  shadow-sm " class="img"
            src="p_imghome/<?php echo $row['p_img3'];?>" width="200px">
        </div>
        <div class="col-3">
        <label for="">ภาพหอพัก4</label>
        <input type="file" name="p_img4" id="p_img4" class="form-control"  >
        <img class="img-thumbnail  shadow-sm " class="img"
            src="p_imghome/<?php echo $row['p_img4'];?>" width="200px">
            <br>
        <br><br>
        </div>            
      <div class="col-12">
      <label for="">แผนที่หอพัก</label>   &nbsp;&nbsp;<span class="badge badge-pill badge-warning text-sm"><a href="https://map.longdo.com/" target="_blank" style="color: white;"><i class="fas fa-map-marker-alt text-danger"></i> longdo map</a></span> <span class="badge badge-pill badge-dark text-sm" data-toggle="modal" data-target="#modaldetail1"><i class="far fa-hand-point-right text-danger"></i> ตัวอย่างคลิก</span>
      <textarea name="p_link" class="form-control" id="" cols="30" rows="10"><?php echo $row['p_link']; ?></textarea>
       <br>
        <br>
      </div>  
      <div class="form-row">
      <div class="col-6">
      <label for="">ราคา ฿</label>
        <input type="text"  name="price" class="form-control" value="<?php echo $row['price'];?>" required placeholder=" ราคา" />
        </div>
        <div class="col-6">
      <label for="">หน่วย</label>
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
      <label for="">ป้ายกำกับ #</label>
        <input type="text"  name="tag_name" class="form-control" required placeholder="เช่น ( หอพัก1 , หอพัก2 , หอพัก3 )" value="<?php echo $row['tag_name']; ?>" />
       <br>
        <br>
      </div>  
      <div class="col-12 text-center">
      <input type="hidden" name="p_id" value="<?php echo $p_id; ?>">
      <input type="hidden" name="p_img21" value="<?php echo $row['p_img']; ?>">
      <input type="hidden" name="p_img22" value="<?php echo $row['p_img2']; ?>">
      <input type="hidden" name="p_img23" value="<?php echo $row['p_img3']; ?>">
      <input type="hidden" name="p_img24" value="<?php echo $row['p_img4']; ?>">
      <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-success btn-flat col-2" name="btnadd"> <i class="fas fa-save"></i> บันทึก </button>
      <button type="button"  onclick="window.location='dormitory.php'" class="btn btn-danger btn-flat col-2" name=""><i class="fas fa-window-close"></i>  ยกเลิก </button>
      </div>
       <br>
        <br>
      </div> 
      </form>          


      <?php include('modal_test.php'); ?>



        </div>


      </div>
        
    </div>
    

    <script src="../ckeditor/ckeditor.js"></script>
<script>
      CKEDITOR.replace( 'detail' );
</script>
<script>
      CKEDITOR.replace( 'detail1' );
</script>
<script>
      CKEDITOR.replace( 'detail2' );
</script>
<script>
      CKEDITOR.replace( 'detail3' );
</script>


<?php include('footer.php'); ?>