<?php
session_start();
include 'db.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location ="login.php"</script>';
}

$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."'");
$d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html>
<head>
        <title>Nabila's Blooming Haven</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="dashboard.php">Nabila's Blooming Haven</a></h1>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="data-kategori.php">Data Kategori</a></li>
            <li><a href="data-produk.php">Data Produk</a></li>
            <li><a href="keluar.php">Keluar</a></li>
</ul>
</div>
</header>

<!-- content -->
<div class="section">
    <div class="container">
        <h3>Profil</h3>
        <div class="box">
            <form action="" method="POST">
                <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name?>" required>
                <input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username?>" required>
                <input type="text" name="hp" placeholder="No Hp" class="input-control" value="<?php echo $d->admin_telp?>"  required>
                <input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->admin_email?>" required>
                <input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->admin_address?>" required>
                <input type="submit" name="submit"class="btn">
</form>

<?php
if(isset($_POST['submit'])){
    $nama   = $_POST['nama'];
    $user   = $_POST['user'];
    $hp     = $_POST['hp'];
    $email  = $_POST['email'];
    $alamat = $_POST['alamat'];

}
?>
</div>
</div>
</div>

<!-- footer -->
<footer>
    <div class="container">
        <small>Copyright &copy; 2023 - Nabila's Blooming Haven.</small>
    </div>
</footer>
   
</body>
</html>