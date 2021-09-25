<title>เพิ่มหอพัก</title>
<?php


// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// exit;

$member_id = $_SESSION['user_id'];


include('condb.php'); 

$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);

?>


<section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-edit"></i> เพิ่มหอพัก<label style="color: red;">*</label></h3>
      </div>
      <br>
      <div class="card-body text-bold">
      <form  name="adddormitory" action="dormitory_form_add_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-row">
            <div class="col-6">
            <label for="">ชื่อหอพัก</label>
            <input type="text"  name="p_name" class="form-control" required placeholder="-กรุณากรอกชื่อหอพัก" />
        </div>
        <div class="col-6">
        <label for="">ชื่อประเภทหอพัก</label>
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
       <label for=""> <p> <h5 class="text-bold">ข้อมูลติดต่อ</h5> </p></label>
        <textarea  name="detail" rows="5" cols="60" id="detail"></textarea>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5 class="text-bold">สิ่งอำนวยความสะดวก</h5> </p></label>
       <textarea  name="detail_Facilities	" rows="5" cols="60" id="detail1"></textarea>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5 class="text-bold">ข้อมูลค่าบริการ</h5> </p></label>
       <textarea  name="detail_service" rows="5" cols="60" id="detail2"></textarea>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5 class="text-bold">ข้อมูลติดต่อ</h5> </p></label>
       <textarea  name="detail_contac" class="form-control" rows="5" cols="60" id="detail3"placeholder="-กรุณากรอกรายละเอียดข้อมูลติดต่อ"></textarea>
       <br>
        <br>
      </div>
        <div class="col-3">
        <label for="">ภาพหอพัก1</label>
            <input type="file" name="p_img" id="p_img" class="form-control" >
        </div>  
        <div class="col-3">
        <label for="">ภาพหอพัก2</label>
        <input type="file" name="p_img2" id="p_img2" class="form-control"  >
        </div>  
        <div class="col-3">
        <label for="">ภาพหอพัก3</label>
        <input type="file" name="p_img3" id="p_img3" class="form-control"  >
        </div>
        <div class="col-3">
        <label for="">ภาพหอพัก4</label>
        <input type="file" name="p_img4" id="p_img4" class="form-control"  >
        <br>
        <br>
        </div>            
      <div class="col-12">
      <label for="">แผนที่หอพัก</label>   &nbsp;&nbsp;<span class="badge badge-pill badge-warning text-sm"><a href="https://map.longdo.com/" target="_blank" style="color: white;"><i class="fas fa-map-marker-alt text-danger"></i> longdo map</a></span> <span class="badge badge-pill badge-dark text-sm" data-toggle="modal" data-target="#modaldetail1"><i class="far fa-hand-point-right text-danger"></i> ตัวอย่างคลิก</span>
      <textarea name="p_link" class="form-control" id="" cols="30" rows="10"></textarea>
       <br>
        <br>
      </div>  
      <div class="form-row">
      <div class="col-6">
      <label for="">ราคา ฿</label>
        <input type="text"  name="price" class="form-control" required placeholder=" กรอกราคาตัวเลข 0-9" />
        </div> 
        <div class="col-6">
      <label for="">หน่วย</label>
      <select class="custom-select form-control" id="inlineFormCustomSelectPref"name="unit">
          <option  selected>กรุณาเลือกหน่วยราคา</option>
          <option name="unit" value="เดือน">เดือน</option>
          <option name="unit" value="เทอม">เทอม</option>
          <option name="unit" value="วัน">วัน</option>
      </select>
        </div>
      </div>
      <br>
      <br>
      <div class="col-6">
      <label for="">ป้ายกำกับ # <small></small></label>
        <input type="text"  name="tag_name" class="form-control" required placeholder="เช่น ( หอพัก1 , หอพัก2 , หอพัก3 )" />
       <br>
        <br> 
      </div> 
        <div class="col-12">
        <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
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
      
    

    





<?php include('footer.php'); ?>