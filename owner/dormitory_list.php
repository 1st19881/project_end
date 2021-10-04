<?php

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';



error_reporting( error_reporting() & ~E_NOTICE );


include('../backend/condb.php');  


$query = "SELECT p.*,m.m_name,t.type_name
FROM tbl_dormitory as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
INNER JOIN tbl_member  as m ON p.member_id=m.member_id
WHERE m.member_id=$member_id
ORDER BY p.p_id DESC" or die("Error:" . mysqli_error());

$result = mysqli_query($con, $query);


$i=1;
?>

<div class="card">
    <div class="card-header">
        <div class="card-title"> <i class="fas fa-edit"></i> จัดการหอพัก</div>
    </div>
    <div class="card-body">
        <a href="dormitory.php?act=add" class="btn btn-primary btn-sm btn-flat col-2"><i class="fas fa-plus-square"></i>
            เพิ่ม+ </a>
        <table class="table table-hover table-responsive" id="example1" align="center">
            <thead>
                <tr class="info">
                    <th scope="col" class="text-nowrap" width="5%">เลขหน้า</th>
                    <th scope="col" class="text-nowrap" width="20%">ชื่อหอพัก</th>
                    <th scope="col" class="text-nowrap" width="20%">ประเภท</th>
                    <th scope="col" class="text-nowrap" width="20%">เพิ่มโดย</th>
                    <th scope="col" class="text-nowrap" width="5%">จำนวนเข้าดู</th>
                    <th scope="col" class="text-nowrap" width="10%">ภาพ</th>
                    <th scope="col" class="text-nowrap" width="20%">จัดการ</th>
                </tr>
            </thead>
            <?php foreach($result as $row_am) { ?>

            <tr>
                <th scope="row"><?php echo $i++ ?></th>
                <td><a href="detail.php?p_id=<?php echo $row_am['p_id']; ?>"><?php echo $row_am['p_name']; ?></a></td>
                <td><?php echo $row_am['type_name']; ?></td>
                <td><?php echo $row_am['m_name']; ?></td>
                <td><?php echo $row_am['p_view']; ?></td>
                <td class="text-nowrap"><img src="../backend/p_imghome/<?php echo $row_am['p_img'];?>" width="100%"
                        class="card-img-top " alt="..."></td>
                <td class="d-flex justify-content-center">
                    <button class="btn  btn-flat btn-primary" data-toggle="modal"
                        data-target="#modaldetail<?php echo $row_am['p_id']; ?>"><i class="fas fa-eye"></i> </button>
                    <a href="dormitory.php?act=edit&ID=<?php echo $row_am['p_id']; ?>"
                        class="btn btn-warning btn-primary btn-flat "> <i class="fas fa-edit"></i> </a>
                    <a href="form_del_dormitory.php?ID=<?php echo $row_am['p_id']; ?>"
                        class='btn btn-danger btn-primary btn-flat ' onclick="return confirm('ยันยันการลบ')"><i
                            class="fas fa-trash-alt"></i></a>
                </td>
            </tr>

            <?php include('modal_dormitory.php'); ?>

            <?php }  ?>

            <br>
            <br>

        </table>


    </div>

</div>

</body>

</html>