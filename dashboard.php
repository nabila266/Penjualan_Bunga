<?php
session_start();
if($_SESSION['status_login'] != true){
    echo '<script>window.location ="login.php"</script>';
}
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
        <h3>Dashboard</h3>
        <div class="box">
            <h4>Selamat Datang <?php echo $_SESSION['a_global'] ->admin_name?> di Nabila's Blooming Haven</h4>
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