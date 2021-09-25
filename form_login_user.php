<?php session_start();?>
<?php
include('h.php');
?>

<title>เข้าสู่ระบบสมาชิก</title>

<link rel="stylesheet" href="css/form_login.css">

<head>


    <div class="login-clean">
        <div class="login-dark">
            <form action="ckuserlogin.php" method="post">
                <div class="illustration"><i class="fas fa-user-circle"></i></div>
                <h2 class="text-center">เข้าสู่ระบบสมาชิก:</h2><br>
                <div class="form-group"><input class="form-control" type="text" name="m_user" placeholder="ชื่อผู้ใช้"
                        required></div>
                <div class="form-group"><input class="form-control" type="password" name="m_pass" placeholder="รหัสผ่าน"
                        required></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">เข้าสู่ระบบ</button>
                </div>
                <div class="form-row">
                    <div class="d-flex mt-4 col-6">
                        <a href="index.php" class="btnsublogin btn btn-light btn-flat col-12">หน้าแรก</a>
                    </div>
                    <div class="d-flex mt-4 col-6">
                        <button class="btnsublogin btn btn-light  btn-flat col-12" type="button"
                            onclick="window.location='form_register.php'">สมัครสมาชิก</button>
                    </div>
                </div>
            </form>
        </div>