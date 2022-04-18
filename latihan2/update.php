<?php 
    include('connect.php');
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $zip = $_POST['zip'];

        $sql = "UPDATE baju SET nama='$nama',
        email='$email',
        alamat='$alamat',
        ukuran='$size',
        warna='$color',
        kode_pos='$zip' WHERE id=$id";
        $query_user = mysqli_query($conn,$sql);

            if (mysqli_affected_rows($conn)>0) {
                //alihkan ke halaman home.php
                header('Location: home.php');
            }else{
                //tampilkan pesan gagal
                //die("Gagal menyimpanan perubahan...");
                die('invalid query: ' . mysqli_error($conn));
            }
    }else{
        die("Akses dilarang..");
    }
?>