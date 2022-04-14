<html>
<form action="" method="POST">
    <head>
        <style>
            konversi{
                font-size: 20px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
    <div>
        <label for="">Nilai: </label>
        <input type="text" name="nilai">
    </div>
    <input type="submit" name="submit" value="Konversi" >
    <konversi>
    <?php 
    $nilai = "";
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(isset($_POST['nilai']))    
        {
            $nilai = $_POST['nilai'];
        }
        echo"<br>";
            if($nilai == NULL){
                echo "";
            }else if($nilai == 0){
                echo "Hasil: Nol";
            }else if($nilai >=1 and $nilai <=9){
                echo "Hasil: Satuan";
            }else if($nilai  >= 11 and $nilai <= 19 ){
                echo "Hasil: Belasan";
            }else if($nilai == 10 or $nilai >= 20 and $nilai <=99){
                echo "Hasil: Puluhan";
            }else if($nilai >= 100 and $nilai <= 999){
                echo "Hasil: Ratusan";
            }else if($nilai >= 1000){
                echo "Anda Menginput Melebihi Limit Bilangan";
            } 
        }   
    ?>
    </konversi>
    </body>
</form>
</html>
