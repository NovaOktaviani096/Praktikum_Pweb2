<html>
<form action="" method="POST">
    <head>
        <style>
            jumlah{
                font-size: 20px;
            }
            img{
                height: 20px;
                width: 20px;
            }
        </style>
    </head>
    <body>
    <div>
        <label for="">Batas Bawah: </label>
        <input type="text" name="batas_bawah">
    </div>
    <div>
        <label for="">Batas Atas: </label>
        <input type="text" name="batas_atas">
    </div>
    <input type="submit" name="submit" value="Cetak">
    <jumlah>
    <?php 
    $batas_bawah = "";
    $batas_atas = "";
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(isset($_POST['batas_bawah']))    
        {
            $batas_bawah = $_POST['batas_bawah'];
        }
        if(isset($_POST['batas_atas']))    
        {
            $batas_atas = $_POST['batas_atas'];
        }
        $i = $batas_bawah;
        $gambar = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
        echo "</br>";
        do{
            if(($i + 7) % 5 == 0){
                echo "<img src = $gambar >";
            }else {
                echo "$i ";
            }
            $i++;
        }
        while ($i <= $batas_atas);

        }
    ?>
    </jumlah>
    </body>
</form>
</html>