<?php
        $array = [
             ["no"=> 1,
              "nama" => "Ridho",
              "Matkul" => ["Pemrograman 1","Praktikum Pemrograman 1","pengantar Lingkungan Lahan Basah","Arsitektur Komputer"],
              "sks"=>[2,1,2,3]],
              
             ["no"=> 2,
              "nama" => "Ratna",
              "Matkul" => ["Basis Data 1","Praktikum Basis Data 1","Kalkulus"],
              "sks"=>[2,1,3]],
              
             ["no"=> 3,
              "nama" => "Tono",
              "Matkul" => ["Rekayasa Perangkat Lunak","Analisa dan Perancangan Sistem","Komputasi Awan","Kecerdasan Bisnis"],
              "sks"=>[3,3,3,3]],
        ];
        foreach ($array as $key => $value) {
            $array[$key]['total'] = array_sum($value['sks']);
            if($array[$key]['total'] < 7){
                 $array[$key]['ket'] = "Revisi KRS";
            }
            else{
                $array[$key]['ket'] = "Tidak Revisi";
            }
        }
?>

<html>
<head>
    <style>
        tr{
            border: black;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding ="10">
        <tr bgcolor = "CCCDCC">
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah Diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
    <?php foreach($array as $arrays){ ?>
        <tr>
            <td><?php echo $arrays["no"];?></td>
            <td><?php echo $arrays["nama"];?></td>
            <td><?php echo $arrays["Matkul"][0];?></td>
            <td><?php echo $arrays["sks"][0];?></td>
            <td><?php echo $arrays["total"];?></td>
            <?php
                if($arrays['total'] < 7){
                    ?> <td bgcolor = "red"><?php
                    echo $arrays["ket"];
                }else{
                    ?> <td bgcolor = #3CB371><?php
                    echo $arrays["ket"];}?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $arrays["Matkul"][1];?></td>
            <td><?php echo $arrays["sks"][1];?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo $arrays["Matkul"][2];?></td>
            <td><?php echo $arrays["sks"][2];?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
                <?php if(!empty($arrays['Matkul'][3])){?>
            <td></td>
            <td></td>
            <td><?php echo $arrays["Matkul"][3];?></td>
            <td>
                <?php }if(!empty($arrays['sks'][3])){?>
                <?php echo $arrays["sks"][3];?>
            </td>
            <td></td>
        </tr>
                <?php }?>
    <?php }?>
    </table>
</body>
</html>