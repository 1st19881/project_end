<?php 
include('h.php');
include('backend/condb.php');
?>

<link rel="stylesheet" href="css/form_register.css">
<title>สมัครสมาชิก</title>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

<br>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <img class="img1" src="https://image.flaticon.com/icons/png/128/64/64572.png" alt="logo"
                                class="" width="15%"><br><br>
                            <h3>ลงทะเบียน สมาชิก :</h3><br>

                        </center>

                        <form action="form_register_db.php" method="POST" class="form-horizontal"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">ชื่อผู้ใช้</label>
                                <input type="text" name="m_user" class="form-control"  placeholder="ชื่อผู้ใช้"
                                    value="" required>
                            </div>
                            <div class="form-group">
                                <label for="">รหัสผ่าน</label>
                                <input type="password" name="m_pass" class="form-control"  placeholder="รหัสผ่าน"
                                    value="" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">ชื่อ</label>
                                    <input type="text" name="m_name" class="form-control"  placeholder="ชื่อ"
                                        value="" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">นามสกุล</label>
                                    <input type="text" name="m_last" class="form-control"  placeholder="นามสกุล"
                                        value="" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">เพศ</label>
                                    <select  name="m_sex" class="form-control">
                                        <option>เพศ</option>
                                        <option>เพศหญิง</option>
                                        <option>เพศชาย</option>
                                        <option>อื่นๆๆ</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">วัน/เดือน/ปี</label>
                                    <input type="date" name="m_date" class="form-control"  placeholder="นามสกุล"
                                        value="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">ที่อยู่</label>
                                <input type="text" name="m_address" class="form-control"  placeholder="ที่อยู่"
                                    value="" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">เบอร์โทร</label>
                                    <input type="text" name="m_tel" class="form-control"  placeholder="เบอร์โทร"
                                        value="" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">อีเมล์</label>
                                    <input type="email" name="m_email" class="form-control"  placeholder=""
                                        value="" required>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                            <input  name="m_img" type=file oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                            <br>
                            <br>
                            <div class="d-flex justify-content-center">
                            <img  src="img/upload1.png" id="pic" width="150px" />
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="">ระดับ</label>
                                <input type="radio" name="level_m" value="สมาชิก"> สมาชิก
                                <input type="radio" name="level_m" value="เจ้าของหอพัก"> เจ้าของหอพัก
                            </div>
                           <div class="d-flex justify-content-center">
                           <button type="submit" class="btn btn-success ">บันทึก</button><br>
                            <button class="btn btn-danger  " type="button"
                                onclick="window.location='form_login_user.php'">ยกเลิก</button>
                           </div>

                        </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<br>
</body>

</html>
<style>
.btn {
    border-radius: 0px;
    width: 100%;
}

.card {
    background-color: rgb(248, 248, 248);
    margin-bottom:25px;
}
::-webkit-file-upload-button {
  color: white;
  display: inline-block;
  background: #1CB6E0;
  border: none;
  border-radius:0;
  padding: 7px 15px;
  font-weight: 700;
  border-radius: 3px;
  white-space: nowrap;
  cursor: pointer;
  font-size: 10pt;
}

.form-control {
    border: 3px double;
    background-color: rgb(248, 248, 248);
}
</style>