
<div class="modal fade" id="modaldetail<?php echo $row_c['c_id']; ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-bold" id="exampleModalLabel"><i class="fas fa-info-circle"></i> ความคิดเห็น </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body ">
                                <div class="form-group">
                                    <label for="name"> <b class="text-danger">*</b> ชื่อ</label>
                                    <textarea name="" id="" cols="30" rows="1" class="form-control " readonly><?php echo $row_c['m_name']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="name"> <b class="text-danger">*</b> เวลา</label>
                                   <input type="text" class="form-control" value="<?php echo date("$d"." d-m-Y"." $t"."  H:i:s $s",strtotime($row_c['c_date'])); ?>" readonly>
                                    </div>
                                <div class="form-group">
                                    <label for="name"> <b class="text-danger">*</b> ความคิดเห็น</label>
                                    <textarea name="" id="" cols="30" rows="10" class="form-control" readonly><?php echo $row_c['c_detail']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="name"><b class="text-danger">*</b> ตอบกลับ</label>
                                    <textarea name="" id="" cols="30" rows="1" class="form-control" readonly><?php echo $row_c['reply_name']; ?></textarea>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-flat col-3" data-dismiss="modal">ปิด</button>
                                </div>
                            </div>
                        </div>
                    </div>

