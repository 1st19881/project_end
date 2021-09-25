<?php 

// echo "<pre>";
// 	print_r($_SESSION);
// 	echo "</pre>";
// 	exit;

session_start();
        if(isset($_POST['m_user'])){
                  include("backend/condb.php");
                  $m_user = $_POST['m_user'];
                  $m_pass = $_POST['m_pass'];

                  $sql="SELECT * FROM tbl_member 
                  WHERE  m_user='".$m_user."' 
                  AND  m_pass='".$m_pass."' ";
                  $result = mysqli_query($con,$sql);
                  

                  //sweetalert cdn 

                  echo '
                  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
                  ';

                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      $_SESSION["member_id"] = $row["member_id"];
                      $_SESSION["m_name"] = $row["m_name"];
                      $_SESSION['user_level'] = $row["level_m"];
                      if($_SESSION["user_level"] =="สมาชิก"){ 
                        echo '
                        <script>
                        setTimeout(function() {
                        swal({
                                title: "Login success",
                                text: "สมาชิก",
                                type: "success",
                                // imageUrl: "https://vistapointe.net/images/hostel-3.jpg",
                                // imageWidth: 2000,
                                // imageHeight: 400,
                            }, function() {
                            window.location = "member/member.php";
                        });
                        }, 50);
                    </script>
                    ';
                      }
                      if($_SESSION["user_level"] =="เจ้าของหอพัก"){ 
                        echo '
                    <script>
                        setTimeout(function() {
                        swal({
                                title: "Login success",
                                text: "เจ้าของหอพัก",
                                type: "success"
                            }, function() {
                            window.location = "owner/owner.php";
                        });
                        }, 50);
                    </script>
                    ';
                      }
                  }else{
                    echo '
                    <script>
                        setTimeout(function() {
                        swal({
                                title: "Login error!!!! !!",
                                text: "ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง",
                                type: "warning"
                            }, function() {
                            window.location = "form_login_user.php";
                        });
                        }, 100);
                    </script>
                    ';
 
                  }
 
        }
?>