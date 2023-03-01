<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table border="1" width=70% align="center">
        <tr style="height:50px"" >
            <th width=20%> <a href="home.php"><img src="pic.jpg" alt="logo"></a>  </th>
            <th width=60% ></th>
            <th width=20% >

            <a href="home.php">home</a> |
                <a href="login.php">login</a> |
                <a href="registration.php">registration</a> |
            </th>

        </tr>

        <tr style="height:200px" >
            <td colspan="3"  > 
                 
            <form action="handler.php" method="post"  >
                <fieldset   >
                    <legend  >FORGOT PASSWORD</legend>
                    Enter Email:<input type="email" name="email" value="" >
                    <hr>
                    <input type="submit" name="submit" value="submit">
                </fieldset>
            </form>

            </td>


        </tr>
        <tr style="height:50px"  >
           <td  colspan=3 align="center" >coppy right (C) 2017</td>  
        </tr>


    </table>

</body>

</html>