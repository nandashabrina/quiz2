<!DOCTYPE HTML>
<html>
    <head>
        <title> Login Page </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
            <div class="topnav">
            <p id="top-header"><i>Periplus Bookstore</i></p>
            <a class="active" href="#login">Login</a>
            <a href="homeCRUD.php" action="homeCRUD.php">Home</a>
        </div>
        <h1>Welcome Periloves!</h1>
        <?php
            if(isset($_GET["error"])){
                $error = $_GET["error"];
            }
            else{
                $error = "";
            }

            $message = "";
            if($error == "gagal"){
                $message = "Gagal login, silahkan coba kembali";
            }
        ?>
        <p style="color:red"><?php echo $message;?></p>
        <form action = "prosesLogin.php" method = "post">
            <h3>Login</h3>
            <table>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" size="20"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" size="20"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="login" value="Login"></td>
                </tr>
            </table>
        </form>
        <div class="fixed">
                <footer>
                    Since 2022 &copy; Periplus Bookstore
                </footer>
        </div>
    </body>
</html>