<?php  error_reporting( error_reporting() & ~E_NOTICE );
   
$query = "SELECT c.*,m.m_name,m.level_m,c.reply_name,m.m_img FROM tbl_comment as c 
INNER JOIN tbl_member as m on c.member_id=m.member_id
WHERE ref_p_id=$p_id 
ORDER BY c_date  ASC" or die("Error:" . mysqli_error());

$resultcom = mysqli_query($con, $query);
$row_c= mysqli_fetch_array($resultcom);

$i1=1;
$i=1;


// echo '<pre>';
// echo $p_id;
// echo '</pre>';
// exit();

$s="น.";
$d="วันที่";
$t="เวลา";

?>

<div class="modal fade" id="modaldetail1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-bold" id="exampleModalLabel"><i class="fas fa-info-circle"></i>
                    รายการความคิดเห็นหอพัก</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="mt-2">
                    <div class="d-flex justify-content-center row ">
                        <div class="col-md-12 mb-4 ">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <?php  foreach($resultcom as $row_c) { ?>
                                    <?php $st = $row_c['level_m']; ?>
                                    <div class="d-flex flex-column comment-section " id="myGroup">
                                        <div class="bg-light p-2 text-dark">
                                            <div class="d-flex justify-content-end">
                                                <span class="bg-warning p-1">ความคิดเห็นที่ <?php echo $i++; ?>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-row user-info"><img class="rounded-circle"
                                                    src="../m_img/<?php echo $row_c['m_img'] ; ?>" width="75">
                                                <div class="d-flex flex-column justify-content-start ml-2"><span
                                                        class="d-block font-weight-bold">ชื่อ :
                                                        <?php echo $row_c['m_name']; ?></span>
                                                    <span class="d-block font-weight-bold">ตอบ :
                                                        <?php echo $row_c['reply_name']; ?></span>
                                                    <span class="text-dark font-weight-bold">เวลา :
                                                        <?php echo $row_c['c_date']; ?> น.</span>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <span class="d-block font-weight-bold">ความคิดเห็น :</span>
                                                <p class="text-danger"><?php echo $row_c['c_detail']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <?php if ($st == 'เจ้าของหอพัก') {
                                     echo ""."<br> <small  class='badge badge-info p-2'>เจ้าของหอพัก</small>";
                                    }elseif($st == 'สมาชิก') {
                                        echo ""."<br> <small  class='badge badge-warning p-2'>สมาชิก</small>";
                                    }
                                    ?>
                                    </div>
                                    <br>
                                    <hr>
                                    <?php  } ?>
                                </div>
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