<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database
$member_id = $_REQUEST["ID"];
// query ข้อมูลss
$sql = "SELECT * FROM tbl_member WHERE member_id='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>

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
    <div class="card-body p-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <div class="card w-auto h-auto">
                            <div class="card-body ">
                                <center>
                                    <h3>ข้อมูลส่วนตัว </h3>
                                </center>
                                <br>
                                <center>
                                    <img class="img-thumbnail  shadow-sm " class="img2"
                                        src="../m_img/<?php echo $row['m_img'];?>" width="150px">
                                </center>
                                <br>
                                <form action="member_form_edit_db.php" method="POST" class="form-horizontal"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
                                    <input type="hidden" name="m_img2" value="<?php echo $row['m_img']; ?>">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">ระดับผู้ใช้งาน</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="level_m">
                                            <option name="level_m"><?php echo $row['level_m'];?></option>
                                            <option name="level_m" value="ผู้ดูแลระบบ">ผู้ดูแลระบบ</option>
                                            <option name="level_m" value="สมาชิก">สมาชิก</option>
                                            <option name="level_m" value="เจ้าของหอพัก">เจ้าของหอพัก</option>
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">ชื่อผู้ใช้</label>
                                            <input type="text" name="m_user" class="form-control" id=""
                                                placeholder="ตัวอย่าง 1st19881 หรือ abcd1234" value="<?php  echo $row['m_user']; ?>"
                                            >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">รหัสผ่าน</label>
                                            <input type="password" name="m_pass" class="form-control" id=""
                                                placeholder="รหัสผ่าน" value="<?php  echo $row['m_pass']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">ชื่อ</label>
                                            <input type="text" name="m_name" class="form-control" id=""
                                                placeholder="ชื่อ" value="<?php  echo $row['m_name']; ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">นามสกุล</label>
                                            <input type="text" name="m_last" class="form-control" id=""
                                                placeholder="นามสกุล" value="<?php  echo $row['m_last']; ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">เพศ</label>
                                            <input type="text" name="m_sex" class="form-control"
                                                value="<?php echo $row['m_sex']; ?> ">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">วัน/เดือน/ปี</label>
                                            <input type="date" name="m_date" class="form-control" id=""
                                                placeholder="นามสกุล" value="<?php echo $row['m_date']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">เบอร์โทร</label>
                                            <input type="text" name="m_tel" class="form-control" id=""
                                                placeholder="เบอร์โทร" value="<?php echo $row['m_tel']; ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">อีเมล์</label>
                                            <input type="email" name="m_email" class="form-control" id="" placeholder=""
                                                value="<?php echo $row['m_email']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ที่อยู่</label>
                                        <input type="text" name="m_address" class="form-control" id=""
                                            placeholder="ที่อยู่" value="<?php echo $row['m_address']; ?>" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="">รูปภาพ</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="m_img" name="m_img"
                                                onchange="readURL(this);">
                                            <label class="custom-file-label" for="file"> เลือกไฟล์ใหม่</label>
                                        </div>
                                        <center> <img class="mt-3" id="blah" src="../img/upload1.png" alt="your image" width="150px" />
                                        </center>
                                        <br>
                                    </div>
                                    <br>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success  btn-flat  col-md-3"><i class="fas fa-save "></i> บันทึก</button>
                                        <button class="btn btn-danger btn-flat  col-md-3" type="button"
                                            onclick="window.location='member.php'"><i class="fas fa-arrow-alt-circle-left"></i> กลับ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
        </div>

    </div>
</section>
<!-- /.content -->