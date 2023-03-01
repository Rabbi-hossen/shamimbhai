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

                <a href="login.php">Logged in as </a> |
                <a href="home.php">LogOut</a> 
                
            </th>

        </tr>

        <tr style="height:200px" >
            <td> 
                <b>Account</b> <hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="viewprofile.php">View Profile</a></li>
                    <li><a href="editprofile.php">Edit Profile</a></li>
                    <li><a href="changeprofilephoto.php">Change Profile Picture</a></li>
                    <li><a href="changepassword.php">Change Password</a></li>
                    <li><a href="logout.php">LogOut</a></li>

                </ul>

            </td>
            <td colspan="2" >
              <form action="handler.php" method="post" enctype="multipart/form-data" >
                <fieldset>

                <legend>PROFILE PICTURE</legend>

                <img src="tempphoto.jpg" alt="photo">  <br>
                <input type="file" name="photo" id="photo" value=""/>
        
                <hr>
                <input type="submit" name="submit" value="upload"">
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