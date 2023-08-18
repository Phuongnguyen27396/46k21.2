<?php
    $sql_sua_thanhvien = "SELECT * FROM tbl_thanhvien    where id_thanhvien='$_GET[idthanhvien]' LIMIT 1";
    
    $query_sua_thanhvien= mysqli_query($mysqli,$sql_sua_thanhvien);
?>

<table class="table table-bordered" style="  margin-left:300px; ">
    <form method="POST" action="modules/staff/controll_staff.php?idthanhvien=<?php echo $_GET['idthanhvien'] ?>">
        <?php
        while($dong = mysqli_fetch_array($query_sua_thanhvien)){
        ?> 
        <tr>
            <th style="background: #d9d9d9">Họ Tên</th>
            <td><input type="text"  value="<?php echo $dong['hoten'] ?>" name="hoten"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Email</th> 
            <td><input type="text"  value="<?php echo $dong['email'] ?>" name="email"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        
        
        <tr> 
            <th style="background: #d9d9d9">Địa chỉ</th> 
            <td><input type="text"  value="<?php echo $dong['vaitro'] ?>" name="vaitro"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">SDT</th> 
            <td><input type="text"  value="<?php echo $dong['stt'] ?>" name="stt"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        
        <tr> 
            <th style="background: #d9d9d9">Vai trò</th> 
          
            <th>
                <select name="tinhtrang">
                    <?php 
                        if($row['tinhtrang']==1){
                    ?>                 
                        <option value="1" selected>Admin</option>
                        <option value="0">Trưởng phòng</option>
                        <option value="2">Nhân viên</option>
                        <option value="3">Cộng tác viên</option>
                        <?php   
                        }elseif($row['tinhtrang']==0){
                        ?>
                        <option value="1" >Admin</option>
                        <option value="0"selected>Trưởng phòng</option>
                        <option value="2">Nhân viên</option>
                        <option value="3">Cộng tác viên</option>
                        <?php   
                        }elseif($row['tinhtrang']==2){
                        ?>
                        <option value="1" >Admin</option>
                        <option value="0">Trưởng phòng</option>
                        <option value="2"selected>Nhân viên</option>
                        <option value="3">Cộng tác viên</option>
                        <?php   
                        }elseif($row['tinhtrang']==3){
                        ?>
                        <option value="1" >Admin</option>
                        <option value="0">Trưởng phòng</option>
                        <option value="2">Nhân viên</option>
                        <option value="3"selected>Cộng tác viên</option>
                         <?php
                        }
                            ?> 
                </select>
            </th>
        </tr>


        <tr>  
            <td colspan="7"><input type="submit" name="suathanhvien" value="Save"></td>
        </tr>
        <?php
        }
        ?>
  </form>
</table>      