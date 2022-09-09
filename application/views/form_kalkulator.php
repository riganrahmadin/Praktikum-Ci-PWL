<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php echo validation_errors(); ?>
        <form action="<?php echo site_url('welcome/aksi_kalkulator'); ?>" method="POST">
        Angka Pertama: <input type="text" name="angka1">

        Angka Kedua : <input type="text" name="angka2">

        Operasi     : <select name="operasi">
            <option value="penjumlahan">Penjumlahan</option>
            <option value="peengurangan">Pengurangan</option>
            <option value="perkalian">Perklaian</option>
            <option value="pembagian">Pembagian</option>
        </select>
        <input type="submit" value="Hitung">
    </form>
    </pre>
</body>
</html>