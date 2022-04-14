<html>
<form action="" method="POST">
    <head>
        <style>
            jumlah{
                font-size: 20px;
            }
        </style>
    </head>
    <body>
    <div>
        <input type="text" name="kata">
        <input type="submit" name="submit" value="submit" >
    </div>
    <jumlah>
    <?php 
    $kata = "";
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(isset($_POST['kata']))    
        {
            $kata = $_POST['kata'];
            $kata2 = str_split($kata);
            $jumlah_huruf = count($kata2);
        }
        foreach($kata2 as $KATA2){
            for($i=0;$i<=$jumlah_huruf;$i++)
            if($i==0){
                echo strtoupper($KATA2);
            }else{
                echo strtolower($KATA2);
            }
        }
        }
    ?>
    </jumlah>
    </body>
</form>
</html>