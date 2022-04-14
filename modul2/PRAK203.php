<html>
    <head>
        <style>
            konversi{
                font-size: 20px;
                font-weight: bold;
            }
        </style>
    <title>
        Konversi Satuan Suhu
    </title>
    </head>
    <body>
    <form action="" method="post">
        Nilai <input type="text"  name="nilai"><br><br>
        Dari: <br>
        <div>
        <input type="radio" name="konversi" value="celcius" >Celcius<br>
        <input type="radio" name="konversi" value="reamur" >Reamur<br>
        <input type="radio" name="konversi" value="fahrenhait" >Fahrenhait<br>
        <input type="radio" name="konversi" value="kelvin" >Kelvin<br>
        </div>
        Ke: <br>
        <div>
        <input type="radio" name="konversi1" value="celcius1" >Celcius<br>
        <input type="radio" name="konversi1" value="reamur1" >Reamur<br>
        <input type="radio" name="konversi1" value="fahrenhait1" >Fahrenhait<br>
        <input type="radio" name="konversi1" value="kelvin1" >Kelvin<br>
        <input type="submit" name="submit" value="Konversi" >
        </div>
    </form>
    <konversi>
    <?php
    $konversi = [];
    $konversi1 = [];
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(isset($_POST["nilai"])){
            $nilai = $_POST['nilai'];
        }
        if(isset($_POST["konversi"])){
            $konversi = $_POST['konversi'];
            $konversi1 = $_POST['konversi1'];
        }
            if($konversi == "celcius" and $konversi1 == "celcius1"){
                echo " Tidak Bisa";
            }else if($konversi == "celcius" and $konversi1 == "reamur1"){
                $hasil=(4/5)*$nilai;
                echo " Hasil konversi: $hasil R";
            }else if($konversi == "celcius" and $konversi1 == "fahrenhait1"){
                $hasil=(9/5)*$nilai+32;
                echo "Hasil Konversi: $hasil F";
            }else if($konversi == "celcius" and $konversi1 == "kelvin1") {
                $hasil=$nilai+273;
                echo "Hasil Konversi: $hasil K";
            }
            
            elseif($konversi == "reamur" and $konversi1 == "reamur1"){
                echo " Tidak Bisa";
            }else if($konversi == "reamur" and $konversi1 == "celcius1"){
                $hasil=(5/4)*$nilai;
                echo " Hasil konversi: $hasil C";
            }else if($konversi == "reamur" and $konversi1 == "fahrenhait1"){
                $hasil=(9/4)*$nilai+32;
                echo "Hasil Konversi: $hasil F";
            }else if($konversi == "reamur" and $konversi1 == "kelvin1") {
                $hasil=(5/4)*$nilai+273;
                echo "Hasil Konversi: $hasil K";
            }
            
            elseif($konversi == "fahrenhait" and $konversi1 == "fahrenhait1"){
                echo " Tidak Bisa";
            }else if($konversi == "fahrenhait" and $konversi1 == "celcius1"){
                $hasil=(5/9)*($nilai - 32);
                echo " Hasil konversi: $hasil C";
            }else if($konversi == "fahrenhait" and $konversi1 == "reamur1"){
                $hasil=(4/9)*($nilai-32);
                echo "Hasil Konversi: $hasil R";
            }else if($konversi == "fahrenhait" and $konversi1 == "kelvin1") {
                $hasil=(5/9)*$nilai + 273;
                echo "Hasil Konversi: $hasil K";
            }

            elseif($konversi == "kelvin" and $konversi1 == "kelvin1"){
                echo " Tidak Bisa";
            }else if($konversi == "kelvin" and $konversi1 == "celcius1"){
                $hasil=$nilai - 273;
                echo " Hasil konversi: $hasil C";
            }else if($konversi == "kelvin" and $konversi1 == "reamur1"){
                $hasil=(4/5)*($nilai - 273);
                echo "Hasil Konversi: $hasil R";
            }else if($konversi == "kelvin" and $konversi1 == "fahrenhait1") {
                $hasil=(9/5)*($nilai - 273) + 32;
                echo "Hasil Konversi: $hasil K";
            }
        }
    ?>
    </konversi>
    </body>
</html> 



