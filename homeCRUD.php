<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="topnav">
            <p id="top-header"><i>Periplus Bookstore</i></p>
            <a href="loginForm.php" action="loginForm.php">Login</a>
            <a class="active" href="#home">Home</a>
        </div>
        <h1>Welcome Periloves!</h1>
        <form action="search.php">
            Get the book here (type the title):
            <input type="text" name="carinama">
            <input type="submit" value="Search">
        </form>
        <br>
        <table>
            <tr>
                <th> Code </th>
                <th> Title </th>
                <th> Writer </th>
                <th> Details </th>
            </tr>
            <?php
                include "myconnection.php";

                $query = "SELECT * FROM buku";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        ?>
                <tr>
                    <td><?php echo $row["id_buku"]; ?></td>
                    <td><?php echo $row["judul"]; ?></td>
                    <td><?php echo $row["pengarang"]; ?></td>
                    <td>
                        <a href="detailPage.php?id_buku=<?php echo $row["id_buku"];?>">
                        <button>Detail</button> </a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>           
        </table>
        <div class="fixed">
                <footer>
                    Since 2022 &copy; Periplus Bookstore
                </footer>
        </div>
    </body>
</html>