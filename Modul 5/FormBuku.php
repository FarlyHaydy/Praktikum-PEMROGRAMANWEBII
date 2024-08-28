<?php require('./Model.php');
if (isset($_GET['id_buku'])) {
    EditBuku();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormBuku</title>
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
        input[type="text"] {
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
        <input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value='" . $result[0]["judul_buku"] . "'" : "value=''"; ?> required><br>
        <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value='" . $result[0]["penulis"] . "'" : "value=''"; ?> required><br>
        <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value='" . $result[0]["penerbit"] . "'" : "value=''"; ?> required><br>
        <input type="text" name="tahunterbit" <?php echo (isset($_GET['id_buku'])) ?  "value='" . $result[0]["tahun_terbit"] . "'" : "value=''"; ?> required><br>
        <?php
        if (isset($_GET['id_buku'])) {
            echo "<button type=\"submit\" name=\"edit\">Update</button>";
        } else {
            echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
        }
        ?>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        AddBuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahunterbit']);
    }
    if (isset($_POST['edit'])) {
        UpdateBuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahunterbit']);
    }
    ?>
</body>
</html>
