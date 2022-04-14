<html>
<form action="" method="POST">
    <head>
        <style>
            jumlah{
                font-size: 20px;
                font-weight: bold;
            }
            img{
                height: 50px;
                width: 50px;
            }
        </style>
    </head>
    <body>
    <div>
        <label for="">Tinggi: </label>
        <input type="text" name="Tinggi">
    </div>
    <div>
        <label for="">Alamat Gambar: </label>
        <input type="url" name="gambar">
    </div>
    <input type="submit" name="submit" value="Cetak">
    <jumlah>
    <?php 
    $Tinggi = "";
    $gambar = "";
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(isset($_POST['Tinggi']))    
        {
            $Tinggi = $_POST['Tinggi'];
        }
        if(isset($_POST['gambar']))    
        {
            $gambar = $_POST['gambar'];
        }

        echo "</br>";
        $i = 1;
        while($i <= $Tinggi){
            $a = 1;
            while($a < $i){
                echo "&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;";
                $a++;
            }
            $u = $Tinggi;
            while($u >= $i){
                echo "<img src =$gambar>";
                $u--;
            }
            echo "</br>";
            $i++;
            }
    }
    ?>
    </jumlah>
    </body>
</form>
</html>