<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE id=$id";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Produk | Pijar Camp</title>
</head>

<body>
    <header>
        <h3>Form Edit Produk</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $produk['id'] ?>" />

        <p>
            <label for="nama_produk">Nama Produk: </label>
            <input type="text" name="nama_produk" placeholder="nama produk" value="<?php echo $produk['nama_produk'] ?>" />
        </p>
        <p>
            <label for="keterangan">Keterangan: </label>
            <textarea name="keterangan"><?php echo $produk['keterangan'] ?></textarea>
        </p>
        <p>
            <label for="harga">Harga: </label>
            <textarea name="harga"><?php echo $produk['harga'] ?></textarea>
        </p>
        <p>
            <label for="jumlah">Jumlah: </label>
            <textarea name="jumlah"><?php echo $produk['jumlah'] ?></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>