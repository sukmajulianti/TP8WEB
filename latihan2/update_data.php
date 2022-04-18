<?php 
    include('connect.php');

    if( !isset($_GET['id']) ){
        header('Location: home.php');
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM baju WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("Data tidak ditemukan...");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container">
    <div class="card m-3">
        <div class="card-body m-3">
            <h3>Selamat Datang di Toko Baju</h3>
            <span>Masukan data diri dan pesanan kamu</span>
        </div>
        <form class="row g-3 m-3" action="update.php" method="post">
            <div class="col-md-6">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['nama'] ?>">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $data['email'] ?>">
            </div>
            <div class="col-12">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat'] ?>">
            </div>
            <div class="col-md-6">
                <label for="size" class="form-label">Size</label>
                <select id="size" name="size" class="form-select">
                    <option>Choose...</option>
                    <option <?php if($data['ukuran'] == 'S') echo 'selected';?> value="S">S</option>
                    <option <?php if($data['ukuran'] == 'M') echo 'selected';?> value="M">M</option>
                    <option <?php if($data['ukuran'] == 'L') echo 'selected';?> value="L">L</option>
                    <option <?php if($data['ukuran'] == 'XL') echo 'selected';?> value="XL">XL</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="warna" class="form-label">Warna</label>
                <select id="warna" name="color" class="form-select">
                    <option>Choose...</option>
                    <option <?php if($data['warna'] == 'Biru') echo 'selected';?> value="Biru">Biru</option>
                    <option <?php if($data['warna'] == 'Merah') echo 'selected';?> value="Merah">Merah</option>
                    <option <?php if($data['warna'] == 'Kuning') echo 'selected';?> value="Kuning">Kuning</option>
                    <option <?php if($data['warna'] == 'Putih') echo 'selected';?> value="Putih">Putih</option>
                    <option <?php if($data['warna'] == 'Hitam') echo 'selected';?> value="Hitam">Hitam</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="kode_pos" class="form-label">Kode pos</label>
                <input type="text" class="form-control" id="kode_pos" name="zip" value="<?php echo $data['kode_pos'] ?>">
            </div>
            <div class="col-12 d-grid gap-2">
                <input type="hidden" name="id" id="id" value="<?php echo $data['id'] ?>">
                <button type="submit" name="update" class="btn btn-primary">Update data</button>
            </div>
        </form>
    </div>
</body>
</html>