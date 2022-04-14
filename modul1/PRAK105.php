<!DOCTYPE html>
<html>
    <head>
        <style>
           h1 {font-weight : bold;
               height: 150;
              }
            th {background-color : red;}
        </style>
    </head>
<body>
    <table border = "1">
            <?php
            $hp = ['hp1' => 'Daftar Smartphone Samsung','hp2' => 'Samsung Galaxy s22','hp3' => 'Samsung Galaxy S22+','hp4' => 'Samsung Galaxy A03','hp5' => 'Samsung Galaxy Xcover 5'];
            echo "<tr><th><h1>$hp[hp1]</h1></th></tr>";
            echo "<tr><td><b2>$hp[hp2]</b2></td></tr>";
            echo "<tr><td><b3>$hp[hp3]</b3></td></tr>";
            echo "<tr><td><b4>$hp[hp4]</b4></td></tr>";
            echo "<tr><td><b5>$hp[hp5]</b5></td></tr>";
            ?>
</body>
</html>