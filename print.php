<!DOCTYPE HTML>
<html>
    <head>
        <title>Print Data</title>
        <link rel="stylesheet" href="text/css" href="style.css">
    </head>
    <body>
        <h1 align="center">PERIPLUS BOOKS INFORMATION</h1>
        <br>
        <table class="home">
            <tr>
                <th> Code </th>
                <th> Title </th>
                <th> Writer </th>
                <th> Publisher </th>
                <th> Description</th>
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
                    <td><?php echo $row["penerbit"]; ?></td>
                    <td><?php echo $row["deskripsi"]; ?></td>
                </tr>
                <?php
                    }
                }
                ?>           
        </table>
        <script>
            window.print();
        </script>
    </body>
</html>