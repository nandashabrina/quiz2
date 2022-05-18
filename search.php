<!DOCTYPE HTML>
<html>
    <head>
        <title> Home </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="topnav">
            <p id="top-header"><i>Periplus Bookstore</i></p>
            <a href="loginForm.php" action="loginForm.php">Login</a>
            <a href="homeCRUD.php" action="homeCRUD.php">Home</a>
        </div>
        <h1>Search Results</h1>
        <table>
            <tr>
                <th> Code </th>
                <th> Title </th>
                <th> Writer </th>
                <th> Details </th>
            </tr>
            <?php
                $title = $_GET["carinama"];
                include "myconnection.php";

                $query = "SELECT * FROM buku WHERE judul LIKE '%$title%'";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        ?>
                <tr>
                    <td><?php echo $row["id_buku"]; ?></td>
                    <td><?php echo $row["judul"]; ?></td>
                    <td><?php echo $row["pengarang"]; ?></td>
                    <td>
                        <a href="detailPage.php?id=<?php echo $row["id_buku"];?>">
                        <button>Detail</button> </a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>           
        </table>
        <a href="homeCRUD.php">Back to Home</a>
        <div class="fixed">
                <footer>
                    Since 2022 &copy; Periplus Bookstore
                </footer>
        </div>
    </body>
</html>