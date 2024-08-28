<?php require('./Model.php');
if (isset($_GET['id_member'])) {
    EditMember();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo (isset($_GET['id_member'])) ? "<title>Update Data | Member</title>" : "<title>Tambah Data | Member</title>" ?>
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
        input[type="text"], textarea, input[type="datetime-local"], input[type="date"] {
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
        <input type="text" name="nama_member" <?php echo (isset($_GET['id_member'])) ?  "value='" . $result[0]["nama_member"] . "'" : "value=''"; ?> required><br>
        <input type="text" name="nomor_member" <?php echo (isset($_GET['id_member'])) ?  "value='" . $result[0]["nomor_member"] . "'" : "value=''"; ?> required><br>
        <textarea name="alamat" cols="30" rows="10" required><?php echo (isset($_GET['id_member'])) ? $result[0]["alamat"] : ""; ?></textarea><br>
        <input type="datetime-local" name="tgl_daftar" <?php echo (isset($_GET['id_member'])) ?  "value='" . date('Y-m-d\TH:i', strtotime($result[0]["tgl_mendaftar"])) . "'" : "value=''"; ?> required><br>
        <input type="date" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value='" . $result[0]["tgl_terakhir_bayar"] . "'" : "value=''"; ?> required><br>
        <?php
        if (isset($_GET['id_member'])) {
            echo "<button type=\"submit\" name=\"update\">Update</button>";
        } else {
            echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
        }
        ?>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $tgl_daftar = date_create($_POST['tgl_daftar']);
        $tgl_daftar = date_format($tgl_daftar, "Y-m-d H:i:s");
        AddMember($_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    if (isset($_POST['update'])) {
        $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_daftar']));
        UpdateMember($_GET['id_member'], $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    ?>
</body>
</html>
