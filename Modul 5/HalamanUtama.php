<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            border-collapse: collapse;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            border-bottom: 2px solid #ddd;
        }
        a {
            text-decoration: none;
            display: inline-block;
            padding: 10px 30px;
            margin: 10px;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
        }
        a:hover {
            background-color: #45a049;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Halaman Utama</h1>
    <table>
        <tr>
            <th>Menu</th>
        </tr>
        <tr>
            <td><a href="Member.php">Member</a></td>
        </tr>
        <tr>
            <td><a href="Buku.php">Buku</a></td>
        </tr>
        <tr>
            <td><a href="Peminjaman.php">Peminjaman</a></td>
        </tr>
    </table>
</body>
</html>
