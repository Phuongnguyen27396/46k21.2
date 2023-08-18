<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc    where id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
  
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>

<table class="table table-bordered" style="  margin-left:300px; ">
    <form method="POST" action="modules/data/controll_data.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" enctype="multipart/form-data">
        <?php
        while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
        ?> 
        <tr>
            <th style="background: #d9d9d9">Số nhà </th>
            <td><input type="text"  value="<?php echo $dong['sonha'] ?>" name="sonha" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Đường</th> 
            <td><input type="text"  value="<?php echo $dong['duong'] ?>" name="duong" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        
        
        <tr> 
            <th style="background: #d9d9d9">PH/Xã</th> 
            <td><input type="text"  value="<?php echo $dong['xa'] ?>" name="xa" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Q/Huyện</th> 
            <td>
            <select name="huyen">
                    <?php 
                        if($row['huyen']==0){
                    ?>                 
                        <option value="0" selected>Hải Châu </option>
                        <option value="1"> Cẩm Lệ</option>
                        <option value="2">Thanh Khê</option>
                        <option value="3">Liên Chiểu</option>
                        <option value="4">Ngũ Hành Sơn</option>
                        <option value="5"> Sơn Trà</option>
                        <option value="6">Huyện Hòa Vang</option>
                        <option value="7">Huyện Hoàng Sa</option>
                        <?php   
                        }elseif($row['huyen']==1){
                        ?>
                        <option value="0" >Hải Châu </option>
                        <option value="1" selected> Cẩm Lệ</option>
                        <option value="2">Thanh Khê</option>
                        <option value="3">Liên Chiểu</option>
                        <option value="4">Ngũ Hành Sơn</option>
                        <option value="5"> Sơn Trà</option>
                        <option value="6">Huyện Hòa Vang</option>
                        <option value="7">Huyện Hoàng Sa</option>
                        <?php   
                        }elseif($row['huyen']==2){
                        ?>
                        <option value="0" >Hải Châu </option>
                        <option value="1"> Cẩm Lệ</option>
                        <option value="2"selected>Thanh Khê</option>
                        <option value="3">Liên Chiểu</option>
                        <option value="4">Ngũ Hành Sơn</option>
                        <option value="5"> Sơn Trà</option>
                        <option value="6">Huyện Hòa Vang</option>
                        <option value="7">Huyện Hoàng Sa</option>
                        <?php   
                        }elseif($row['huyen']==3){
                        ?>
                        <option value="0" >Hải Châu </option>
                        <option value="1"> Cẩm Lệ</option>
                        <option value="2">Thanh Khê</option>
                        <option value="3"selected>Liên Chiểu</option>
                        <option value="4">Ngũ Hành Sơn</option>
                        <option value="5"> Sơn Trà</option>
                        <option value="6">Huyện Hòa Vang</option>
                        <option value="7">Huyện Hoàng Sa</option>
                         <?php
                        }elseif($row['huyen']==4){
                            ?>
                            <option value="0" >Hải Châu </option>
                            <option value="1"> Cẩm Lệ</option>
                            <option value="2">Thanh Khê</option>
                            <option value="3">Liên Chiểu</option>
                            <option value="4"selected>Ngũ Hành Sơn</option>
                            <option value="5"> Sơn Trà</option>
                            <option value="6">Huyện Hòa Vang</option>
                            <option value="7">Huyện Hoàng Sa</option>
                             <?php
                            }elseif($row['huyen']==5){
                                ?>
                                <option value="0" >Hải Châu </option>
                                <option value="1"> Cẩm Lệ</option>
                                <option value="2">Thanh Khê</option>
                                <option value="3">Liên Chiểu</option>
                                <option value="4">Ngũ Hành Sơn</option>
                                <option value="5"selected> Sơn Trà</option>
                                <option value="6">Huyện Hòa Vang</option>
                                <option value="7">Huyện Hoàng Sa</option>
                                 <?php
                                }elseif($row['huyen']==6){
                                    ?>
                                    <option value="0">Hải Châu </option>
                                    <option value="1"> Cẩm Lệ</option>
                                    <option value="2">Thanh Khê</option>
                                    <option value="3">Liên Chiểu</option>
                                    <option value="4">Ngũ Hành Sơn</option>
                                    <option value="5"> Sơn Trà</option>
                                    <option value="6" selected>Huyện Hòa Vang</option>
                                    <option value="7">Huyện Hoàng Sa</option>
                                     <?php
                                    }elseif($row['huyen']==7){
                                        ?>
                                        <option value="0">Hải Châu </option>
                                        <option value="1"> Cẩm Lệ</option>
                                        <option value="2">Thanh Khê</option>
                                        <option value="3">Liên Chiểu</option>
                                        <option value="4">Ngũ Hành Sơn</option>
                                        <option value="5"> Sơn Trà</option>
                                        <option value="6">Huyện Hòa Vang</option>
                                        <option value="7" selected>Huyện Hoàng Sa</option>
                                         <?php
                                        }
                            ?> 
                        
                </select>
            </td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Ngang</th> 
            <td><input type="text"  value="<?php echo $dong['ngang'] ?>" name="ngang" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Dài</th> 
            <td><input type="text"  value="<?php echo $dong['dai'] ?>" name="dai" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Diện tích</th> 
            <td><input type="text"  value="<?php echo $dong['dientich'] ?>" name="dientich" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Độ rộng</th> 
            <td><input type="text"  value="<?php echo $dong['dorong'] ?>" name="dorong" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Hướng</th> 
            <td><input type="text"  value="<?php echo $dong['huong'] ?>" name="huong" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Giá</th> 
            <td><input type="text"  value="<?php echo $dong['gia'] ?>" name="gia" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Bds</th> 
            <td>
            <select name="bds">
                    <?php 
                        if($row['bds']==0){
                    ?>                 
                        <option value="0" selected>Bán</option>
                        <option value="1">Cho thuê</option>
                        <?php   
                        }elseif($row['bds']==1){
                        ?>
                        <option value="0" >Bán</option>
                        <option value="1" selected>Cho thuê</option>
                        <?php   
                        }
                        ?>
            </td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Vị trí</th> 
            <td><input type="text"  value="<?php echo $dong['vitri'] ?>" name="vitri" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>

        <tr> 
            <th style="background: #d9d9d9">TenKH</th> 
            <td><input type="text"  value="<?php echo $dong['ten'] ?>" name="ten" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        
        <tr> 
            <th style="background: #d9d9d9">SDT</th> 
            <td><input type="text"  value="<?php echo $dong['sdt'] ?>" name="sdt" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        
        <tr> 
            <th style="background: #d9d9d9">Đăng</th> 
            <td><input type="text"  value="<?php echo $dong['dang'] ?>" name="dang" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Ghi chú </th> 
            <td><input type="text"  value="<?php echo $dong['ghichu'] ?>" name="ghichu" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Hình ảnh</th> 
            <th>
                <input type="file"  value="<?php echo $dong['hinhanh'] ?>" name="hinhanh">
                <img src="modules/data/uploads/<?php echo $dong ['hinhanh']?>" width="150px">
            </th>
        </tr>


        <tr>  
            <td colspan="16"><input type="submit" name="suadanhmuc" value="Save"></td>
        </tr>
        <?php
        }
        ?>
  </form>
</table>    