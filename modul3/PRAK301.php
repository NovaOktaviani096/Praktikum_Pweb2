<html>
<form action="" method="POST">
    <head>
        <style>
            jumlah{
                font-size: 20px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
    <div>
        <label for="">Jumlah Peserta: </label>
        <input type="text" name="jumlah_peserta">
    </div>
    <input type="submit" name="submit" value="Cetak">
    <jumlah>
    <?php 
    $jumlah_peserta = "";
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(isset($_POST['jumlah_peserta']))    
        {
            $jumlah_peserta = $_POST['jumlah_peserta'];
        }
        echo"<br>";
        $i = 1;
            while($i <= $jumlah_peserta){
                if($i % 2 == 0){
                    echo "<font color= ".'#3D8936'.",>peserta ke-$i </font></br>";
                    echo "</br>";
                }else {
                    echo "<font color= ".'#FF0000'.",>peserta ke-$i </font></br>";
                    echo "</br>";
                    }
                $i++;
            }
        }
    ?>
    </jumlah>
    </body>
</form>
</html>