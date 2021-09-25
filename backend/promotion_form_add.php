<section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-edit"></i> เพิ่มโปรโมชั่น<label style="color: red;">*</label></h3>
      </div>
      <br>
      <div class="card-body">
      <form   action="promotion_form_add_db.php" method="post" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-row">
            <div class="col-12">
            <label for=""><h5>ชื่อโปรโมชั่น</h5></label>
            <input type="text"  name="pro_name" class="form-control" required placeholder="ชื่อโปรโมชั่น" />
        </div>
        <div class="col-12">
       <label for=""> <p> <h5>รายละเอียดโปรโมชั่น</h5> </p></label>
        <textarea  name="pro_detail" rows="5" cols="60" id="detail" ></textarea>
        <br>
        </div>
        <div class="col-6">
      <label for=""><h5>ราคา ฿</h5></label>
        <input type="text"  name="price" class="form-control" required placeholder="ราคา" />
       <br>
        <br>
      </div>
      <div class="col-6">
      <label for=""><h5>ราคาโปรโมชั่น ฿</h5></label>
        <input type="text"  name="pro_price" class="form-control" required placeholder="ราคาโปรโมชั่น" />
       <br>
        <br>
      </div> 
      <div class="col-6">
      <label for=""><h5>วันที่เริ่ม</h5></label>
        <input type="date"  name="startdate" class="form-control" required placeholder="ราคา" />
       <br>
        <br>
      </div>
      <div class="col-6">
      <label for=""><h5>วันที่สิ้นสุด</h5></label>
        <input type="date"  name="enddate" class="form-control" required placeholder="ราคาโปรโมชั่น" />
       <br>
        <br>
      </div>
      <div class="col-12">
       <label for=""> <p> <h5>ข้อมูลติดต่อ</h5> </p></label>
        <textarea  name="Detail_contac" rows="5" cols="60" id="detail1"></textarea>
        <br>
        </div>
        <div class="col-12">
       <label for=""> <p> <h5>สิ่งอำนวยความสะดวก</h5> </p></label>
        <textarea  name="detail_Facilities" rows="5" cols="60" id="detail2"></textarea>
        <br>
        </div>
        <div class="col-12">
        <label for=""><h5>ภาพโปรโมชั่น</h5></label>
        <input type="file" name="proimg" class="form-control" />
        </div>  
        </div>
        <br>           
      <div class="d-flex justify-content-center">
      <input type="hidden"name="member_id" value="<?php echo $member_id ?>">
      <button type="submit" class="btn btn-success btn-flat col-2" > <i class="fas fa-save"></i>  บันทึก </button>
      <button type="button"  onclick="window.location='promotion.php'" class="btn btn-danger btn-flat col-2" name=""> <i class="fas fa-window-close"></i>  ยกเลิก </button>
       <br>
        <br>
      </div> 
      </form>          






        </div>


      </div>
        
    </div>

    

      <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
  <script>
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace('detail');
  function CKupdate() {
      for (instance in CKEDITOR.instances)
          CKEDITOR.instances[instance].updateElement();
  }
</script>
<script>
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace('detail1');
  function CKupdate() {
      for (instance in CKEDITOR.instances)
          CKEDITOR.instances[instance].updateElement();
  }
</script>
<script>
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace('detail2');
  function CKupdate() {
      for (instance in CKEDITOR.instances)
          CKEDITOR.instances[instance].updateElement();
  }
</script>

<!-- <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script> -->


<?php include('footer.php'); ?>