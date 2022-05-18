<?php
    include "myconnection.php";

    $id = $_POST["id_buku"];
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $penerbit = $_POST["penerbit"];
    $deskripsi = $_POST["deskripsi"];

    $query = "UPDATE buku SET id_buku='$id', judul='$judul', pengarang='$pengarang', penerbit='$penerbit', deskripsi='$deskripsi' WHERE id_buku='$id'";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }else{
        echo "Gagal mengubah data <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>