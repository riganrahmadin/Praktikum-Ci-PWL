<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Halaman tampil Data produk</h3>
    <hr>
    <a href="<?php echo site_url('crud_produk/tambah_produk');?>">[Tambah Data Produk</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($produk as $item){?>
            <tr>
                <td><?php echo $item['idProduk'];?></td>
                <td><?php echo $item['namaProduk'];?></td>
                <td><?php echo $item['harga'];?></td>
                <td><?php echo $item['jumlah'];?></td>
                <td><a href="<?php echo site_url('crud_produk/edit/'.$item['idProduk']);?>">[Edit]</a><a href="<?php echo site_url('crud_produk/hapus/'.$item['idProduk']);?>" onclick="return confrim('yakin akan hapus data ini')">[Hapus]</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>