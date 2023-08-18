
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
            <p class="header "> NEWlifeMienTrung </p>
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
                        <li><a href="index123.php"> Trang chủ</a></li>
                        <li><a href="data.php?action=data&query=them">Bất động sản</a></li>
                        <li><a href="staff.php?action=staff&query=them">Thành viên</a></li>
                        <li><a href="posts.php?action=posts&query=them"> Bài viết</a></li>
                             
                        </ul>
                    </div>
            </div>
            <div class="trungtam">
            
                
                <div class="wrapper">
                <?php
                include("config/config.php");
                include("modules/header.php");
                include("modules/menu.php");
                include("modules/main.php");
                include("modules/footer.php");
                ?>
                </div> 
                
                

                         
            </div>
        </div>
        


    
</div>
</body>
</html>


