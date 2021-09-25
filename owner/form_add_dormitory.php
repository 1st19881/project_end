<?php
//เชื่อมต่อ database:
include('../backend/condb.php');
include('../js.php') ;

$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);

?>


<section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-edit"></i> เพิ่มหอพัก </h3>
      </div>
      <br>
      <div class="card-body">
      <form  name="adddormitory" action="form_add_dormitory_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-row">
            <div class="col-6">
            <label for=""><h5> <label style="color: red;">*</label> ชื่อหอพัก</h5></label>
            <input type="text"  name="p_name" class="form-control" required placeholder="-กรุณากรอกชื่อหอพัก" />
        </div>
        <div class="col-6">
            <label for=""> <h5> <label style="color: red;">*</label> ชื่อประเภทหอพัก</h5></label>
            <select name="type_id" class="form-control" required>
              <option value="type_id">ประเภทหอพัก</option>
              <?php foreach($result as $results){?>
              <option value="<?php echo $results["type_id"];?>">
                <?php echo $results["type_name"]; ?>
              </option>
              <?php } ?>
            </select>
      </div>
        <div class="col-12">
       <label for=""> <p> <h5><label style="color: red;">*</label> รายละเอียด</h5> </p></label>
        <textarea  name="detail" rows="5" class="form-control" cols="60" id="detail" placeholder="-กรุณากรอกรายละเอียดของหอพัก"></textarea>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5><label style="color: red;">*</label> สิ่งอำนวยความสะดวก</h5> </p></label>
       <textarea  name="detail_Facilities	" rows="5" cols="60" id="detail1" ></textarea>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5><label style="color: red;">*</label> ข้อมูลค่าบริการ</h5> </p></label>
       <textarea  name="detail_service" rows="5" cols="60" id="detail2"></textarea>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5><label style="color: red;">*</label> ข้อมูลติดต่อ</h5> </p></label>
       <textarea  name="detail_contac" class="form-control" rows="5" cols="60" id="detail3"placeholder="-กรุณากรอกรายละเอียดข้อมูลติดต่อ"></textarea>
       <br>
        <br>
      </div>
        <div class="col-3">
        <label for=""> <h5>ภาพหอพัก1</h5></label>
            <input type="file" name="p_img" id="p_img" class="form-control" >
        </div>  
        <div class="col-3">
        <label for=""> <h5>ภาพหอพัก2</h5></label>
        <input type="file" name="p_img2" id="p_img2" class="form-control"  >
        </div>  
        <div class="col-3">
        <label for=""> <h5>ภาพหอพัก3</h5></label>
        <input type="file" name="p_img3" id="p_img3" class="form-control"  >
        </div>
        <div class="col-3">
        <label for=""> <h5>ภาพหอพัก4</h5></label>
        <input type="file" name="p_img4" id="p_img4" class="form-control"  >
        <br>
        <br>
        </div>            
      <div class="col-12">
      <label for=""><label style="color: red;">*</label> แผนที่หอพัก</label>   &nbsp;&nbsp;<span class="badge badge-pill badge-warning text-sm"><a href="https://map.longdo.com/" target="_blank" style="color: white;"><i class="fas fa-map-marker-alt text-danger"></i> longdo map</a></span> <span class="badge badge-pill badge-dark text-sm" data-toggle="modal" data-target="#modaldetail1"><i class="far fa-hand-point-right text-danger"></i> ตัวอย่างคลิก</span>
      <textarea name="p_link" class="form-control" id="" cols="30" rows="10"></textarea>
       <br>
      </div>  
      <div class="form-row">
      <div class="col-md-4 mb-2">
      <label for=""> <h5><label style="color: red;">*</label> ราคา ฿</h5></label>
        <input type="number" min="0"  name="price" class="form-control" required placeholder=" กรอกราคาตัวเลข 0-9" />
        </div>
        <div class="col-md-4 mb-2">
      <label for=""> <h5><label style="color: red;">*</label> หน่วย</h5></label>
      <select class="custom-select form-control" id="inlineFormCustomSelectPref"name="unit">
          <option  selected>กรุณาเลือกหน่วยราคา</option>
          <option  value="เดือน">เดือน</option>
          <option  value="เทอม">เทอม</option>
          <option  value="วัน">วัน</option>
      </select>
        </div>
      <div class="col-md-4 mb-2">
      <label for=""> <h5><label style="color: red;">*</label> ป้ายกำกับ #</h5> <small></small></label>
        <input type="text"  name="tag_name" class="form-control" required placeholder="เช่น ( หอพัก1 , หอพัก2 , หอพัก3 )" />
       <br>
        <br>
      </div>
      </div>  
      <div class="col-12 d-flex justify-content-center">
        <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
      <button type="submit" class="btn btn-success btn-flat col-2" name="btnadd"> <i class="fas fa-save "></i> บันทึก </button>
      <button type="button"  onclick="window.location='dormitory.php'" class="btn btn-danger btn-flat col-2" name=""> <i class="fas fa-window-close  "></i> ยกเลิก </button>
      </div>
       <br>
        <br> 
      </form>          



      <?php include('modal_test.php'); ?>


        </div>


      </div>
        
    </div>
</section>  

 

