<html>
<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<?php
$panjang = NULL;
$lebar = NULL;
$nilai = NULL;
$nilais = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["panjang"]))
        $panjang = $_POST["panjang"];

    if (isset($_POST["lebar"]))
        $lebar = $_POST["lebar"];

    if (isset($_POST["nilai"]))
        $nilai = $_POST["nilai"];
}
?>

<form method="POST">
    Panjang <input type="number" name="panjang"></input><br>
    Lebar <input type="number" name="lebar"></input><br>
    Nilai <input type="text" name="nilai"> </input><br>
    <button type="submit">Cetak</button>
</form>

<?php
if (isset($_POST['nilai'])) {
    $nilais = explode(" ", $nilai);
}
?>

<?php
$n = 0;

if (!empty($nilais)) {
    if (($lebar * $panjang) != count($nilais)) {
        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    } else {
        for ($i = 0; $i < $lebar; $i++) {
            echo "<table>";
            echo "<tr>";
            for ($j = 0; $j < $panjang; $j++) {
                echo "<td>" . $nilais[$n] . "</td>";
                $n++;
            }
            echo "</tr>";
            echo "</table>";
        }
    }
}
?>
</html>