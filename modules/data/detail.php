<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc   where id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $mysqli = new mysqli("localhost","root","","web_mysqli");
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>


<table border ="1" width="50%"  >
    <form method="POST" action="modules/data/controll_data.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" enctype="multipart/form-data">
        <?php
        while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
        ?> 
        
            
            <textarea row="100"  name="ghichu" style="resize: both"  class="ghichu1" >
            <?php echo $dong['ghichu']?>
            </textarea>
             <input type="submit"  name="suadanhmuc" value="Save" class="ghichu" >
        
        <?php
        }
        ?>
  </form>
</table>    





<?php
    $sql_chitiet = "SELECT * FROM tbl_danhmuc    where id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $mysqli = new mysqli("localhost","root","","web_mysqli");
    $query_chitiet= mysqli_query($mysqli,$sql_chitiet);
?>
<table class="table table-bordered" style=" width:1000px; margin-left:100px; margin-top:-250px;">
  <tr >
    
    <th>Số nhà</th>
    <th>Đường</th>
    <th>PH/Xã</th>
    <th>Q/Huyện</th>
    <th>Ngang</th>
    <th>Dài</th>
    <th>Diện tích</th>
    <th>Độ rộng</th>
    <th>Hướng</th>
    <th>Gía</th>
    <th>Bds</th>
    <th>Vị trí</th>
    <th>TenKH</th>
    <th>Sdt</th>
    <th>Đăng</th>
    

  </tr>
 
    <form method="POST" action="modules/data/controll_data.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
        <?php
        while($row = mysqli_fetch_array($query_chitiet)){
        ?>
        <tr>
        
        <tr>
   
    <td><?php echo $row['sonha'] ?></td>
    <td><?php echo $row['duong'] ?></td>
    <td><?php echo $row['xa'] ?></td>
    <td><?php echo $row['huyen'] ?></td>
    <td><?php echo $row['ngang'] ?></td>
    <td><?php echo $row['dai'] ?></td>
    <td><?php echo $row['dientich'] ?></td>
    <td><?php echo $row['dorong'] ?></td>
    <td><?php echo $row['huong'] ?></td>
    <td><?php echo $row['gia'] ?></td>
    <td><?php echo $row['bds'] ?></td>
    <td><?php echo $row['vitri'] ?></td>
    <td> <?php echo $row ['ten']?></td>
    <td><?php echo $row ['sdt']?></td>
    <td> <?php echo $row['dang']?></td>
    
    
  
  </tr>
  
        <?php
        }
        ?>
  </form>

</table>    

<?php
    $sql_chitiet = "SELECT * FROM tbl_danhmuc    where id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $mysqli = new mysqli("localhost","root","","web_mysqli");
    $query_chitiet= mysqli_query($mysqli,$sql_chitiet);
?>
<table border ="1" width="50%" >
  

  
 
    <form method="POST" action="modules/data/controll_data.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
        <?php
        while($row = mysqli_fetch_array($query_chitiet)){
        ?>
  <div class ="hinh" >
    <img src="modules/data/uploads/<?php echo $row ['hinhanh']?>" width="250px  " style="margin-top: 500px;" >
  </div> 
        <?php
        }
        ?>
  </form>

</table>    














