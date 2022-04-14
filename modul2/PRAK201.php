<html>
<form action="" method="POST">
    <div>
        <label for="">Nama: 1</label>
        <input type="text" name="nama1">
    </div>
    <div>
        <label for="">Nama: 2</label>
        <input type="text" name="nama2">
    </div>
    <div>
        <label for="">Nama: 3</label>
        <input type="text" name="nama3">
    </div>
    <button type="submit">Submit</button>
</form>
</html>
<?php 
    $nama1 = "";
    $nama2 = "";
    $nama3 = "";
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(isset($_POST['nama1']))    
        {
            $nama1 = $_POST['nama1'];
        }
    
        if(isset($_POST['nama2']))
        {
            $nama2 = $_POST['nama2'];
        }

        if(isset($_POST['nama3']))
        {
            $nama3 = $_POST['nama3'];
        }

        $Nama = array($nama1,$nama2,$nama3);
        sort($Nama);
        foreach($Nama as $nama){
            echo ($nama);
            echo"<br/>";
        }
    }
?>