<?php
        $con = mysqli_connect('localhost', 'root', '', 'db');

        if(isset($_REQUEST['up'])){
              
    // $dbemail=$row['email'];  email ='{$dbemail}',
     $dbpass=$row['password'];
     $dbname=$row['name'];
     $dbage=$row['age'];
       }

            
  
     $up = "UPDATE who SET name='{$dbname}', password='{$dbpassword}', age='{$age}'  WHERE name= '{$name}' ";
     $result = mysqli_query($con, $up);

    
   if($result) {echo "updated!!!";}
      
       
        ?>
