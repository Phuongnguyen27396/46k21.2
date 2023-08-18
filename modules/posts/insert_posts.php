<p></p>
<table class="table table-bordered" style="  margin-left:300px; ">
    <form method="POST" action="modules/posts/controll_posts.php" enctype="multipart/form-data" >
                
        <tr>
            <th style="background: #d9d9d9"> Tiêu đề</th>
            <th><input type="text" name="tieude" style="padding: 4px; border: 1px solid #000000; width: 500px;"></th>
        </tr>
        
        <tr> 
            <th style="background: #d9d9d9">Stt</th> 
            <th><input type="text" name="stt" style="padding: 4px; border: 1px solid #000000; width: 500px;"></th>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">link</th> 
            <th><input type="text" name="link" style="padding: 4px; border: 1px solid #000000; width: 500px;"></th>
        </tr>
        <tr> 
            <th style="background: #d9d9d9">Hình ảnh</th> 
            <th><input type="file" name="hinhanh" style="padding: 4px; border: 1px solid #000000; width: 500px;"></th>
        </tr>
        
        <tr>  
            <td colspan="4"><input type="submit" name="thembaiviet" value="Save"></td>
        </tr>
  </form>
</table>     