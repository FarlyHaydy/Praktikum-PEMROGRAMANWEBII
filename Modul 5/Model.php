<?php
require("./Koneksi.php"); 

function GetAllData($tabel){
    $sql = "SELECT * FROM $tabel";
    $statement = Koneksi()->query($sql);
    $alldata = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($alldata)){
        if ($tabel == "member"){
            foreach ($alldata as $value){
                echo "<tr>";
                echo "<td>" . $value['id_member'] . "</td>";
                echo "<td>" . $value['nama_member'] . "</td>";
                echo "<td>" . $value['nomor_member'] . "</td>";
                echo "<td>" . $value['alamat'] . "</td>";
                echo "<td>" . $value["tgl_mendaftar"] . "</td>";
                echo "<td>" . $value["tgl_terakhir_bayar"] . "</td>";
                echo "<td>";
                echo "<a href='FormMember.php?id_member=" . $value['id_member'] . "'>edit</a>";
                echo " | ";
                echo "<a href='Member.php?id_member=" . $value['id_member'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
        elseif($tabel == "buku"){
            foreach ($alldata as $value){
                echo "<tr>";
                echo "<td>" . $value['id_buku'] . "</td>";
                echo "<td>" . $value['judul_buku'] . "</td>";
                echo "<td>" . $value['penulis'] . "</td>";
                echo "<td>" . $value['penerbit'] . "</td>";
                echo "<td>" . $value["tahun_terbit"] . "</td>";
                echo "<td>";
                echo "<a href='FormBuku.php?id_buku=" . $value['id_buku'] . "'>edit</a>";
                echo " | ";
                echo "<a href='Buku.php?id_buku=" . $value['id_buku'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
        elseif($tabel == "peminjaman"){
            foreach ($alldata as $value){
                echo "<tr>";
                echo "<td>" . $value['id_peminjaman'] . "</td>";
                echo "<td>" . $value['id_member'] . "</td>";
                echo "<td>" . $value['id_buku'] . "</td>";
                echo "<td>" . $value["tgl_pinjam"] . "</td>";
                echo "<td>" . $value["tgl_kembali"] . "</td>";
                echo "<td>";
                echo "<a href='FormPeminjaman.php?id_peminjaman=" . $value['id_peminjaman'] . "'>edit</a>";
                echo " | ";
                echo "<a href='Peminjaman.php?id_peminjaman=" . $value['id_peminjaman'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
    }
}

function AddMember($nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar){
    $sql = "INSERT INTO `member` ( `nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES (:nama_member,:nomor_member,:alamat,:tgl_mendaftar,:tgl_terakhir_bayar)";
    $stmt = Koneksi()->prepare($sql);
    $alldata = $stmt->execute(array(':nama_member' => $nama_member, ':nomor_member' => $nomor_member, ':alamat' => $alamat, ':tgl_mendaftar' => $tgl_mendaftar, ':tgl_terakhir_bayar' => $tgl_terakhir_bayar));
    if (!empty($alldata)) {
        header('location:Member.php');
    }
}

function AddBuku($judul,$penulis,$penerbit,$thnterbit){
    $sql = "INSERT INTO `buku` ( `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES (:judul,:penulis,:penerbit,:tahun_terbit)";
    $stmt = koneksi()->prepare($sql);
    $data = $stmt->execute(array(':judul' => $judul, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun_terbit' => $thnterbit));
    if (!empty($data)) {
        header('location:Buku.php');
    }
}

function AddPeminjaman($id_member, $id_buku, $tglpinjam, $tglkembali)
{
    $sql = "INSERT INTO `peminjaman` (`id_member`, `id_buku`,`tgl_pinjam`, `tgl_kembali`) VALUES (:id_member,:id_buku,:tglpinjam,:tglkembali)";
    $stmt = koneksi()->prepare($sql);
    $data = $stmt->execute(array(':id_member' => $id_member,':id_buku' => $id_buku,':tglpinjam' => $tglpinjam, ':tglkembali'=> $tglkembali));

    if (!empty($data)) {
        header('location:Peminjaman.php');
    }
}

function EditMember()
{
    $stmt = Koneksi()->prepare("SELECT * FROM member where id_member=" . $_GET["id_member"]);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

function EditBuku()
{
    $stmt = Koneksi()->prepare("SELECT * FROM buku where id_buku=" . $_GET["id_buku"]);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

function EditPeminjaman(){
    $stmt = Koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman =". $_GET['id_peminjaman']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}


function UpdateMember($id, $nama, $no_member, $almt, $tgl_daftar, $tgl_terakhir_bayar){
    $pdo_statement = Koneksi()->prepare(
        "UPDATE member SET nama_member='" . $nama . "', nomor_member='" . $no_member . "', alamat='" . $almt . "', tgl_mendaftar='" . $tgl_daftar . "', tgl_terakhir_bayar='" . $tgl_terakhir_bayar . "' WHERE id_member=" . $id
    );
    $result = $pdo_statement->execute();
    if ($result) {
        header('location:Member.php');
    }
}

function UpdateBuku($id, $judul, $penulis, $penerbit, $thnterbit){
    $pdo_statement = Koneksi()->prepare(
        "UPDATE buku SET judul_buku='" . $judul . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $thnterbit . "' WHERE id_buku=" . $id
    );
    $result = $pdo_statement->execute();
    if ($result) {
        header('location:Buku.php');
    }
}

function UpdatePeminjaman($id, $tglpinjam, $tglkembali){
    $pdo_statement = Koneksi()->prepare(
        "UPDATE peminjaman SET tgl_pinjam='" . $tglpinjam ."', tgl_kembali='" . $tglkembali . "' WHERE id_peminjaman = ". $id
    );
    $res = $pdo_statement->execute();
    if (!empty($res)) {
        header('location:Peminjaman.php');
    }
}


function DeleteMember($id_member)
{
    $stmt = Koneksi()->prepare("DELETE FROM member WHERE id_member=" . $id_member);
    $result = $stmt->execute();
    if ($result) {
        header('location:Member.php');
    }

}
function DeleteBuku($id_buku)
{
    $stmt = Koneksi()->prepare("DELETE FROM buku WHERE id_buku=" . $id_buku);
    $result = $stmt->execute();
    if ($result) {
        header('location:Buku.php');
    }
}
function DeletePeminjaman($id_peminjaman)
{
    $stmt = Koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjaman=" . $id_peminjaman);
    $result = $stmt->execute();
    if ($result) {
        header('location:Peminjaman.php');
    }
}
?>