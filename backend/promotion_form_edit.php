<?php include('header.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
<?php
include('condb.php');  
$pro_id = $_GET["ID"];
$sql = "SELECT * FROM tbl_pro_dormitory
WHERE pro_id = '$pro_id'
ORDER BY pro_id asc";
$result2 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);



?>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-bold"><i class="fas fa-edit"></i> แก้ไขโปรโมชั่น<label
                    style="color: red;">*</label></h3>
        </div>
        <br>
        <div class="card-body">
            <form action="promotion_form_edit_db.php" method="post" enctype="multipart/form-data"
                class="form-horizontal">
                <div class="form-row">
                    <div class="col-12">
                        <label for="">
                            <h5 class="text-bold">*ชื่อโปรโมชั่น</h5>
                        </label>
                        <input type="text" name="pro_name" value="<?php echo $row['pro_name'];?>" class="form-control"
                            required placeholder="ชื่อโปรโมชั่น" />
                    </div>
                    <div class="col-12">
                        <label for="">
                            <p>
                            <h5 class="text-bold">*รายละเอียดโปรโมชั่น</h5>
                            </p>
                        </label>
                        <textarea name="pro_detail" rows="5" cols="60"
                            id="detail"> <?php echo $pro_detail; ?></textarea>
                        <br>
                    </div>
                    <div class="col-6">
                        <label for="">
                            <h5 class="text-bold">*ราคา ฿</h5>
                        </label>
                        <input type="text" name="price" class="form-control" required placeholder="ราคา"
                            value="<?php echo $row['price'];?>" />
                        <br>
                        <br>
                    </div>
                    <div class="col-6">
                        <label for="">
                            <h5 class="text-bold">*ราคาโปรโมชั่น ฿</h5>
                        </label>
                        <input type="text" name="pro_price" class="form-control" required placeholder="ราคาโปรโมชั่น"
                            value="<?php echo $row['pro_price'];?>" />
                        <br>
                        <br>
                    </div>
                    <div class="col-6">
                        <label for="">
                            <h5 class="text-bold">*วันที่เริ่ม</h5>
                        </label>
                        <input type="date" name="startdate" class="form-control" required placeholder="ราคา"
                            value="<?php echo $row['startdate'];?>" />
                        <br>
                        <br>
                    </div>
                    <div class="col-6">
                        <label for="">
                            <h5 class="text-bold">*วันที่สิ้นสุด</h5>
                        </label>
                        <input type="date" name="enddate" class="form-control" required placeholder="ราคาโปรโมชั่น"
                            value="<?php echo $row['enddate'];?>" />
                        <br>
                        <br>
                    </div>
                    <div class="col-12">
                        <label for="">
                            <p>
                            <h5 class="text-bold">*ข้อมูลติดต่อ</h5>
                            </p>
                        </label>
                        <textarea name="detail_contac" rows="5" cols="60"
                            id="detail1"> <?php echo $detail_contac; ?></textarea>
                        <br>
                    </div>
                    <div class="col-12">
                        <label for="">
                            <p>
                            <h5 class="text-bold">*สิ่งอำนวยความสะดวก</h5>
                            </p>
                        </label>
                        <textarea name="detail_Facilities" rows="5" cols="60"
                            id="detail2"><?php echo $detail_Facilities; ?></textarea>
                        <br>
                    </div>
                    <div class="col-12">
                        <label for="">
                            <h5 class="text-bold">*ภาพโปรโมชั่น</h5>
                        </label><br><br>
                        <img src="pro_img/<?php echo $row['proimg'];?>" width="150px">
                        <br><br>
                        <input type="file" name="proimg" class="form-control" />
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <input type="hidden" name="pro_id" value="<?php echo $pro_id; ?>" />
                    <input type="hidden" name="proimg2" value="<?php echo $proimg; ?>" />
                    <button type="submit" class="btn btn-success btn-flat col-2"> <i class="fas fa-save"></i>  บันทึก </button>
                    <button type="button" onclick="window.location='promotion.php'"
                        class="btn btn-danger btn-flat col-2" name=""> <i class="fas fa-window-close"></i>  ยกเลิก </button>
                    <br>
                    <br>
                </div>
            </form>






        </div>


    </div>

    </div>

    <?php include('footer.php'); ?>

    <script src="../ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('detail');
    </script>
    <script>
    CKEDITOR.replace('detail1');
    </script>
    <script>
    CKEDITOR.replace('detail2');
    </script>
    <script>
    CKEDITOR.replace('detail3');
    </script>