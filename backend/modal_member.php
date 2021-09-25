
<div class="modal fade" id="modaldetail<?php echo $row_us['member_id']; ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-bold" id="exampleModalLabel"><i class="fas fa-info-circle"></i> รายละเอียดสมาชิก </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <center> <img src="../m_img/<?php echo $row_us['m_img']; ?>" class="img-thumbnail" width="40%"  alt=""></center>
                                <br>
                                    <div class="form-group">
                                    <label for="name">ระดับผู้ใช้งาน</label>
                                    <input type="text" class="form-control" value="<?php echo $row_us['level_m']; ?>" readonly>
                                    </div>  
                                    <div class="form-group">
                                    <label for="name">ชื่อ</label>
                                    <input type="text" class="form-control" value="<?php echo $row_us['m_name']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                    <label for="name">นามสกุล</label>
                                    <input type="text" class="form-control" value="<?php echo $row_us['m_last']; ?>"  readonly>
                                    </div>
                                    <div class="form-group">
                                    <label for="name">ชื่อผู้ใช้</label>
                                    <input type="text" class="form-control" value="<?php echo $row_us['m_user']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                    <label for="name">รหัสผ่าน</label>
                                    <input type="text" class="form-control" value="<?php echo $row_us['m_pass']; ?>"  readonly>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                    <div class="col">
                                    <label for="name">เพศ</label>
                                    <input type="text" class="form-control" value="<?php echo $row_us['m_sex']; ?>" readonly>
                                    </div>
                                    <div class="col">
                                    <label for="name">วัน/เดือน/ปีเกิด</label>
                                    <input type="text" class="form-control" value="<?php echo $row_us['m_date']; ?>" readonly>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                    <div class="col">
                                    <label for="name">อีเมล</label>
                                    <input type="text" class="form-control" value="<?php echo $row_us['m_email']; ?>" readonly>
                                    </div>
                                    <div class="col">
                                    <label for="name">เบอร์โทร</label>
                                    <input type="text" class="form-control" value="<?php echo $row_us['m_tel']; ?>" readonly>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    <label for="address">ที่อยู่</label>
                                    <input type="text" class="form-control" value="<?php echo $row_us['m_address']; ?>"  readonly >
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-flat col-3" data-dismiss="modal">ปิด</button>
                                </div>
                            </div>
                        </div>
                    </div>