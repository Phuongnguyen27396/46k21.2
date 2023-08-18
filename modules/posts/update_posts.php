<?php
    $sql_sua_baiviet = "SELECT * FROM tbl_baiviet    where id_baiviet='$_GET[idbaiviet]' LIMIT 1";
    
    $query_sua_baiviet = mysqli_query($mysqli,$sql_sua_baiviet);
?>


<table class="table table-bordered" style="  margin-left:300px; ">
    <form method="POST" action="modules/posts/controll_posts.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>" enctype="multipart/form-data">
        <?php
        while($dong = mysqli_fetch_array($query_sua_baiviet)){
        ?> 
        <tr>
            <th style="background: #d9d9d9">Tiêu đề </th>
            <td><input type="text"  value="<?php echo $dong['tieude'] ?>" name="tieude"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Nội dung</th> 
            <td><input type="text"  value="<?php echo $dong['noidung'] ?>" name="noidung"></td>
        </tr>
        
        
        <tr> 
            <th style="background: #d9d9d9">Stt</th> 
            <td><input type="text"  value="<?php echo $dong['stt'] ?>" name="stt"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Hình ảnh</th> 
            <td>
                <input type="file"  value="<?php echo $dong['hinhanh'] ?>" name="hinhanh">
                <img src="modules/posts/uploads/<?php echo $dong ['hinhanh']?>" width="150px">
            </td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">link</th> 
            
            <td><input type="text"  value="<?php echo $dong['link'] ?>" name="link"></td>
            
        </tr>

        <tr>  
            <td colspan="4"><input type="submit" name="suabaiviet" value="Save"></td>
        </tr>
        <?php
        }
        ?>
  </form>
</table>    