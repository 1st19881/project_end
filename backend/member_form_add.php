<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
<!-- Main content -->
<section class="content">
    <div class="card w-auto">
        <div class="card-header text-center bd-white">
            <h3 class="card-title text-bold"><i class="fas fa-user-plus"></i> เพิ่มข้อมูลสมาชิก</h3>
        </div>
        <div class="card-body">
            <br>
            <form action="member_form_add_db.php" method="POST" class="form-horizontal " enctype="multipart/form-data">
                <div class="form-group">
                    <label  for="">ชื่อผู้ใช้</label>
                    <input type="text" name="m_user" class="form-control" id="" placeholder="*ตัวอย่างเช่น 1st19 หรือ abcd1234" value="" pattern="[a-zA-Z0-9]+" title="ต้องมีตัวเลข 0-9 และ ตัวพิมพ์ใหญ่ A_Z และ ตัวพิมพ์เล็ก a-z">
                </div>
                <div class="form-group">
                    <label for="">รหัสผ่าน</label>
                    <input type="password" name="m_pass" class="form-control" id="" placeholder="*ตัวอย่าง เช่น123456789aa  " value="" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">ชื่อ</label>
                        <input type="text" name="m_name" class="form-control" id="" placeholder="ชื่อ" value=""
                            required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">นามสกุล</label>
                        <input type="text" name="m_last" class="form-control" id="" placeholder="นามสกุล" value=""
                            required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">เพศ</label>
                        <select id="" name="m_sex" class="form-control">
                            <option>เพศหญิง</option>
                            <option>เพศชาย</option>
                            <option>อื่นๆๆ</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">วัน/เดือน/ปี</label>
                        <input type="date" name="m_date" class="form-control" id="" placeholder="นามสกุล" value=""
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">ที่อยู่</label>
                    <input type="text" name="m_address" class="form-control" id="" placeholder="ที่อยู่" value=""
                        required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">เบอร์โทร</label>
                        <input type="text" name="m_tel" class="form-control" id="" placeholder="เบอร์โทร" value=""pattern="\d{10}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">อีเมล์</label>
                        <input type="email" name="m_email" class="form-control" id="" placeholder="" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required >
                    </div>
                </div>
                <div class="form-group">
                    <label for="">รูปภาพ</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="m_img" name="m_img" onchange="readURL(this);">
                        <label class="custom-file-label" for="file"> เลือกไฟล์ใหม่</label>
                    </div>
                    <br><br>

                    <center>   <img id="blah" src="../img/upload1.png" alt="your image" width="150px" /></center>
                 
                </div>
                <br>
                <div class="form-group">
                    <label for="">ระดับ</label>
                    <input type="radio" name="level_m" value="สมาชิก"> สมาชิก
                    <input type="radio" name="level_m" value="เจ้าของหอพัก"> เจ้าของหอพัก
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-flat col-2"><i class="fas fa-save"></i> บันทึก</button><br>
                    <button class="btn btn-danger btn-flat col-2" type="button"
                        onclick="window.location='member.php'"><i class="fas fa-window-close"></i> ยกเลิก</button>
                </div>

            </form>
        </div>
    </div>
    <br>
</section>
<!-- /.content -->

<?php include('footer.php'); ?>