<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Produk | Pijar Camp</title>
</head>

<body>
    <header>
        <h3>Form Tambah Produk</h3>
    </header>

    <form action="proses-tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="nama_produk">Nama: </label>
            <input type="text" name="nama_produk" placeholder="nama produk" />
        </p>
        <p>
            <label for="keterangan">Keterangan: </label>
            <textarea name="keterangan"></textarea>
        </p>
        <p>
            <label for="harga">Harga: </label>
            <textarea name="harga"></textarea>
        </p>
        <p>
            <label for="jumlah">Jumlah: </label>
            <textarea name="jumlah"></textarea>
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>

        </fieldset>

    </form>

    </body>
</html>