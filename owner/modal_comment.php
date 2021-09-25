<div class="modal fade" id="modaldetail<?php echo $row_c['c_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-info-circle"></i> ความคิดเห็น </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <div class="form-group">
                    <label for="name"><b class="text-danger"></b> รายละเอียด ชื่อ</label>
                    <textarea name="" id="" cols="30" rows="1" class="form-control "
                        readonly><?php echo $row_c['m_name']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="name"><b class="text-danger"></b> รายละเอียด ความคิดเห็น</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"
                        readonly><?php echo $row_c['c_detail']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="name"><b class="text-danger"></b> ตอบกลับ</label>
                    <textarea name="" id="" cols="30" rows="1" class="form-control"
                        readonly><?php echo $row_c['reply_name']; ?></textarea>
                </div>
                <br>

                <div class="modal-footer">
                    <div class="d-flex">
                        <a class="btn btn-flat btn-success"
                            href="detail.php?p_id=<?php echo $row_c['ref_p_id']; ?>">ตอบ</a>
                        <button type="button" class="btn btn-danger btn-flat " data-dismiss="modal">ปิด</button>
                    </div>
                </div>
            </div>
        </div>
    </div>