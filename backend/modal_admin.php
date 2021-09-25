
<div class="modal fade" id="modaldetail<?php echo $row_am['a_id']; ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-bold" id="exampleModalLabel"><i class="fas fa-info-circle"></i> รายละเอียดผู้ดูแลระบบ </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">ชื่อ</label>
                                    <input type="text" class="form-control" value="<?php echo $row_am['a_name']; ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    <label for="name">ชื่อผู้ใช้</label>
                                    <input type="text" class="form-control" value="<?php echo $row_am['a_user']; ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    <label for="name">รหัสผ่าน</label>
                                    <input type="text" class="form-control" value="<?php echo $row_am['a_pass']; ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    <label for="name">ระดับผู้ใช้งาน</label>
                                    <input type="text" class="form-control" value="<?php echo $row_am['a_level']; ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-flat col-3" data-dismiss="modal">ปิด</button>
                                </div>
                            </div>
                        </div>
                    </div>