<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table border="1" width=70% align="center">
        <tr style="height:50px"" >
            <th width=20%> <a href=" home.php"><img src="pic.jpg" alt="logo"></a> </th>
            <th width=60%></th>
            <th width=20%>

                <a href="home.php">home</a> |
                <a href="login.php">login</a> |
                <a href="registration.php">registration</a> |
            </th>

        </tr>

        <tr style="height:200px">
            <td >

            </td>
            <td>

                 <?php 
                 
                 session_start();

                   $rl = true;
                   foreach($_REQUEST as $k => $value ){
                    $_SESSION[$k]=$value;
                    $_SESSION['@'.$k] = $value;
                    if(!isset($_REQUEST[$k]) or empty($value)) {
                        $rl = false;

                    }
                    
                }
             
                // 
                if( $rl && isset($_REQUEST['submit']) && isset($_REQUEST['password'])==isset($_REQUEST['c_password']) ){
                    foreach($_REQUEST as $k => $value ){
                        if($k[0]=='@') continue;
                        unset($_SESSION[$k]);
                    }
                    ?>

                    <h1>registration completed</h1>
                    <a href="login.php">login now</a>

                    <?php 
                }
          
                else {
                          header('loaction: registration.php '); 
                          exit;  
                }
                ?>
            </td>
            <td></td>

        </tr>
        <tr style="height:50px">
            <td colspan=3 align="center">coppy right (C) 2017</td>
        </tr>


    </table>

</body>

</html>