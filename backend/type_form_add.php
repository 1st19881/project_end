<!-- Main content -->
<section class="content">
            <div class="card-body p-1">
            <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 mt-5">
                <div class="card shadow">
                    <form name="admin" action="type_form_add_db.php" method="POST"  enctype="multipart/form-data">           
                        <div class="card-header text-center bd-white">
                           <h3 class="card-title text-bold"><i class="fas fa-plus-circle"></i> เพิ่มประเภทหอพัก</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="m_user" class="col-sm-2 col-form-label">ประเภทหอพัก</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="type_name" name="type_name"placeholder="ชื่อประเภทหอพัก" required>
                                </div>
                            </div>
                        <div class="d-flex justify-content-center">
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

    <?php  include('footer.php'); ?>