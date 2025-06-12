<?php include 'inc/header.php'; include 'db/config.php'; ?>
<div class="container mt-4">
<?php
$slug = $_GET['slug'];
$sql = $conn->query("SELECT * FROM berita WHERE slug='$slug'");
if ($sql->num_rows > 0) {
  $b = $sql->fetch_assoc();
  echo "<div class='card'>
          <img src='uploads/{$b['gambar']}' class='card-img-top'>
          <div class='card-body'>
            <h2>{$b['judul']}</h2>
            <small class='text-muted'>Dipublikasikan: {$b['tanggal']} WIB</small>
            <p class='mt-3'>".nl2br($b['isi'])."</p>
          </div>
        </div>";

  $prev = $conn->query("SELECT slug FROM berita WHERE id < {$b['id']} ORDER BY id DESC LIMIT 1");
  $next = $conn->query("SELECT slug FROM berita WHERE id > {$b['id']} ORDER BY id ASC LIMIT 1");
  echo "<div class='d-flex justify-content-between mt-4'>";
  echo ($prev->num_rows > 0) ? "<a href='detail.php?slug={$prev->fetch_assoc()['slug']}' class='btn btn-outline-danger'>&laquo; Sebelumnya</a>" : "<div></div>";
  echo ($next->num_rows > 0) ? "<a href='detail.php?slug={$next->fetch_assoc()['slug']}' class='btn btn-danger'>Berikutnya &raquo;</a>" : "";
  echo "</div>";
} else {
  echo "<p>Berita tidak ditemukan.</p>";
}
?>
</div>
<?php include 'inc/footer.php'; ?>