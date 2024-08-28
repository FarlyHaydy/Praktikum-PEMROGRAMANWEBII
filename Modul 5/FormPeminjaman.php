<?php require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    EditPeminjaman();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormPeminjaman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        form {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="id_member" <?php echo (isset($_GET['id_peminjaman'])) ?  "value='" . $result[0]["id_member"] . "'" : "value=''"; ?> required><br>
        <input type="text" name="id_buku" <?php echo (isset($_GET['id_peminjaman'])) ?  "value='" . $result[0]["id_buku"] . "'" : "value=''"; ?> required><br>
        <input type="date" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value='" . $result[0]["tgl_pinjam"] . "'" : "value=''"; ?> required><br>
        <input type="date" name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value='" . $result[0]["tgl_kembali"] . "'" : "value=''"; ?> required><br>
        <?php
        if (isset($_GET['id_peminjaman'])) {
            echo "<button type=\"submit\" name=\"update\">Update</button>";
        } else {
            echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
        }
        ?>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        AddPeminjaman($_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    if (isset($_POST['update'])) {
        UpdatePeminjaman($_GET['id_peminjaman'], $_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    ?>
</body>
</html>
