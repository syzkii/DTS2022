<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang</title>
</head>

<body>

    <form action="" method="post">
        <label>Jumlah Bintang= </label>
        <input type="text" name="nilai"> <br> //Masukkan angka berapa yang kita mau
        <input type="submit" name="kirim" value=" kirim"> //Lalu button dengan name kirim siap mengeksekusi inputan dari angka yang kita inputkan
    </form> <br>

    <?php

    if (isset($_POST['kirim'])) {
        $nilai = $_POST['nilai'];
        for ($i = 1; $i <= $nilai; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }

    ?>
</body>
</html>