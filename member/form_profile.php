<?php 
session_start();
include('h.php');
include('navbar.php');
include('../backend/condb.php');



$member_id = $_SESSION['member_id'];

$sql="SELECT * FROM tbl_member WHERE member_id=$member_id ";
$resault = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($resault);


// echo $sql;
// exit;

?>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

<style>
.card-header {
    margin-top: 2.5rem;
}

.content {
    margin-top: 5rem;
}
.btn{
    border-radius:0px;
}
</style>

<title>แก้ไขข้อมูลส่วนตัว</title>


 <!-- Main content -->
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <div class="card w-75 h-50" style="margin-top:5rem;">
                    <div class="card-body ">
                        <center>
                            <h3>ข้อมูลส่วนตัว :</h3>
                        </center>
                        <br>
                        <center>
                        <img class="img-thumbnail  shadow-sm " class="img2"
                            src="../m_img/<?php echo $row['m_img'];?>" width="100">
                        </center>
                         <br>
                        <form action="form_profile_edit_db.php" method="POST" class="form-horizontal"enctype="multipart/form-data">
                        <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
                        <input type="hidden" name="m_img2" value="<?php echo $row['m_img']; ?>">
                            <div class="form-group">
                                <label for="">ระดับผู้ใช้งาน</label>
                                <input type="text" name="level_m" class="form-control col-6" id=""
                                    placeholder="ระดับผู้ใช้งาน" value="<?php echo $row['level_m'] ?>" required
                                    readonly>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">ชื่อผู้ใช้</label>
                                    <input type="text" name="m_user" class="form-control" id="" placeholder="ชื่อผู้ใช้"
                                        value="<?php  echo $row['m_user']; ?>" required  readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">รหัสผ่าน</label>
                                    <input type="password" name="m_pass" class="form-control" id=""
                                        placeholder="รหัสผ่าน" value="<?php  echo $row['m_pass']; ?>" required >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">ชื่อ</label>
                                    <input type="text" name="m_name" class="form-control" id="" placeholder="ชื่อ"
                                        value="<?php  echo $row['m_name']; ?>" required >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">นามสกุล</label>
                                    <input type="text" name="m_last" class="form-control" id="" placeholder="นามสกุล"
                                        value="<?php  echo $row['m_last']; ?>" required >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">เพศ</label>
                                    <select id="" name="m_sex" class="form-control">
                                    <option><?php  echo $row['m_sex']; ?></option>
                                    <option>เพศหญิง</option>
                                    <option>เพศชาย</option>
                                    <option>อื่นๆๆ</option>
                                </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">วัน/เดือน/ปี</label>
                                    <input type="date" name="m_date" class="form-control" id="" placeholder="นามสกุล"
                                        value="<?php echo $row['m_date']; ?>" required >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">เบอร์โทร</label>
                                    <input type="text" name="m_tel" class="form-control" id="" placeholder="เบอร์โทร"
                                        value="<?php echo $row['m_tel']; ?>" required >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">อีเมล์</label>
                                    <input type="email" name="m_email" class="form-control" id="" placeholder=""
                                        value="<?php echo $row['m_email']; ?>" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">ที่อยู่</label>
                                <input type="text" name="m_address" class="form-control" id="" placeholder="ที่อยู่"
                                    value="<?php echo $row['m_address']; ?>" required >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">รูปภาพ</label>
                                <input type="file" accept="image/*" onchange="loadFile(event)">
                              <center>   <img src="../img/upload1.png" id="output" width="150px"/></center>
                             <br>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit"class="btn btn-success  btn-flat btn-flat col-md-3"><i class="fas fa-save"></i> บันทึก</button>
                                <button class="btn btn-danger  btn-flat col-md-3" type="button"onclick="window.location='profile.php'"><i class="fas fa-window-close  "></i> ยกเลิก</button>
                                <button class="btn btn-primary btn-flat btn-flat col-md-3" type="button"
                                onclick="window.location='member.php'"><i class="fas fa-arrow-circle-left"></i>  กลับ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
</div>

<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ระบบแนะนำค้นหาหอพัก 2021 devCS</p>
    </div>
    <!-- /.container -->
</footer>