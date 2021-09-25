<div class="modal fade" id="modaldetail<?php echo $row_pro['pro_id']; ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-bold" id="exampleModalLabel"><i class="fas fa-info-circle"></i> รายละเอียดโปรโมชั่น </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body ">
                                <h6 class="text-bold"><i class="fas fa-info-circle"></i> รายละเอียด :</h6>
                                <small>
                                <?php echo $row_pro['pro_detail']; ?>
                                </small><hr>
                                <h6 class="text-bold"><i class="fas fa-tv"></i> สิ่งอำนวยความสะดวก  :</h6>
                                <small>
                                <?php echo $row_pro['detail_Facilities']; ?>
                                </small>
                                <br><hr>
                                <h6 class="text-bold"><i class="fas fa-phone"></i> ข้อมูลติดต่อ  :</h6>
                                <small>
                                <?php echo $row_pro['detail_contac']; ?>
                                </small><hr>
                                <h6 class="text-bold"><i class="fas fa-tv"></i> วันที่เริ่มต้น  :</h6>
                                <input type="text" class="form-control" readonly value=" <?php echo $row_pro['startdate']; ?>">
                                <hr>
                                <h6 class="text-bold"><i class="fas fa-tv"></i> วันที่สิ้นสุด  :</h6>
                                <input type="text" class="form-control" readonly value="  <?php echo $row_pro['enddate']; ?>">
                                <hr>
                                <h6 class="text-bold"><i class="fas fa-tv"></i> ราคา  :</h6>
                                <input type="text" class="form-control" readonly value=" <?php echo number_format($row_pro['price']); ?> บาท">
                                <hr>
                                <h6 class="text-bold"><i class="fas fa-tv"></i> ราคาโปรโมชั่น  :</h6>
                                <input type="text" class="form-control" readonly value="  <?php echo number_format($row_pro['pro_price']); ?> บาท">
                                <hr>
                                <div class="card my3 p-4">
                                <div><h5 class="text-bold"><i class="fas fa-images"></i> รูปภาพ</h5></div>
                                <div class="col-md-12">
                                <div id="card1" class="card my-4">
                                <div class="card-body ">     
                                <a data-fancybox="gallery" href="../backend/pro_img/<?php echo $row_pro['proimg'];?>">
                                <img class="img-fluid rounded shadow-sm" src="../backend/pro_img/<?php echo $row_pro['proimg'];?>" width="100%"  alt="..." ></a>
                                </div>
                              </div>
                                </div>
                            </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger  btn-flat  col-3" data-dismiss="modal">ปิด</button>
                                </div>
                            </div>
                        </div>
                    </div>