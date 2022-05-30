<?php
require("Koneksi.php");

function tampildata($nama_tabel)
{
    $stmt = koneksi()->prepare("SELECT * FROM $nama_tabel");
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (!empty($result)) {
        if ($nama_tabel == "members") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['nama_member'] . "</td>";
                echo "<td>" . $row['nomor_member'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row["tgl_mendaftar"] . "</td>";
                echo "<td>" . $row["tgl_terakhir_bayar"] . "</td>";
                echo "<td align='center'>";
                echo "<a href='formmember.php?id_member=" . $row['id_member'] . "'>edit</a>";
                echo " | ";
                echo "<a href='member.php?id_member=" . $row['id_member'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "Menampilkan ".count($result)." data";
        }elseif ($nama_tabel == "buku") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['judul_buku'] . "</td>";
                echo "<td>" . $row['penulis'] . "</td>";
                echo "<td>" . $row['penerbit'] . "</td>";
                echo "<td>" . $row["thn_terbit"] . "</td>";
                echo "<td align='center'>";
                echo "<a href='formbuku.php?id_buku=" . $row['id_buku'] . "'>edit</a>";
                echo " | ";
                echo "<a href='buku.php?id_buku=" . $row['id_buku'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "Menampilkan ".count($result)." data";
        }elseif ($nama_tabel == "peminjaman") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row["tgl_pinjam"] . "</td>";
                echo "<td>" . $row["tgl_kembali"] . "</td>";
                echo "<td align='center' >";
                echo "<a href='formpeminjaman.php?id_peminjam=" . $row['id_peminjam'] . "'>edit</a>";
                echo " | ";
                echo "<a href='peminjaman.php?id_peminjam=" . $row['id_peminjam'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "Menampilkan ".count($result)." data";
        }
    }
}

// membuat fungsi tambah
function tambahdatamember($nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)
{
    $sql = "INSERT INTO `members` ( `nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES (:nama_member,:nomor_member,:alamat,:tgl_mendaftar,:tgl_terakhir_bayar)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':nama_member' => $nama_member, ':nomor_member' => $nomor_member, ':alamat' => $alamat, ':tgl_mendaftar' => $tgl_mendaftar, ':tgl_terakhir_bayar' => $tgl_terakhir_bayar));
    if (!empty($result)) {
        header('location:member.php');
    }
}

function tambahdatabuku($judul_buku,$penulis,$penerbit,$thnterbit){
    $sql = "INSERT INTO `buku` ( `judul_buku`, `penulis`, `penerbit`, `thn_terbit`) VALUES (:judul_buku,:penulis,:penerbit,:thn_terbit)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':judul_buku' => $judul_buku, ':penulis' => $penulis, ':penerbit' => $penerbit, ':thn_terbit' => $thnterbit));
    if (!empty($result)) {
        header('location:buku.php');
    }
}

function tambahdatapeminjaman($tglpinjam, $tglkembali)
{
    $sql = "INSERT INTO `peminjaman` (`tgl_pinjam`, `tgl_kembali`) VALUES (:tgl_pinjam,:tgl_kembali)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':tgl_pinjam' => $tglpinjam, ':tgl_kembali'=> $tglkembali));

    if (!empty($result)) {
        header('location:peminjaman.php');
    }
}

// membuat fungsi edit
function editmember()
{
    $stmt = koneksi()->prepare("SELECT * FROM members where id_member=" . $_GET["id_member"]);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

function editbuku()
{
    $stmt = koneksi()->prepare("SELECT * FROM buku where id_buku=" . $_GET["id_buku"]);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

function editpeminjaman(){
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjam =". $_GET['id_peminjam']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}


// membuat fungsi update
function updatemember($id, $nama_member, $no_member, $almt, $tgl_daftar, $tgl_terakhir_bayar)
{
    $pdo_statement = koneksi()->prepare(
        "update member set nama_member='" . $nama_member . "', nomor_member='" . $no_member . "', alamat='" . $almt . "', tgl_mendaftar='" . $tgl_daftar . "', tgl_terakhir_bayar='" . $tgl_terakhir_bayar . "' where id_member=" . $id
    );
    $result = $pdo_statement->execute();
    if ($result) {
        header('location:member.php');
    }
}

function updatebuku($id, $judul, $penulis, $penerbit, $thnterbit)
{
    $pdo_statement = koneksi()->prepare(
        "update buku set judul_buku='" . $judul . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', thn_terbit='" . $thnterbit . "' where id_buku=" . $id
    );
    $result = $pdo_statement->execute();
    if ($result) {
        header('location:buku.php');
    }
}

function updatepeminjaman($id_peminjam, $tglpinjam, $tglkembali) 
{
    $pdo_statement = koneksi()->prepare(
        "UPDATE peminjaman SET tgl_pinjam='" . $tglpinjam ."', tgl_kembali='" . $tglkembali . "' WHERE id_peminjam = ". $id_peminjam
    );
    $res = $pdo_statement->execute();
    if (!empty($res)) {
        header('location:peminjaman.php');
    }
}


// membuat fungsi untuk hapus data

function hapusmember($id_member)
{
    $stmt = koneksi()->prepare("DELETE FROM members where id_member=" . $id_member);
    $result = $stmt->execute();
    if ($result) {
        header('location:member.php');
    }

}
function hapusbuku($id_buku)
{
    $stmt = koneksi()->prepare("DELETE FROM buku where id_buku=" . $id_buku);
    $result = $stmt->execute();
    if ($result) {
        header('location:buku.php');
    }
}
function hapuspeminjaman($id_peminjam)
{
    $stmt = koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjam=" . $id_peminjam);
    $result = $stmt->execute();
    if ($result) {
        header('location:peminjaman.php');
    }
}
