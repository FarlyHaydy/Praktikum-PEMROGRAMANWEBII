<?php

$daftarSmartphone = ["S22" => "Samsung Galaxy S22","S22+" => "Samsung Galaxy S22+","A03" => "Samsung Galaxy A03","Xcover5" => "Samsung Galaxy Xcover 5"];
?>

<html>

<head>
    <style>
        table {
            font-family: times new roman;
            color: #232323;
        }

        table,
        th,
        td {
            border: 1px solid;
        }

        th {
            background-color: red;
            padding: 20px 25px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <td><?= $daftarSmartphone["S22"] ?></td>
        </tr>
        <tr>
            <td><?= $daftarSmartphone["S22+"] ?></td>
        </tr>
        <tr>
            <td><?= $daftarSmartphone["A03"] ?></td>
        </tr>
        <tr>
            <td><?= $daftarSmartphone["Xcover5"] ?></td>
        </tr>
    </table>
</body>

</html>