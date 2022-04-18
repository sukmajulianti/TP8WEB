<?php

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'latihan2_php';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    
    if(! $conn ){
        die('Could not connect: ' . mysqli_error());
    }

    echo 'connect succesfully';

    $db_selected = mysqli_select_db($conn, 'latihan2_php');
    if(! $db_selected ){
        die('Can\'t use latihan : ' . mysqli_error());
    }else{
        $sql = "CREATE TABLE baju( ".
                "id INT NOT NULL AUTO_INCREMENT, ".
                "nama VARCHAR(255) NOT NULL, ".
                "email VARCHAR(255) NOT NULL, ".
                "alamat VARCHAR(300) NOT NULL, ".
                "ukuran VARCHAR(2) NOT NULL, ".
                "warna VARCHAR(255) NOT NULL, ".
                "kode_pos VARCHAR(10) NOT NULL, ".
                "PRIMARY KEY ( id )); ";
        $create_table = mysqli_query($conn, $sql);
        if($create_table){
            echo "<p>Table has been created</p>";
        }else{
            die('invalid query : ' . mysqli_error());
        }
    }
    
    mysqli_close($conn);


?>