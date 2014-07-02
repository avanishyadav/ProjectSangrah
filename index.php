<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>www.sangrah.com</title>
    </head>
    <body align="center">
        <form method="post" action=""
        <h1>Welcome to the internal software of sangrah.com</h1>
        <table align="center">
            <tr>
                <td>User Name :-</td>
                <td><input type="text" name="txt1"></td>
            </tr>
            <tr>
                <td>Password :-</td>
                <td><input type="password" name="txt2"></td>
            </tr>
            <tr>
                <td><input type="submit"  value="Login"></td>
                <td><input type="submit"  value="Cancel"></td>
                <td><input type="submit" value="Reset"></td>
            </tr>
        </table>
        <?php
        include('conn.php');
session_start();
if (!isset($_SESSION['member_id'])){
header('location:index.php');
}
//
?>
<a href="logout.php">logout</a>
</br>
</br>


    </body>
</html>
