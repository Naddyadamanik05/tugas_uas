<?php include '../inc/header.php'; ?>
<style>
  .sidebar {
    width: 200px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #007bff;
    padding-top: 60px;
    color: white;
  }
  .sidebar a {
    color: white;
    display: block;
    padding: 10px 20px;
    text-decoration: none;
  }
  .sidebar a:hover {
    background-color: #0056b3;
  }
  .main-content {
    margin-left: 200px;
    padding: 20px;
  }
</style>
<div class="sidebar">
  <h5 class="text-center">Admin</h5>
  <a href="dashboard.php">Dashboard</a>
  <a href="add_kategori.php">Tambah Kategori</a>
  <a href="add_berita.php">Tambah Berita</a>
</div>
<div class="main-content">
  <h4>Dashboard Admin</h4>
  <p>Selamat datang di panel admin.</p>
</div>
<?php include '../inc/footer.php'; ?>