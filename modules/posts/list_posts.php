<?php
    $sql_lietke_baiviet = "SELECT * FROM tbl_baiviet ORDER BY stt DESC";
    
    $query_lietke_baiviet = mysqli_query($mysqli,$sql_lietke_baiviet );

?>
 <button type="button" class="btn btn-outline-warning" style="margin-top: 40px;"><a href="posts.php?action=posts&query=sua1" style="color: black;text-decoration: none;font-size: 26px;">+</a></button>
<table class="table table-bordered" style=" width:1150px; margin-left:150px; margin-top:40px;">

  <tr >
    
    <th>Tiêu đề</th>
    
    <th>STT</th>
    <th>Link</th>
    <th style=" width:80px"> Hành động</th>

  </tr>
 
<form >
        <?php
        while($row = mysqli_fetch_array($query_lietke_baiviet )){
        ?>
        
        <tr>
            <td><?php echo $row['tieude'] ?></td>
           
            <td><?php echo $row['stt'] ?></td>
            <td><?php echo $row['link'] ?></td>
    
            <td>
              <a href="modules/posts/controll_posts.php?idbaiviet=<?php echo $row['id_baiviet'] ?>">Xóa</a> | <a href="?action=posts&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>">sửa</a>
            </td>
        </tr>
              
         
        <?php
        }
        ?>
  </form>

</table>    