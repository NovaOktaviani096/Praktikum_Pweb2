<?php

$array = [['nama' => 'Andi','nim' => 2101001,'nilai_uts' => 87,'nilai_uas' => 65],
          ['nama' => 'Budi','nim' => 2101002,'nilai_uts' => 76,'nilai_uas' => 79],
          ['nama' => 'Tono','nim' => 2101003,'nilai_uts' => 50,'nilai_uas' => 41],
          ['nama' => 'Jessica','nim' => 2101004,'nilai_uts' => 60,'nilai_uas' => 75],];
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
	<table border="1",cellspacing="0" cellpadding ="5">
		<tr bgcolor = "CCCDCC">
			<th>Nama</th>
			<th>Nim</th>
			<th>Nilai UTS</th>
			<th>Nilai UAS</th>
			<th>Nilai Akhir</th>
			<th>Huruf</th>
		</tr>
			<?php foreach ($array as $arrays) { ?>
				<tr>
					<td><?php echo $arrays["nama"]; ?></td>
					<td><?php echo $arrays["nim"]; ?></td>
					<td><?php echo $arrays["nilai_uts"]; ?></td>
					<td><?php echo $arrays["nilai_uas"]; ?></td>
					<td><?php echo $nilai_akhir = $arrays["nilai_uts"]*0.4 + $arrays["nilai_uas"]*0.6 ; ?></td>
					<td>
						<?php if ($nilai_akhir >= 80){
							  echo "A";
						      }
							  elseif ($nilai_akhir >= 70 && $nilai_akhir <= 79){
							  echo "B";
							  }
							  elseif ($nilai_akhir >= 60 && $nilai_akhir <= 69){
							  echo "C";
							  }
							  elseif ($nilai_akhir >= 50 && $nilai_akhir <= 59){
							  echo "D";
							  }
							  elseif ($nilai_akhir < 50){
							  echo "E";
							  }
					    ?> 
					</td>
				</tr>
			<?php } ?>
	</table>
</body>
</html>