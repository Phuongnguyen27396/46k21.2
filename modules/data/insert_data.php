<p></p>
<table class="table table-bordered" style="  margin-left:300px; ">
    <form method="POST" action="modules/data/controll_data.php" enctype="multipart/form-data">
                
        <tr>
            <td style="background: #d9d9d9">Số nhà  </td>
            <td><input type="text" name="sonha"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Đường</td> 
            <td><input type="text" name="duong" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">PH/Xã</td> 
            <td><input type="text" name="xa"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Q/Huyện</td> 
            <td>
            <select name="huyen">
                    <option value="0">Hải Châu</option>
                    <option value="1">Cẩm Lệ</option>
                    <option value="2">Thanh Khê</option>
                    <option value="3">Liên Chiểu</option>
                    <option value="4">Ngũ Hành Sơn</option>
                    <option value="5">Sơn Trà</option>
                    <option value="6">Huyện Hòa Vang</option>
                    <option value="7">Huyện Hoàng Sa</option>
                </select>
            </td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Ngang</td> 
            <td><input type="text" name="ngang"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Dài</td> 
            <td><input type="text" name="dai"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Diện tích</td> 
            <td><input type="text" name="dientich"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Độ rộng</td> 
            <td><input type="text" name="dorong"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Hướng</td> 
            <td><input type="text" name="huong"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Gía</td> 
            <td><input type="text" name="gia"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Bds</td> 
            <td>
            <select name="bds">
                    <option value="0">Bán</option>
                    <option value="1">Cho thuê</option>
                </select>
            </td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Vị trí</td> 
            <td><input type="text" name="vitri"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">TenKH</td> 
            <td><input type="text" name="ten"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Sdt</td> 
            <td><input type="text" name="sdt"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Dang</td> 
            <td><input type="text" name="dang"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <td style="background: #d9d9d9">Hinh anh</td> 
            <td><input type="file" name="hinhanh"style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr>  
            <td colspan="16"><input type="submit" name="themdanhmuc" value="Save"></td>
        </tr>
  </form>
</table>    