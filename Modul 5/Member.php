<?php
require('./Model.php');
if (isset($_GET['id_member'])) {
    DeleteMember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }
        td {
            font-size: 14px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e0e0e0;
        }
        .action-btns {
            text-align: center;
        }
        .button {
            display: inline-block;
            padding: 8px 12px;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
            font-size: 14px;
            margin: 5px;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div style="text-align: center; margin-top: 20px;">
        <a href="FormMember.php" class="button">Tambah Data</a>
        <a href="HalamanUtama.php" class="button">Kembali ke Halaman Utama</a>
    </div>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Id_Member</th>
                <th>Nama</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Bayar</th>
                <th>Edit/Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?= GetAllData("member") ?>
        </tbody>
    </table>
</body>
</html>
