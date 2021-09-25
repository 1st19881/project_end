<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  
$query = "SELECT p.*,t.type_name,p.unit FROM tbl_dormitory as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
ORDER BY p.p_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);


$i=1;

	


?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title text-bold"><i class="fas fa-edit"></i> จัดการหอพัก</h3>
        <div class="d-flex justify-content-end">
            <button class="btn btn-sm  btn-light btn-flat">
                <a href="dormitory.php?act=add" class="text-dark text-bold"><i class="fas fa-plus-square"></i> เพิ่มหอพัก</a>
            </button>
            <button class="btn btn-sm  btn-light btn-flat">
                <a href="deleteall.php" class="text-dark text-bold" onclick="return confirm('ยันยันการลบ')"><i
                        class="fas fa-trash-alt"></i> ลบข้อมูลทั้งหมด</a>
            </button>
        </div>
    </div>
    <br>
    <div class="card-body p-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-responsive border" id="example1" align="center">
                    <thead>
                        <tr class="info">
                            <th scope="col" class="text-nowrap" width="10%">เลขหน้า</th>
                            <th scope="col" class="text-nowrap" width="20%">ชื่อหอพัก</th>
                            <th scope="col" class="text-nowrap" width="20%">ประเภท</th>
                            <th scope="col" class="text-nowrap" width="10%">ราคา/บาท</th>
                            <th scope="col" class="text-nowrap" width="5%">หน่วย</th>
                            <th scope="col" class="text-nowrap" width="10%">รูปภาพ</th>
                            <th scope="col" class="text-nowrap" width="20%">จัดการ</th>
                        </tr>
                    </thead>
                    <?php while($row_am = mysqli_fetch_array($result)) { ?>
                        <?php $dm = $row_am['unit']; ?>
                    <tr>
                        <th scope="row"><?php echo $i++ ?></th>
                        <td><?php echo $row_am['p_name']; ?></td>
                        <td><?php echo $row_am['type_name']; ?></td>
                        <td><?php echo number_format($row_am['price']); ?></td>
                        <td class="" >
                        <?php if ($dm == 'เทอม') {
                             echo ""."<br> <span class='bg-info col-3 p-2'style='border-radius:25px;'>เทอม</span>";
                        }elseif($dm == 'เดือน') {
                             echo ""."<br> <span class='bg-primary col-3 p-2 'style='border-radius:25px;'>เดือน</span>";
                        }elseif($dm == 'วัน') {
                             echo ""."<br> <span class='bg-danger col-3 p-2' style='border-radius:25px;'>วัน</span>";
                        }
                        ?>
                        </td>
                        <td class="text-nowrap"><img src="p_imghome/<?php echo $row_am['p_img'];?>" width="100%"
                        class="card-img-top " alt="..."></td>
                        <td class="d-flex justify-content-center">
                        <button class="btn  btn-flat btn-primary" data-toggle="modal"
                                data-target="#modaldetail<?php echo $row_am['p_id']; ?>"><i class="fas fa-eye"></i></button>
                        <a href="dormitory_form_edit.php?act=edit&ID=<?php echo $row_am['p_id']; ?>"
                                class="btn btn-warning btn-primary btn-flat "> <i class="fas fa-edit"></i> </a>
                        <a href="dormitory_del_db.php?ID=<?php echo $row_am['p_id']; ?>"
                                class='btn btn-danger  btn-flat ' onclick="return confirm('ยันยันการลบ')"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>

                                    <?php include('modal_dormitory.php'); ?>


                    <?php }  ?>


                </table>





                <!-- Modal -->


            </div>



        </div>

    </div>

</div>
<?php include('footer.php'); 
      include('js.php');
?>

</body>

</html>