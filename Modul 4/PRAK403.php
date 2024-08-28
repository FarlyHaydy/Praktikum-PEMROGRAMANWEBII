<!DOCTYPE html>
<html>
    
<head>
   
        <style>
            td, table{
                border: 1px solid #000;
                padding : 5px;
                border-collapse : collapse;
            }
            th{
                border: 1px solid #000;
                padding : 5px;
                background-color: lightgrey;
            }
        </style>
    </head>
    <body>
    <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah diambil</th>
                <th>SKS</th>
                <th>Total SKS</th>
                <th>Keterangan</th>
            </tr>
    <?php
        $matkul = array(
            array("no" => "1", "nama" => "Ridho", 
            "matkul" => array(
                array("matakuliah" => "Pemograman I", "sks" => 2),
                array("matakuliah" => "Praktikum Pemograman I", "sks" => 1),
                array("matakuliah" => "Pengantar Lingkungan Lahan Basah", "sks" => 2),
                array("matakuliah" => "Arsitektur Komputer", "sks" => 3)
                )  
            ),
            array("no" => "2", "nama" => "Ratna", 
            "matkul" => array(
                array("matakuliah" => "Basis Data I", "sks" => 2),
                array("matakuliah" => "Praktikum Basis Data I", "sks" => 1),
                array("matakuliah" => "Kalkulus", "sks" => 3),
                ) 
            ),
            array("no" => "3", "nama" => "Tono", 
            "matkul" => array(
                array("matakuliah" => "Rekayasa Perangkat Lunak", "sks" => 3),
                array("matakuliah" => "Analisis dan Perancangan Sistem", "sks" => 3),
                array("matakuliah" => "Komputasi Awan", "sks" => 3),
                 array("matakuliah" => "Kecerdasan Bisnis", "sks" => 3)
                )
                
            )
        );
        for($a = 0; $a < count($matkul); $a++)
            {
                $matkul[$a]['totalsks'] = 0;
                for($b = 0; $b < count($matkul[$a]["matkul"]); $b++)
                {
                    $matkul[$a]["totalsks"] += $matkul[$a]["matkul"][$b]["sks"];
                }
            }
        ?>
        
        <?php
            for($a = 0; $a < count($matkul); $a++)
            {
                echo "<tr>";
                for($b = 0; $b < count($matkul[$a]["matkul"]); $b++)
                {
                    if($b == 0){
                        echo "<td>".$matkul[$a]["no"]."</td>";
                        echo "<td>".$matkul[$a]["nama"]."</td>";
                        echo "<td>".$matkul[$a]["matkul"][$b]["matakuliah"]."</td>";
                        echo "<td>".$matkul[$a]["matkul"][$b]["sks"]."</td>";
                        echo "<td>".$matkul[$a]["totalsks"]."</td>";
                        if($matkul[$a]["totalsks"] < 7){
                            echo "<td style = 'background-color : #FF0000'>".$matkul[$a]["keterangan"] = "Revisi KRS"."</td>";
                        }
                        else{
                            echo "<td style = 'background-color : #00B050'>".$matkul[$a]["keterangan"] = "Tidak Revisi"."</td>";

                        }
                    }
                    else{
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$matkul[$a]["matkul"][$b]["matakuliah"]."</td>";
                        echo "<td>".$matkul[$a]["matkul"][$b]["sks"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>