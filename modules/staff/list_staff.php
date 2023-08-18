<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_thanhvien ORDER BY hoten DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<button type="button" class="btn btn-outline-warning" style="margin-top: 40px;"><a href="staff.php?action=staff&query=sua1" style="color: black;text-decoration: none;font-size: 26px;">+</a></button>
<table class="table table-bordered" style=" width:1100px; margin-left:150px; margin-top:40px;">
 
  <tr class="hihi">
    <th>Id</th>
    <th>Họ và tên</th>
    <th>Email</th>
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
    <th>Vai trò</th>

    <th>Hành động</th>
  </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;   /*  cộng thứ tự chỗ id  */
?>

    <tr>
    <td><?php echo $i ?></td>    
    <td><?php echo $row['hoten'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['vaitro'] ?></td>
    <td><?php echo $row['stt'] ?></td>
    
    <td><?php 
    if( $row['tinhtrang']==1){
        echo 'Admin';
    }elseif ( $row['tinhtrang']==0) {
    echo 'Trưởng phòng';
    }elseif ( $row['tinhtrang']==2) {
      echo 'Nhân viên';
    }elseif ( $row['tinhtrang']==3) {
      echo 'Cộng tác viên'; 

    }
     ?></td>
    
    <td>
        <a href="modules/staff/controll_staff.php?idthanhvien=<?php echo $row['id_thanhvien'] ?>">Xóa</a> | <a href="?action=staff&query=sua&idthanhvien=<?php echo $row['id_thanhvien'] ?>"  >sửa</a> 
  </tr>

  <?php
  }
  ?>
  
</table>   