<?php

// Deklarasi Array
$daftarSmartphone = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
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
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php foreach ($daftarSmartphone as $ds) { ?>
            <tr>
                <td><?php echo $ds; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
