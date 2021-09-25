<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$a_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_admin WHERE a_id='$a_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<!-- Main content -->
<section class="content">
    <div class="card-body p-1">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 mt-5">
                <div class="card shadow">
                    <!-- action ด้วยค่าว่าง "" คือการส่ง Form นี้เข้าสู่หน้าปัจจุบัน -->
                    <!-- method POST คือการส่ง Form ให้อยู่ในรูปของ POST เพื่อส่งข้อมูล Form ในพื้นหลังการทำงาน -->
                    <form name="admin" action="admin_form_edit_db.php" method="POST">
                        <div class="card-header text-center bd-white">
                            <h3 class="card-title text-bold">แก้ไขผู้ดูแลระบบ</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="a_user" name="a_user"
                                        placeholder="username" pattern="^[a-zA-Z0-9]+$" value="<?=$a_user; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="a_pass" name="a_pass"
                                        placeholder="password" value="<?=$a_pass; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="a_name" name="a_name"
                                        placeholder="ชื่อ-สกุล" value="<?=$a_name; ?>" required>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="a_id" value="<?php echo $a_id; ?>">
                        <input type="hidden" name="a_level" value="admin">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-flat col-2"><i class="fas fa-save"></i>
                                บันทึก</button>
                            <a class="btn btn-danger btn-flat col-2" href="admin.php"><i
                                    class="fas fa-window-close"></i> ยกเลิก</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- /.col -->
    </div>
</section>
<!-- /.content -->