<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP MySQL</title>
    </head>
    <body>
        <?php
            include "myconnection.php";
            $id = $_GET["id_buku"];
            $query = "SELECT * FROM buku WHERE id_buku='$id'";
            $result = mysqli_query($connect, $query);
        ?>
    <form action="editProcess.php" method="post">
        <table>
            <?php
                while($row=mysqli_fetch_array($result)){
            ?>
        <tr>
            <td> Kode buku:</td>
            <td><input type="text" name="id_buku" value="<?php echo $row["id_buku"];?>" readonly></td>
        </tr>
        <tr>
            <td> Judul: </td>
            <td><input type="text" name="judul" value="<?php echo $row["judul"];?>" ></td>
        </tr>
        <tr>
            <td> Pengarang: </td>
            <td><input type="text" name="pengarang" value="<?php echo $row["pengarang"];?>" ></td>
        </tr>
        <tr>
            <td> Penerbit: </td>
            <td><input type="text" name="penerbit" value="<?php echo $row["penerbit"];?>" ></td>
        </tr>
        <tr>
            <td> Deskripsi: </td>
            <td>
                <textarea name="deskripsi" rows="5" cols="20"><?php echo $row["deskripsi"];?>
            </textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="save" value="Save"></td>
        </tr>
        <?php
                }
        ?>
        </table>
    </form>
    </body>
</html>