<section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-edit"></i> เพิ่มโปรโมชั่น <label style="color: red;">*</label></h3>
      </div>
      <br>
      <div class="card-body">
      <form   action="form_promotion_add_db.php" method="post" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-row">
            <div class="col-12">
            <label for=""><h5><label style="color: red;">*</label> ชื่อโปรโมชั่น </h5></label>
            <input type="text"  name="pro_name" class="form-control" required placeholder="ชื่อโปรโมชั่น" />
        </div>
        <div class="col-12">
       <label for=""> <p> <h5><label style="color: red;">*</label> รายละเอียดโปรโมชั่น</h5> </p></label>
        <textarea  name="pro_detail" rows="5" cols="60" id="detail" ></textarea>
        <br>
        </div>
        <div class="col-6">
      <label for=""><h5><label style="color: red;">*</label> ราคา ฿ / บาท</h5></label>
        <input type="text"  name="price" class="form-control" required placeholder="ราคา" />
       <br>
        <br>
      </div>
      <div class="col-6">
      <label for=""><h5><label style="color: red;">*</label> ราคาโปรโมชั่น ฿</h5></label>
        <input type="text"  name="pro_price" class="form-control" required placeholder="ราคาโปรโมชั่น" />
       <br>
        <br>
      </div> 
      <div class="col-6">
      <label for=""><h5><label style="color: red;">*</label> วันที่เริ่ม</h5></label>
        <input type="date"  name="startdate" class="form-control" required placeholder="ราคา" />
       <br>
        <br>
      </div>
      <div class="col-6">
      <label for=""><h5><label style="color: red;">*</label> วันที่สิ้นสุด</h5></label>
        <input type="date"  name="enddate" class="form-control" required placeholder="ราคาโปรโมชั่น" />
       <br>
        <br>
      </div>
      <div class="col-12">
       <label for=""> <p> <h5><label style="color: red;">*</label> สิ่งอำนวยความสะดวก</h5> </p></label>
        <textarea  name="detail_Facilities" class="form-control" rows="5" cols="60" id="detail2" placeholder="-กรุณากรอกรายละเอียดสิ่งอำนวยความสะอาด"></textarea>
        <br>
        </div>
      <div class="col-12">
       <label for=""> <p> <h5><label style="color: red;">*</label> ข้อมูลติดต่อ</h5> </p></label>
        <textarea  name="Detail_contac" class="form-control" rows="5" cols="60" id="detail1"placeholder="-กรุณากรอกรายละเอียดข้อมูลติดต่อ"></textarea>
        <br>
        </div>
        <div class="col-12">
        <label for=""><h5><label style="color: red;">*</label> ภาพโปรโมชั่น <small class="text-danger"> ภาพขนาด 800 x 600 px</small></h5></label>
        <input type="file" name="proimg" class="form-control" />
        </div>  
        </div>
        <br>           
      <div class="d-flex justify-content-center">
      <input type="hidden"name="member_id" value="<?php echo $member_id ?>">
      <button type="submit" class="btn btn-success btn-flat col-2" ><i class="fas fa-save"></i> บันทึก </button>
      <button type="button"  onclick="window.location='promotion.php'" class="btn btn-danger btn-flat col-2" name=""> <i class="fas fa-window-close"></i> ยกเลิก </button>
       <br>
        <br>
      </div> 
      </form>          






        </div>


      </div>
        
    </div>
</section>   

   
