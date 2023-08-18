<?php
include('../../config/config.php');
$hoten = $_POST['hoten'];
$email= $_POST['email'];
$tinhtrang= $_POST['tinhtrang'];
$vaitro = $_POST['vaitro'];
$tendangnhap = $_POST['tendangnhap'];
$pass= $_POST['pass'];
$stt= $_POST['stt'];


if(isset($_POST['themthanhvien'])){
    //them
    $sql_them = "INSERT INTO tbl_thanhvien(hoten,email,vaitro,tinhtrang,stt) VALUE('".$hoten."','".$email."','".$vaitro."','".$tinhtrang."','".$stt."')";


    mysqli_query($mysqli,$sql_them);
    header('location:../../staff.php?action=staff&query=them');
    
}elseif(isset($_POST['suathanhvien'])){
    //sua
    $sql_update = "UPDATE  tbl_thanhvien SET hoten='".$hoten."',email='".$email."',vaitro='".$vaitro."',tinhtrang='".$tinhtrang."',stt='".$stt."' WHERE id_thanhvien='$_GET[idthanhvien]'";

    mysqli_query($mysqli,$sql_update);
    header('location:../../staff.php?action=staff&query=them');

    //xoa
}else{ 
 
    $id=$_GET['idthanhvien'];
    $sql_xoa = "DELETE FROM tbl_thanhvien WHERE id_thanhvien='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('location:../../staff.php?action=staff&query=them');
}
?>