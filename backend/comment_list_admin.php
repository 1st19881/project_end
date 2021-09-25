<?php
                include('condb.php'); 
                $query = "SELECT c.*,m.m_name,p.p_name FROM tbl_comment as c
                INNER JOIN tbl_member as m on c.member_id=m.member_id
                INNER JOIN tbl_dormitory as p on c.ref_p_id=p.p_id
                ORDER BY c_id DESC" or die("Error:" . mysqli_error());
                $result = mysqli_query($con, $query);
                mysqli_close($con);

                $i=1;
                $s="น.";
                $d="วันที่";
                $t="เวลา";

                ?>

<div class="card">
    <div class="card-header mt-5">
        <h3 class="card-title text-bold"><i class="fas fa-edit"></i> จัดการแสดงความคิดเห็น</h3>
    </div>
    <br>
    <div class="card-body p-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-responsive border" id="example1" align="center">
                    <thead>
                        <tr class="info">
                            <th scope="col" class="text-nowrap" width="5%">เลขหน้า</th>
                            <th scope="col" class="text-nowrap" width="5%">หอพัก</th>
                            <th scope="col" class="text-nowrap" width="20%">ชื่อ</th>
                            <td scope="col" class="text-nowrap" width="20%">วัน/เดือน/ปี</td>
                            <td scope="col" class="text-nowrap" width="10%">สถานะ</td>
                            <th scope="col" class="text-nowrap" width="5%">จัดการ</th>
                        </tr>
                    </thead>
                    <?php foreach($result as $row_c) { ?>

                    <tr>
                        <th scope=""><?php echo $i++ ?></th>
                        <td class="text-nowrap"><?php echo $row_c['p_name']; ?></td>
                        <td class="text-nowrap"><?php echo $row_c['m_name']; ?></td>
                        <td class="text-nowrap"><?php echo date("$d"." d-m-Y"." $t"."  H:i:s $s",strtotime($row_c['c_date'])); ?></td>
                        <td class="text-nowrap"><?php $cs = $row_c['c_status']; 
                        if($cs == "1"){
                            echo "<span class='badge-warning p-1 '>รออนุมัติ</span>";  
                        } else if($cs == "2"){
                            echo "<span class='badge-success p-1 '>อนุมัติ</span>";    
                        }
                        ?>
                        </td>
                        <td class="text-nowrap">
                            <div class="d-flex justify-content-center">
                                <button class="btn  btn-flat btn-primary" data-toggle="modal"
                                    data-target="#modaldetail<?php echo $row_c['c_id']; ?>"><i
                                        class="fas fa-eye"></i></button>
                                <a href="comment_del.php?c_id=<?php echo $row_c['c_id']; ?>"
                                    class='btn btn-danger btn-primary btn-flat'
                                    onclick="return confirm('ยันยันการลบ')"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>

                    <?php include('modal_comment.php'); ?>

                    <?php }  ?>


                </table>



            </div>


        </div>

    </div>

</div>