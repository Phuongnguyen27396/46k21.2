
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
    background-image: url('/image/hinh2.jpg');  
}

</style>
</head>
<body>
    
<div class="wrapper1">
        <div class="text-bg-success p-3">
            <p class="header "> Bất động sản </p>
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
                        <li><a href="/manager.php"> Trang chủ</a></li>
                        <li><a href="/manager_data.php">Bất động sản</a></li>
                        <li><a href="/manager_staff.php">Thành viên</a></li>
                           
                        </ul>
                    </div>
            </div>
            <div class="trungtam">
            <?php
                $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY gia DESC";
                $mysqli = new mysqli("localhost","root","","web_mysqli");
                $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
            ?>

<button type="button" class="btn btn-outline-warning" style="margin-top: 40px;margin-left:200px;"><a href="data.php?action=data&query=sua1" style="color: black;text-decoration: none;font-size: 26px;">+</a></button>
<table class="table table-bordered" style=" width:1100px; margin-left:250px; margin-top:40px;">
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
                <td><?php echo $row['huyen'] ?></td>
                <td><?php echo $row['ngang'] ?></td>
                <td><?php echo $row['dai'] ?></td>
                <td><?php echo $row['dientich'] ?></td>
                <td><?php echo $row['dorong'] ?></td>
                <td><?php echo $row['huong'] ?></td>
                <td><?php echo $row['gia'] ?></td>
                <td><?php echo $row['bds'] ?></td>
                <td><?php echo $row['vitri'] ?></td>
                <td>
                <a href="data.php?action=data&query=xem&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Chi tiết</a>
                </td>
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









































