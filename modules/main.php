<div class="clear"></div>
<div class="main">
    <?php
                if(isset($_GET['action']) && $_GET['query']){
                    $tam = $_GET ['action'];
                    $query = $_GET ['query'];
                }else{
                    $tam = '';
                    $query = '';
                }
                if($tam=='data' && $query=='them'){
                    include("modules/data/list_data.php");   
                }elseif ($tam=='data' && $query=='sua1') {   
                    include("modules/data/insert_data.php");
                }elseif ($tam=='data' && $query=='sua') {
                    include("modules/data/update_data.php");
                }elseif ($tam=='data' && $query=='xem') {
                    include("modules/data/detail.php");
                }elseif ($tam=='data' && $query=='xem') {
                    include("modules/data/manager_data.php");    
                }elseif ($tam=='data' && $query=='xem') {
                    include("modules/data/employee_dataxem.php"); 
                }elseif ($tam=='data' && $query=='xem') {
                    include("modules/data/collaborators_data.php");     
                }elseif ($tam=='data' && $query=='xem') {
                    include("modules/data/timkiem.php");   
                    
                }elseif ($tam=='staff' && $query=='them') {
                    include("modules/staff/list_staff.php");
                }elseif ($tam=='staff' && $query=='sua1') {
                    include("modules/staff/insert_staff.php");
                    
                }elseif ($tam=='staff' && $query=='sua') {
                    include("modules/staff/update_staff.php");
                }elseif ($tam=='staff' && $query=='sua') {
                    include("modules/staff/manager_staff.php");   
                }elseif ($tam=='staff' && $query=='sua') {
                    include("modules/staff/employee_staff.php");   
                }elseif ($tam=='staff' && $query=='sua') {
                    include("modules/staff/collaborators_staff.php");       
            
                }elseif ($tam=='posts' && $query=='them') {
                    include("modules/posts/list_posts.php");
                }elseif ($tam=='posts' && $query=='sua1') {
                    include("modules/posts/insert_posts.php");
                    
                }elseif ($tam=='posts' && $query=='sua') {
                    include("modules/posts/update_posts.php"); 
                            
                }
                else {
                    include("modules/dashboard.php");
                }
    ?>
</div>   