<?php 
session_start();
        if(isset($_POST['a_user'])){
                  include("backend/condb.php");
                  $a_user = $_POST['a_user'];
                  $a_pass  = ($_POST['a_pass']);

                  $sql="SELECT * FROM tbl_admin 
                  WHERE  a_user='".$a_user."' 
                  AND  a_pass='".$a_pass."' ";
                  $result = mysqli_query($con,$sql);

                    // echo $sql;
                    // exit;

                  echo '
                  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
                  ';		
                  
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["user_id"] = $row["a_id"];
                      $_SESSION["a_name"] = $row["a_name"];
                      $_SESSION['a_level'] = $row["a_level"];
                      if($_SESSION["a_level"]=="admin"){ 

                        echo '
                        <script>
                            setTimeout(function() {
                            swal({
                                    title: "Login success",
                                    text: "ผู้ดูแลระบบ",
                                    type: "success"
                                }, function() {
                                window.location = "backend/index.php";
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
                                    title: "Login ผิดพลาด !!",
                                    text: "username หรือ password ไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง",
                                    type: "warning"
                                }, function() {
                                window.location = "form_login.php";
                            });
                            }, 50);
                        </script>
                        ';
     
                      }
     
        }
?>