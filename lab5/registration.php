<?php  
session_start();

?>

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

        <tr style="height:500px">
            <td>

            </td>
            <td>
                <form action="regi_check.php" method="post">
                    <fieldset>
                        <legend>
                            REGISTRATION
                        </legend>




                        <table border="0" align="center">

                            <tr>
                                <td>Name</td>

                                <td>
                                    <!-- //"<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''  ?>"-->
                                    :<input type="text" name="name" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''  ?>" </td>


                            </tr>


                            <tr>
                                <td>Email</td>
                                <!--<?php echo isset($_SESSION['email']) ? $_SESSION['eamil'] : '' ?>  > -->

                                <td> :<input type="email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>" </td>




                            </tr>

                            <tr>
                                <td>User Name</td>
                                <!--<?php echo isset($_SESSION['u_name']) ? $_SESSION['u_name'] : '' ?>"-->
                                <td> :<input type="text" name="u_name" value="<?php echo isset($_SESSION['u_name']) ? $_SESSION['u_name'] : '' ?> " </td>


                            </tr>
                            <tr>
                                <td>Password</td>
                                <!--<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : '' ?> -->
                                <td> :<input type=" password" name="password" value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : '' ?>" </td>


                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <!--<?php echo isset($_SESSION['c_password']) ? $_SESSION['c_password'] : '' ?>-->
                                <td> :<input type="password" name="c_password" value="<?php echo isset($_SESSION['c_password']) ? $_SESSION['c_password'] : '' ?>" </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender </legend>
                                        <input type="radio" name="gender" value="male">Male
                                        <input type="radio" name="gender" value="female">Female
                                        <input type="radio" name="gender" value="other">other

                                    </fieldset>
                                </td>
                            </tr>
                            <tr>

                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date of Birth</legend>
                                        <input type="date" name="date" value="">
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <input type="submit" name="submit" value="submit">
                                    <input type="reset" name="reset" value="reset">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" >
                                    <?php 
                                    if(isset($_SESSION['submit'])){
                                        if($_SESSION['password']!=$_SESSION['c_password']) {
                                            echo "password not match <br>";
                                            exit;
                                        }

                                        if ( !isset($_SESSION['name']) ){
                                            echo "enter name";
                                        }
                                    }
                                    
                                    
                                    ?>

                                </td>
                            </tr>

        </tr>
    </table>

    </fieldset>
    </form>
    </td>
    <td>

    </td>



    </tr>
    <tr style="height:50px">
        <td colspan="3" align="center">coppy right (C) 2017</td>

    </tr>


    </table>

</body>

</html>