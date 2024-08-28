<!DOCTYPE html>
<html>

<head>
    
    <title>Soal 1</title>
    <style>
        table,
        td,
        tr {
            border-collapse: collapse;
            border: 1px solid;
            padding: 10px;
            text-align: center;
            width: wrap;
            height: wrap;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        Panjang : <input type="text" name="panjang"><br>
        Lebar : <input type="text" name="lebar"><br>
        Nilai : <input type="text" name="nilai"><br>
        <input type="submit" name="submit" value="Cetak" style="margin-bottom: 10px;">
    </form>
    <?php
    $panjang = "";
    $lebar = "";
    $nilai = "";
    if (isset($_POST['submit'])) {
        if (isset($_POST['panjang'])) {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $nilai = $_POST['nilai'];
        }
        $panjangNilai = explode(" ", $nilai);
        $ukuranMatriks = $panjang * $lebar;
        if ($ukuranMatriks < count($panjangNilai)) {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        } else { ?>
            <table>
                <?php
                for ($i = 0; $i < $panjang; $i++) {
                    ?>
                    <tr>
                        <?php for ($j = 0; $j < $lebar; $j++) { ?>
                            <td>
                                <?php
                                if (empty($panjangNilai[($i * $panjang) + $j])) {
                                    echo 0;
                                } else {
                                    echo $panjangNilai[($i * $panjang) + $j];
                                }
                                ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </table>
            <?php
        }
    }
    ?>
</body>

</html>