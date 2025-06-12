<?php include 'inc/header.php'; include 'db/config.php'; include 'functions.php'; ?>
<div class="container mt-4">
  <h4>Tambah Berita</h4>
  <form action="berita_action.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="judul" class="form-label">Judul Berita</label>
      <input type="text" name="judul" id="judul" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="isi" class="form-label">Isi Berita</label>
      <textarea name="isi" id="isi" rows="6" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
      <label for="id_kategori" class="form-label">Kategori</label>
      <select name="id_kategori" id="id_kategori" class="form-select" required>
        <option value="">-- Pilih Kategori --</option>
        <?php
        $kat = $conn->query("SELECT * FROM kategori");
        while($k = $kat->fetch_assoc()) {
          echo "<option value='{$k['id']}'>{$k['nama_kategori']}</option>";
        }
        ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="tanggal" class="form-label">Tanggal</label>
      <input type="datetime-local" name="tanggal" id="tanggal" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="gambar" class="form-label">Gambar</label>
      <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-danger">Simpan</button>
  </form>
</div>
<?php include 'inc/footer.php'; ?>