<?php  
     
                $query = "SELECT c.*,m.m_name,c.reply_name,m.m_img FROM tbl_comment as c 
                INNER JOIN tbl_member as m on c.member_id=m.member_id
                WHERE ref_p_id=$p_id
                ORDER BY c_date  DESC" or die("Error:" . mysqli_error());
                $result = mysqli_query($con, $query);
                mysqli_close($con);
                $i=1;

                
                // echo '<pre>';
                // echo $p_id;
                // echo '</pre>';
                // exit();
 ?>


       
   

   

    <div class="mt-4">
        <div class="d-flex justify-content-center row ">
            <div class="col-md-12 mb-4 ">
                <div class="card">
                 <div class="card-body border border-dark">
                 <?php  foreach($result as $row_c) { ?>
                <div class="d-flex flex-column comment-section" id="myGroup">
                    <div class="bg-white p-2 text-dark">
                        <div class="d-flex flex-row user-info"><img class="rounded-circle" src="../m_img/<?php echo $row_c['m_img'] ; ?>" width="75">
                            <div  class="d-flex flex-column justify-content-start ml-2"><span  class="d-block font-weight-bold" >ชื่อ :<?php echo $row_c['m_name']; ?> 
                           </span>
                            <span class="d-block font-weight-bold">ตอบ : <?php echo $row_c['reply_name']; ?></span>
                            <span class="text-dark font-weight-bold"><?php echo date("$d"." d-m-Y"." $t"."  H:i:s $s",strtotime($row_c['c_date'])); ?></span>
                            </div>
                        </div>
                        <div class="mt-3">
                        <span class="d-block font-weight-bold">ความคิดเห็น :</span>
                            <br>
                            <p class="comment-text text-danger"><?php echo $row_c['c_detail']; ?></p>
                        </div>
                    </div>
                </div>
                <br>
                <?php  } ?> 
                 </div>
                </div>
            </div>
            
        </div>
</div>





    
