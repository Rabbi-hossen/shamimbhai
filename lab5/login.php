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
            <td colspan="3">


                <form action="handler.php" method="post">

                    <fieldset>
                        <legend>Login</legend>
                        <table>
                            <tr>
                                <td>User Name </td>
                                <td>:<input type="text" name="name" value=""></td>
                            </tr>
                            <tr>
                                <td>Password </td>
                                <td>
                                    :<input type="password" name="password" value="">
                                </td>
                            </tr>


                        </table>
                        <hr>
                        <input type="checkbox" name="check" value=""> Remerber Me <br> <br>
                        <input type="submit" name="submit" value="submit">
                        <a href="forgotpassword.php">Forgot Password?</a>

                    </fieldset>

                </form>



            </td>



        <tr style="height:50px">
            <td colspan=3 align="center">coppy right (C) 2017</td>
        </tr>


    </table>

</body>

</html>