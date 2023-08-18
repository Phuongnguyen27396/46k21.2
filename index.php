




<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-image: url('image/hinh2.jpg');
        position: absolute;
        top: 20%;
        bottom: 0;
        left: 0;
        right: 0;
    }



    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);


    }

    .container h2 {
        text-align: center;

    }

    .container input[type="text"],
    .container input[type="password"] {
        width: 90%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        border-radius: 10px;

    }




    .txt2 {
        font-size: 14px;
        margin-top: 15px;
        margin-left: 25px;
    }

    .btn-dangnhap {
        background-color: #80ff80;
        /* Màu nền */
        color: #000;
        /* Màu chữ */
        border: none;
        /* Loại bỏ viền */
        padding: 10px 155px;
        /* Kích thước nút */
        border-radius: 10px;
        /* Bo góc nút */
        cursor: pointer;
        /* Biến con trỏ chuột thành dấu nhấp nháy */
        font-size: 15px;

    }
    </style>
</head>

<body>
<div class="container">
        <?php 
    if(isset( $_POST['dangnhap'])){ 
      $email = $_POST['email'];
      $password = $_POST['password'];
      if($email == 'adminbds@gmail.com' && $password == 'adminbds123@'){
        header('Location:index123.php');
      }elseif($email == 'truongphongbds@gmail.com' && $password == 'truongphongbds123@'){
        header('Location:manager.php');
    }elseif($email == 'nhanvienbds@gmail.com' && $password == 'nhanvienbds123@'){
        header('Location:employee.php'); 
    }elseif($email == 'congtacvienbds@gmail.com' && $password == 'congtacvienbds123@'){
        header('Location:collaborators.php'); 
        
      }else{
        echo"tài khoản mật khẩu bị sai";
      }
    }
  ?>
        <h2>Đăng nhập</h2>
        <form id="from_reg" action="index.php" method="post">
            <label> Email </label>
            <input type="text" name="email">

            <label>Password</label>
            <input type="password" name="password">

            <button type="submit" name="dangnhap" class="btn-dangnhap"> Đăng nhập</button>
        </form>


        <div class="text-center p-t-70 txt2">
            Trang web quản lý dữ liệu <i class="far fa-copyright" aria-hidden="true"></i>
            <a class="txt2" href="https://www.facebook.com/phuongnguyendang123/"> Code bởi phuong Nguyen</a>
        </div>
    </div>

</body>


</html>
