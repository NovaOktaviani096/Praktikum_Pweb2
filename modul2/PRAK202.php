<?php 
    $nama_error = $nim_error = $jenis_kelamin_error = "";
    $nama = $nim = $jenis_kelamin = "";
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(empty($_POST['nama']))  
        {
            $nama_error = "nama tidak boleh kosong";
        }else{
            $nama = $_POST['nama'];
        }
    
        if(empty($_POST['nim']))
        {
            $nim_error = "nim tidak boleh kosong";
        }else{
            $nim = $_POST['nim'];
        }

        if(empty($_POST['jenis_kelamin']))
        {
            $jenis_kelamin_error = "jenis kelamin tidak boleh kosong";
        }else{
            $jenis_kelamin = $_POST['jenis_kelamin'];
        }
    }

?>
<html>
<form action="" method="POST">
<head>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <label for="">Nama:</label>
        <input type="text" name="nama">
        <span class ="error">*
        <?php
            echo $nama_error;
        ?>
        </span>
    </div>
    <div>
        <label for="">Nim:</label>
        <input type="text" name="nim">
        <span class ="error">*
        <?php
            echo $nim_error;
        ?>
        </span>
    </div>
    <div>
    <label for="">Jenis Kelamin:</label>
    <span class ="error">*
        <?php
           echo $jenis_kelamin_error;
        ?><br/>
        </span>

        <input type="radio" name="jenis_kelamin[]" value="laki-laki">laki-laki<br/>
        <input type="radio" name="jenis_kelamin[]" value="perempuan">perempuan<br/>
        
    </div>
    <button type="submit">Submit</button>
</body>
</form>
</html>
<?php 
if(!empty($nama) && !empty($nim) && !empty($jenis_kelamin)){
    foreach($jenis_kelamin as $jeniskelamin){
        echo ($nama."<br/>".$nim."<br/>".$jeniskelamin);
}
}
?>