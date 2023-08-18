
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
                        <li><a href="employee.php"> Trang chủ</a></li>
                        <li><a href="/employee_data.php">Bất động sản</a></li>
                        <li><a href="/employee_staff.php">Thành viên</a></li>
                        
                             
                        </ul>
                    </div>
           

</div>


                
            </div>
            <div class="trungtam">



                    <div class="row g-0 bg-body-secondary position-relative" style=" height: 550px; margin-left:200px; margin-top:10px; "  >
                        <?php
                            $sql_lietke_baiviet = "SELECT * FROM tbl_baiviet ORDER BY stt DESC";
                            $mysqli = new mysqli("localhost","root","","web_mysqli");
                           $query_lietke_baiviet = mysqli_query($mysqli,$sql_lietke_baiviet );
                        ?>              
                                <?php
                                    while($row = mysqli_fetch_array($query_lietke_baiviet )){
                                ?>  
                                <div class="col-md-6 mb-md-0 p-md-4" >
                                    <img src="modules/posts/uploads/<?php echo $row ['hinhanh']?>"   style="max-width: 250px; max-height: 200px;   " >
                                </div>                         
                                <div class="" style="max-width: 250px; max-height: 200px; margin-left:-300px;  margin-top:30px;">
                                    <h4>  <?php echo $row['tieude'] ?></h4>
                                    <a href="<?php echo $row['link'] ?>" style=" margin-left:50px;margin-top:5px;" >Xem chi tiết</a>
                                    <div class="col-md-6 mb-md-0 p-md-4"  style=" margin-left:-10px;margin-top:5px;"><h6><?php echo $row['noidung'] ?> </h6>
                                    </div>
                                
</div>    
                                    
                                 
                                      


                                <?php
                                }
                                ?>
                           
                            </div>                            
            </div>
        </div>
</div>

</body>
</html>






