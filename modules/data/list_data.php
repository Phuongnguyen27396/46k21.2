  <?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY gia DESC";
    $mysqli = new mysqli("localhost","root","","web_mysqli");
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>

        <button type="button" class="btn btn-outline-warning" style="margin-top: 40px;"><a href="data.php?action=data&query=sua1" style="color: black;text-decoration: none;font-size: 26px;">+</a></button>
<table class="table table-bordered"style=" width:1200px; margin-left:150px; margin-top:40px;font-size: 13px;">

  <tr class="hihi">
    <th>Id</th>
    <th>Số nhà</th>
    <th>Đường</th>
    <th>PH/Xã</th>
    <th>Q/Huyện</th>
    <th>Ngang</th>
    <th>Dài</th>
    <th>Diện tích</th>
    <th>Độ rộng</th>
    <th>Hướng</th>
    <th>Giá</th>
    <th>Bds</th>
    <th>Vị trí</th>
    
    <th>Hành động</th>

  </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;   /*  cộng thứ tự chỗ id  */
?>

    <tr>
    <td><?php echo $i ?></td>    
    <td><?php echo $row['sonha'] ?></td>
    <td><?php echo $row['duong'] ?></td>
    <td><?php echo $row['xa'] ?></td>
    <td>
    <?php 

    if ( $row['huyen']==0) {
      echo 'Hải Châu';
    }elseif ( $row['huyen']==1) {
      echo 'Cẩm Lệ';
    }elseif ( $row['huyen']==2) {
      echo 'Thanh Khê'; 
    }elseif ( $row['huyen']==3) {
      echo 'Liên Chiểu'; 
    }elseif ( $row['huyen']==4) {
      echo 'Ngũ Hành Sơn'; 
    }elseif ( $row['huyen']==5) {
      echo 'Sơn Trà'; 
    }elseif ( $row['huyen']==6) {
      echo 'Huyện Hòa Vang'; 
    }elseif ( $row['huyen']==7) {
      echo 'Huyện Hoàng Sa'; 
    }
     ?>
    </td>
    <td><?php echo $row['ngang'] ?></td>
    <td><?php echo $row['dai'] ?></td>
    <td><?php echo $row['dientich'] ?></td>
    <td><?php echo $row['dorong'] ?></td>
    <td><?php echo $row['huong'] ?></td>
    <td><?php echo $row['gia'] ?></td>
    <td>
    <?php 

if ( $row['bds']==0) {
  echo 'Bán';
}elseif ( $row['bds']==1) {
  echo 'Cho thuê';
}
 ?>
    </td>
    <td><?php echo $row['vitri'] ?></td>
   

    <td>
        <a href="modules/data/controll_data.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | <a href="?action=data&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">sửa</a>| <a href="?action=data&query=xem&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xem</a>
    </td>
  </tr>

  <?php
  }
  ?>
  
</table>   
</table> 