<div class="modal fade" id="modaldetail<?php echo $row_am['p_id']; ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-info-circle"></i> รายละเอียดหอพัก :  </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <h6><i class="fas fa-info-circle"></i> รายละเอียด :</h6>
                                <small>
                                <?php echo $row_am['detail']; ?>
                                </small><br><br><hr>
                                <h6><i class="fas fa-tv"></i> สิ่งอำนวยความสะดวก  :</h6>
                                <small>
                                <?php echo $row_am['detail_Facilities']; ?>
                                </small>
                                <br><hr>
                                <h6><i class="fas fa-dollar-sign"></i> ข้อมูลค่าบริการ  :</h6>
                                <small>
                                <?php echo $row_am['detail_service']; ?>
                                </small>
                                <br><hr>
                                <h6><i class="fas fa-phone"></i> ข้อมูลติดต่อ  :</h6>
                                <small>
                                <?php echo $row_am['detail_contac']; ?>
                                </small><br><br><hr>
                                <div class="form-row">
                                <div class="col">
                                  <label for="">ราคา/บาท</label>
                                  <input type="text" class="form-control"  readonly value="  <?php echo number_format($row_am['price']); ?>">
                                </div>
                                <div class="col">
                                  <label for="">#tag</label>
                                  <input type="text" class="form-control " readonly value="  <?php echo $row_am['tag_name']; ?>">
                                </div>
                              </div>
                              <br>
                              <br>
                                <div class="card my3 p-4">
                            <div class="text-dark "><h5><i class="fas fa-images"></i>   รูปภาพเพิ่มเติม</h5></div>
                              <div class="row">
                                <div class="col-md-4">
                                <div id="card1" class="card my-4">
                                <div class="card-body ">
                                <label for=""> <i class="far fa-image"></i>  ภาพ1</label>
                                <a data-fancybox="gallery" href="../backend/p_imghome/<?php echo $row_am['p_img2'];?>">
                                <img class="img-fluid rounded shadow-sm" src="../backend/p_imghome/<?php echo $row_am['p_img2'];?>" width="100%"  alt="..." ></a>
                                </div>
                              </div>
                                </div>
                                <div class="col-md-4 ">
                                <div id="card1" class="card my-4">
                                <div class="card-body ">
                                <label for=""> <i class="far fa-image"></i>  ภาพ2</label>
                                <a data-fancybox="gallery" href="../backend/p_imghome/<?php echo $row_am['p_img3'];?>">
                                <img class="img-fluid rounded shadow-sm" src="../backend/p_imghome/<?php echo $row_am['p_img3'];?>" width="100%"  alt="..." ></a>
                                </div>
                              </div>
                                </div>
                                <div class="col-md-4">
                                <div id="card1" class="card my-4">
                                <div class="card-body ">
                                <label for=""> <i class="far fa-image"></i>  ภาพ3</label>
                                <a data-fancybox="gallery" href="../backend/p_imghome/<?php echo $row_am['p_img4'];?>">
                                <img class="img-fluid rounded shadow-sm" src="../backend/p_imghome/<?php echo $row_am['p_img4'];?>" width="100%"  alt="..." ></a>
                                </div>
                              </div>
                                </div>
                              </div>
                            </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-flat col-3 " data-dismiss="modal">ปิด</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                      .st1{
                        width:auto;
                        height: 1500px;
                      }
                    </style>
