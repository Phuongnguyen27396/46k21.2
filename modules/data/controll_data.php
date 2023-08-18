<?php
include('../../config/config.php');
$sonha = $_POST['sonha'];
$xa= $_POST['xa'];
$huyen = $_POST['huyen'];
$ngang = $_POST['ngang'];
$dai = $_POST['dai'];
$dientich = $_POST['dientich'];
$dorong = $_POST['dorong'];
$huong= $_POST['huong'];
$gia = $_POST['gia'];
$bds= $_POST['bds'];
$vitri = $_POST['vitri'];
$duong = $_POST['duong'];
$ten = $_POST['ten'];
$sdt = $_POST['sdt'];
$dang = $_POST['dang'];
$ghichu = $_POST['ghichu'];
//hình ảnh

$hinhanh =$_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh=time ().'_'.$hinhanh;




if(isset($_POST['themdanhmuc'])){
    //them
    $sql_them = "INSERT INTO tbl_danhmuc(sonha,xa,huyen,ngang,dai,dientich,dorong,huong,gia,bds,vitri,duong,ten,sdt,dang,hinhanh,ghichu) VALUE('".$sonha."','".$xa."','".$huyen."','".$ngang."','".$dai."',
    
    
    '".$dientich."','".$dorong."','".$huong."','".$gia."','".$bds."','".$vitri."','".$duong."','".$ten."','".$sdt."','".$dang."','".$hinhanh."','".$ghichu."')";


    mysqli_query($mysqli,$sql_them);

    move_uploaded_file($hinhanh_tmp,"uploads/". $hinhanh);
    header('location:../../data.php?action=data&query=them');





    
}elseif(isset($_POST['suadanhmuc'])=='xoa'){
    if ($hinhanh!=''){
        move_uploaded_file($hinhanh_tmp,"uploads/". $hinhanh); 
    //sua
        $sql_update = "UPDATE  tbl_danhmuc SET sonha='".$sonha."',xa='".$xa."',huyen='".$huyen."',ngang='".$ngang."',dai='".$dai."',dientich='".$dientich."',dorong='".$dorong."'
        ,huong='".$huong."',gia='".$gia."',Bds='".$bds."',vitri='".$vitri."',duong='".$duong."' ,ten='".$ten."',sdt='".$sdt."',dang='".$dang."',hinhanh='".$hinhanh."',ghichu='".$ghichu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
        
    }else{
        $sql_update = "UPDATE  tbl_danhmuc SET sonha='".$sonha."',xa='".$xa."',huyen='".$huyen."',ngang='".$ngang."',dai='".$dai."',dientich='".$dientich."',dorong='".$dorong."'
        ,huong='".$huong."',gia='".$gia."',bds='".$bds."',vitri='".$vitri."',duong='".$duong."' ,ten='".$ten."',sdt='".$sdt."',dang='".$dang."',ghichu='".$ghichu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
        
    }
    mysqli_query($mysqli,$sql_update);
    header('location:../../data.php?action=data&query=them');








}elseif(isset($_POST['suadanhmuc'])=='xoa'){

    //xoa
}else{
    $id=$_GET['iddanhmuc'];
    $sql="SELECT*FROM tbl_danhmuc WHERE id_danhmuc='$id' LIMIT 1";
    $query=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_array($query)){
        unlink("uploads/".$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('location:../../data.php?action=data&query=them');
}




?>




