<p></p>
<table class="table table-bordered" style="  margin-left:300px; ">
    <form method="POST" action="modules/staff/controll_staff.php" >
                
        <tr>
            <th style="background: #d9d9d9">Họ và tên</th>
            <td><input type="text" name="hoten" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Email</th> 
            <td><input type="text" name="email" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Địa chỉ</th> 
            <td><input type="text" name="vaitro" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Sdt</th> 
            <td><input type="text" name="stt" style="padding: 4px; border: 1px solid #000000; width: 500px;"></td>
        </tr>
        
        <tr> 
            <th style="background: #d9d9d9">Vai Trò</th> 
            <th>
                <select name="tinhtrang">
                    <option value="1">Admin</option>
                    <option value="0">Trưởng phòng</option>
                    <option value="2">Nhân viên</option>
                    <option value="3">Cộng tác viên</option>
                </select>
            </th>
        </tr>
        
            <td colspan="11"><input type="submit" name="themthanhvien" value="Save "></td>
        </tr>
  </form>
</table>    