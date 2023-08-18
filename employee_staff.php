<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-with, initial-scale=1.0"> 
    <title> admincp</title>
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
    <link rel="stylesheet" type="text/css" href="css/min1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <style>
body {
    margin: 0;
    padding: 0;
    background-image: url('image/hinh2.jpg');  
}

</style>
</head>
<body>
    
<div class="wrapper1">
        <div class="text-bg-success p-3">
            <p class="header "> BẤT ĐỘNG SẢN </p>
            <div class="d-flex justify-content-end">    
            <button class="btn btn-outline-danger d-flex align-items-center justify-content-center" style="margin-top: -40px;">
            <a href="javascript:void(0);" id="logout-link" style="color: white; text-decoration: none;">Log out</a>
            </button>
        </div>
        <script>
             document.getElementById("logout-link").addEventListener("click", function() {
            window.location.href = "index.php";
            });
        </script>    
        </div>
        
        <div id="main">
            <div class="vung2"> 
                    <div class="menu">
                        <ul class="list_menu">
                        <li><a href="/employee.php"> Trang chủ</a></li>
                        <li><a href="/employee_data.php">Bất động sản</a></li>
                        <li><a href="/employee_staff.php">Thành viên</a></li>
                        
                    </div>
            </div>
            <div class="trungtam">
            <?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_thanhvien ORDER BY hoten DESC";
    $mysqli = new mysqli("localhost","root","","web_mysqli");
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>

<table class="table table-bordered" style=" width:1100px; margin-left:250px; margin-top:40px;">
  <tr class="lietke_nhanvien">
    <th>Id</th>
    <th>Họ và tên</th>
    <th>Email</th>
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
    <th>Vai trò</th>
   
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
  </tr>

  <?php
  }
  ?>
  
</table>      
            </div>
        </div>
</div>
</body>
</html>





