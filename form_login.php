<?php session_start();?>
<?php
include('h.php');
?>
<title>เข้าสู่ระบบสมาชิก</title>

<link rel="stylesheet" href="css/form_login.css">
<head>


    <div class="login-clean">
        <div class="login-dark">
            <form action="checklogin.php" method="post">
                <div class="illustration"><i class="fas fa-user-circle"></i></div>
                <h2 class="text-center">เข้าสู่ระบบผู้ดูแลระบบ:</h2><br>
                <div class="form-group"><input class="form-control" type="text" name="a_user" placeholder="ชื่อผู้ใช้"
                        required></div>
                <div class="form-group"><input class="form-control" type="password" name="a_pass" placeholder="รหัสผ่าน"
                        required></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">เข้าสู่ระบบ</button>
                </div>
                <a href="index.php" class="text-white">หน้าแรก</a>
            </form>
        </div>