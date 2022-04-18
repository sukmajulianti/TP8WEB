<?php 
    include('connect.php');

    // DELETE DATA
    if( isset($_GET['id']) ){
        // ambil id dari query string
        $id = $_GET['id'];

        //buat query hapus
        $sql = "DELETE FROM baju WHERE id=$id";
        $query = mysqli_query($conn, $sql);

        if( $query ){
            header('Location: home.php');
        }else{
            die("data gagal menghapus...");
        }
    }
    else{
            die("akses dilarang");
        }

?>