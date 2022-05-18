<html>
    <head>
        <title>Book Details</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="topnav">
            <p id="top-header"><i>Periplus Bookstore</i></p>
            <a href="loginForm.php" action="loginForm.php">Login</a>
            <a href="homeCRUD.php" action="homeCRUD.php">Home</a>
        </div>
        <h1>Details</h1>
        <?php
            include "myconnection.php";
            $id_buku = $_GET["id_buku"];
            $query = "SELECT * FROM buku WHERE id_buku='$id_buku'";
            $result = mysqli_query($connect, $query);
        ?>
        <table>
            <?php
                while($row=mysqli_fetch_array($result)){
            ?>
        <tr>
            <td> Kode Buku </td>
            <td><?php echo $row['id_buku'];?></td>
        </tr>
        <tr>
            <td> Judul </td>
            <td><?php echo $row['judul'];?></td>
        </tr>
        <tr>
            <td> Pengarang </td>
            <td><?php echo $row['pengarang'];?></td>
        </tr>
        <tr>
            <td> Penerbit </td>
            <td><?php echo $row['penerbit'];?></td>
        </tr>
        <tr>
            <td> Deskirpsi </td>
            <td><?php echo $row['deskripsi'];?></td>
        </tr>
        <?php
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