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

                <a href="login.php">Logged in as </a> |
                <a href="home.php">LogOut</a> 

            </th>

        </tr>

        <tr style="height:200px">
            <td>
                <b>Account</b>
                <hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="viewprofile.php">View Profile</a></li>
                    <li><a href="editprofile.php">Edit Profile</a></li>
                    <li><a href="changeprofilephoto.php">Change Profile Picture</a></li>
                    <li><a href="changepassword.php">Change Password</a></li>
                    <li><a href="logout.php">LogOut</a></li>

                </ul>

            </td>
            <td colspan="2">
                <form action="handler.php" method="post" enctype="multipart/form-data">
                    <fieldset>

                        <legend>EDIT PROFILE</legend>
                        <table>
                            <tr>
                                <td>Name</td>

                                <td>
                                    <!--"<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''  ?>"-->
                                    :<input type="text" name="name" value="">
                                 </td>


                            </tr>


                            <tr>
                                <td>Email</td>
                                <!--<?php echo isset($_SESSION['email']) ? $_SESSION['eamil'] : '' ?>  > -->

                                <td> :<input type="email" name="email" value="" </td>



                               
                            </tr>

                            
                            
                            
                            <tr>
                                <td colspan=" 2">
                                    <fieldset>
                                        Gender 
                                        <input type="radio" name="gender" value="male">Male
                                        <input type="radio" name="gender" value="female">Female
                                        <input type="radio" name="gender" value="other">other

                                    </fieldset>
                                </td>
                            </tr>
                            <tr>

                                <td colspan="2">
                                    <fieldset>
                                        Date of Birth
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

        </tr>
    </table>


    </fieldset>
    </form>
    </td>



    </tr>
    <tr style="height:50px">
        <td colspan=3 align="center">coppy right (C) 2017</td>
    </tr>


    </table>

</body>

</html>