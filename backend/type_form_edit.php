<?php
include('condb.php');  


	// echo '<pre>';
	// print_r($_REQUEST);
	// echo '</pre>';
	// exit;


$type_id =  mysqli_real_escape_string($con,$_REQUEST["ID"]);

$sql = "SELECT * FROM tbl_type WHERE type_id='$type_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<!-- Main content -->
<section class="content">
            <div class="card-body p-1">

            <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 mt-5">
                <div class="card shadow">
                    <form name="admin" action="type_form_edit_db.php" method="POST"  enctype="multipart/form-data">           
                        <div class="card-header text-center bd-white">
                           <h3 class="card-title">แก้ไขประเภทหอพัก</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="m_user" class="col-sm-2 col-form-label">ประเภทหอพัก</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="type_name" name="type_name"placeholder="ชื่อประเภทหอพัก" value="<?php echo $row['type_name']; ?>" required>
                                </div>
                            </div>
                        <div class="d-flex justify-content-center">
                            <input type="hidden" name="type_id" value="<?php echo $type_id ?>">
                            <button type="submit" class="btn btn-sm btn-flat btn-success col-2"><i class="fas fa-save"></i> บันทึก</button>
                            <a class="btn btn-danger btn-flat col-2" href="type.php"><i class="fas fa-window-close"></i> ยกเลิก</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->