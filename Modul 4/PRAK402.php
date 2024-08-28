<!DOCTYPE html>
<html>
    
<head>
    
        <style>
             table, td, th {
            border: solid 1px black;
            border-collapse:collapse;
            text-align:left;
            padding: 5px 25px 5px 6px;

            th{
                background-color: lightgrey;
        }
    }
        </style>
    </head>
    <body>
    <table>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr>
        <?php
        $list = array(
            array("nama" => "Andi", "nim" => "2101001", "nilaiuts" => 87, "nilaiuas" => 65),
            array("nama" => "Budi", "nim" => "2101002", "nilaiuts" => 76, "nilaiuas" => 79),
            array("nama" => "Tono", "nim" => "2101003", "nilaiuts" => 50, "nilaiuas" => 41),
            array("nama" => "Jessica", "nim" => "2101004", "nilaiuts" => 60, "nilaiuas" => 75)
        );
        ?>
                <?php
                    echo "<tr>";
                for($a = 0; $a < count($list); $a++)
                {
                    echo "<td>".$list[$a]["nama"]."</td>";
                    echo "<td>".$list[$a]["nim"]."</td>";
                    echo "<td>".$list[$a]["nilaiuts"]."</td>";
                    echo "<td>".$list[$a]["nilaiuas"]."</td>";
                    echo "<td>".$list[$a]["nilaiakhir"] = (($list[$a]['nilaiuts'] * 0.4)+($list[$a]['nilaiuas'] * 0.6))."</td>";
                    if($list[$a]['nilaiakhir'] > 80)
                    {
                        echo "<td>".$list[$a]['huruf'] = 'A'."</td>";
                    }
                    elseif($list[$a]['nilaiakhir'] < 80 and $list[$a]['nilaiakhir'] >= 70)
                    {
                        echo "<td>".$list[$a]['huruf'] = 'B'."</td>";
                    }
                    elseif($list[$a]['nilaiakhir'] < 70 and $list[$a]['nilaiakhir'] >= 60)
                    {
                        echo "<td>".$list[$a]['huruf'] = 'C'."</td>";
                    }
                    elseif($list[$a]['nilaiakhir'] < 60 and $list[$a]['nilaiakhir'] >= 50)
                    {
                        echo "<td>".$list[$a]['huruf'] = 'D'."</td>";
                    }
                    else
                    {
                        echo "<td>".$list[$a]['huruf'] = 'E'."</td>";
                    }
                    echo "</tr>";
                }
                ?>
        </table>
</body>
</html>