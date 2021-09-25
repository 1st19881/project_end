<?php 
session_start();
include('h.php');
include('navbar.php');
include('../backend/condb.php');


// เทสการส่งข้อมูล จาก session
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';


// เทสการส่งข้อมูลเข้ามาใน array
// echo '<pre>';
// print_r($row);
// echo '</pre>';



$member_id = $_SESSION['member_id'];

$sql="SELECT * FROM tbl_member WHERE member_id=$member_id ";
$resault = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($resault);


// echo $sql;
// exit;

?>
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


<title>ข้อมูลส่วนตัว</title>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <div class="card w-auto h-auto" style="margin-top:5rem;" data-aos="fade-right" data-aos-duration="1000">
                    <div class="card-body ">
                        <center>
                            <h3>ข้อมูลส่วนตัว :</h3>
                        </center>
                        <br>
                        <center><img class="img-thumbnail  shadow-sm " class="img2"
                                src="../m_img/<?php echo $row['m_img'];?>" width="150px"></center> <br>
                        <form action="form_profile.php" method="POST" class="form-horizontal"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">ระดับผู้ใช้งาน</label>
                                <input type="text" name="level_m" class="form-control col-6" id=""
                                    placeholder="ระดับผู้ใช้งาน" value="<?php echo $row['level_m'] ?>" required
                                    readonly>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">ชื่อผู้ใช้</label>
                                    <input type="text" name="m_name" class="form-control" id="" placeholder="ชื่อผู้ใช้"
                                        value="<?php  echo $row['m_user']; ?>" required readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">รหัสผ่าน</label>
                                    <input type="password" name="m_pass" class="form-control" id=""
                                        placeholder="รหัสผ่าน" value="<?php  echo $row['m_pass']; ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">ชื่อ</label>
                                    <input type="text" name="m_name" class="form-control" id="" placeholder="ชื่อ"
                                        value="<?php  echo $row['m_name']; ?>" required readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">นามสกุล</label>
                                    <input type="text" name="m_last" class="form-control" id="" placeholder="นามสกุล"
                                        value="<?php  echo $row['m_last']; ?>" required readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">เพศ</label>
                                    <input type="text" name="m_sex" class="form-control"
                                        value="<?php echo $row['m_sex']; ?> " readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">วัน/เดือน/ปี</label>
                                    <input type="date" name="m_date" class="form-control" id="" placeholder="นามสกุล"
                                        value="<?php echo $row['m_date']; ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">เบอร์โทร</label>
                                    <input type="text" name="m_tel" class="form-control" id="" placeholder="เบอร์โทร"
                                        value="<?php echo $row['m_tel']; ?>" required readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">อีเมล์</label>
                                    <input type="email" name="m_email" class="form-control" id="" placeholder=""
                                        value="<?php echo $row['m_email']; ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">ที่อยู่</label>
                                <input type="text" name="m_address" class="form-control" id="" placeholder="ที่อยู่"
                                    value="<?php echo $row['m_address']; ?>" required readonly>
                            </div>
                            <br>
                          <div class="d-flex justify-content-center">
                          <button type="submit" class="btn btn-success col-md-4 btn-flat"data-aos="zoom-out-up" data-aos-duration="1000"><i class="fas fa-edit"></i> แก้ไข</button><br>
                            <button class="btn btn-danger  col-md-4 btn-flat" type="button"
                                onclick="window.location='owner.php'" data-aos="zoom-out-up" data-aos-duration="1000"><i class="fas fa-arrow-circle-left"></i> กลับ</button>
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

<?php include('../js.php'); ?>

<script>
  AOS.init();
</script>
