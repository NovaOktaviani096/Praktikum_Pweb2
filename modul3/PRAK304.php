<html>
<head>
    <style>
        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['jumlah_bintang'])){
                $jumlah_bintang = $_POST['jumlah_bintang'];
            }
        if (isset($_POST['tambah'])) {
                $jumlah_bintang += 1;
            }

        if (isset($_POST['kurang'])) {
                $jumlah_bintang -= 1;
            }
    }
    ?>
    
    <?php if (empty($jumlah_bintang)) : ?>
        <form action="" method="post">
            <div>
                <label for="">Jumlah Bintang: </label>
                <input type="text" name="jumlah_bintang">
            </div>
            <button type="submit" name="submit">submit</button>
        </form>

    <?php endif; if (!empty($jumlah_bintang)) : ?>
        jumlah bintang = <?= $jumlah_bintang; ?>

        <br>
        <?php
        $gambar = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
        for ($i = 0; $i < $jumlah_bintang; $i++) {
            echo "<img src = $gambar >";
        }
        ?>
        <form action="" method="post">
            <input type="text" name="jumlah_bintang" value="<?= $jumlah_bintang ?>" hidden>
            <button type="submit" name="tambah" value="tambah">tambah</button>
            <button type="submit" name="kurang" value="kurang">kurang</button>
        </form>


    <?php endif; ?>
</body>
</html>