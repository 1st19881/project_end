    <!-- Main content -->
    <section class="content">
            <div class="card-body p-1">

            <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 mt-5">
                <div class="card shadow">
                    <form name="admin" action="admin_form_add_db.php" method="POST">           
                        <div class="card-header text-center bd-white">
                           <h3 class="card-title text-bold">เพิ่มผู้ดูแลระบบ</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="a_user" class="col-sm-3 col-form-label ">ผู้ใช้ :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="a_user" name="a_user"placeholder="username" pattern="^[a-zA-Z0-9]+$" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="a_pass" class="col-sm-3 col-form-label">รหัสผ่าน :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="a_pass" name="a_pass" placeholder="password"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="a_name" class="col-sm-3 col-form-label">ชื่อผู้ใช้ :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="a_name" name="a_name" placeholder="ชื่อ-สกุล" required>
                                </div>    
                            </div>
                        </div>
                        <input type="hidden" name="a_level" value="admin">
                           <div class="d-flex justify-content-center">
                           <button type="submit" class="btn btn-success btn-flat col-2"><i class="fas fa-save"></i> บันทึก</button>
                            <a class="btn btn-danger btn-flat col-2" href="admin.php"><i class="fas fa-window-close"></i> ยกเลิก</a>
                           </div>
                    </form>
                </div>
            </div>
        </div>
            
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
