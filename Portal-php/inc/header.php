<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PortalPolmed</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="index.php">N-Ews</a>
      <form class="d-flex ms-auto" action="search.php" method="GET">
        <input class="form-control me-2" type="search" placeholder="Cari berita..." name="q">
        <button class="btn btn-light" type="submit">🔍</button>
      </form>
    </div>
  </nav>
