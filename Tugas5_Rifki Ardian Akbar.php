<html>
<head>
    <?php
        if (isset ($_POST['hitung'])) {
            if ($_POST['hitung']) { // Ketika menombol submit/value="Hitung" akan mengelompokkan dari nilai1, nilai2, tambah, kurang, kali, bagi, untuk penghitungan
                $nilai1 = $_POST["nilai1"]; // nilai1 penamaan untuk Nilai 1
                $nilai2 = $_POST["nilai2"]; // nilai2 penamaan untuk Nilai 2
                $tambah = $nilai1 + $nilai2; // tambah penamaan untuk +
                $kurang = $nilai1 - $nilai2; // kurang penamaan untuk -
                $kali = $nilai1 * $nilai2;// kali penamaan untuk *
                $bagi = $nilai1 / $nilai2; // bagi penamaan untuk /
            }
        }
    ?>
</head>
<body>
    <form action="Tugas5_Rifki Ardian Akbar.php" method="POST"> <!-- Method POST digunakan untuk menangkap data. -->
            <tr>
                <td><b>Bilangan 1 : </b></td>
                <td><input type="text" name="nilai1" value="<?=($nilai1 ?? '')?>"></td>
            </tr><br>
            <tr>
                <td><b>Bilangan 2 : </b></td>
                <td><input type="text" name="nilai2" value="<?=($nilai2 ?? '')?>"></td>
            </tr><br>
            <tr>
                <td colspan="2"><input type="submit" name="hitung" value="Hitung"></td>
            </tr><br></br>

            <tr>
                <td>hasil penjumlahan adalah : </td>
                <td><input type="text" name="tambah" value="<?=($tambah ?? '')?>"></td>
            </tr><br>

            <tr>
                <td>hasil pengurangan adalah : </td>
                <td><input type="text" name="kurang" value="<?=($kurang ?? '')?>"></td>
            </tr><br>

            <tr>
                <td>hasil perkalian adalah : </td>
                <td><input type="text" name="kali" value="<?=($kali ?? '')?>"></td>
            </tr><br>

            <tr>
                <td>hasil pembagian adalah : </td>
                <td><input type="text" name="bagi" value="<?=($bagi ?? '')?>"></td>
            </tr>
        </table>
    </form>
</body>
</html>