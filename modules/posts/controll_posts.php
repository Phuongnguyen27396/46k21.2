<?php
include('../../config/config.php');
$tieude = $_POST['tieude'];
$noidung= $_POST['noidung'];
$stt = $_POST['stt'];
$link = $_POST['link'];

//hình ảnh

$hinhanh =$_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh=time ().'_'.$hinhanh;





if(isset($_POST['thembaiviet'])){
    //them
    $sql_them = "INSERT INTO tbl_baiviet(tieude,noidung,stt,hinhanh,link) VALUE('".$tieude."','".$noidung."','".$stt."','".$hinhanh."','".$link."')";


    mysqli_query($mysqli,$sql_them);

    move_uploaded_file($hinhanh_tmp,"uploads/". $hinhanh);
   
    header('location:../../posts.php?action=posts&query=them');

    
   



    
}elseif(isset($_POST['suabaiviet'])=='xoa'){
    if ($hinhanh!=''){
        move_uploaded_file($hinhanh_tmp,"uploads/". $hinhanh); 
    //sua
        $sql_update = "UPDATE  tbl_baiviet SET tieude='".$tieude."',noidung='".$noidung."',stt='".$stt."',hinhanh='".$hinhanh."',link='".$link."' WHERE id_baiviet='$_GET[idbaiviet]'";
        
         
    }else{
        $sql_update = "UPDATE  tbl_baiviet SET tieude='".$tieude."',noidung='".$noidung."',stt='".$stt."',link='".$link."' WHERE id_baiviet='$_GET[idbaiviet]'";
         
    }
    mysqli_query($mysqli,$sql_update);
    header('location:../../posts.php?action=posts&query=them');





}elseif(isset($_POST['suabaiviet'])=='xoa'){

    //xoa
}else{
    $id=$_GET['idbaiviet'];
    $sql="SELECT*FROM tbl_baiviet WHERE id_baiviet='$id' LIMIT 1";
    $query=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_array($query)){
        unlink("uploads/".$row['hinhanh']);
        
    }
    $sql_xoa = "DELETE FROM tbl_baiviet WHERE id_baiviet='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('location:../../posts.php?action=posts&query=them');
}
?>