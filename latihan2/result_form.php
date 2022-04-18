<?php 
    include('connect.php');

    if(isset($_POST['add'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $zip = $_POST['zip'];

        $sql = "INSERT INTO baju".
        "(nama, email, alamat, ukuran, warna, kode_pos) VALUES ".
        "('$nama', '$email', '$alamat', '$size', '$color', '$zip')";

  
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<p>Input Succesfully</p>";
            echo "<p><a href='home.php'>Kembali ke daftar</a></p>";
        }else{
            die('invalid query : ' . mysqli_error($conn));
        }

        // mysqli_close($conn);
    }
?>