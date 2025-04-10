<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Barang - Gamer Theme</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #0d1117;
      color: #fff;
      font-family: 'Orbitron', sans-serif;
    }
    .navbar {
      background: linear-gradient(to right, #0d6efd, #fd7e14);
    }
    .navbar-brand, .nav-link {
      color: white !important;
    }
    .nav-link:hover {
      color: #ffd700 !important;
    }
    .btn-primary {
      background-color: #0d6efd;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0b5ed7;
    }
    .form-control {
      background-color: #161b22;
      color: white;
      border: 1px solid #fd7e14;
    }
    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }
    label {
      color: #fd7e14;
    }
    .btn-submit {
      background-color: #fd7e14;
      border: none;
    }
    .btn-submit:hover {
      background-color: #e65c00;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GamerStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Kendaraan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../parkir/index.php">Parkir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <a href="index.php" class="btn btn-primary mb-4">← Kembali ke DATA BARANG</a>
  <form action="proses_tambahan.php" method="POST">
    <div class="mb-3">
      <label>ID BARANG</label>
      <input type="number" class="form-control" name="id_barang">
    </div>
    <div class="mb-3">
      <label>NAMA BARANG</label>
      <input type="text" class="form-control" name="nama_barang">
    </div>
    <div class="mb-3">
      <label>ID JENIS</label>
      <select class="form-control choices-single" name="id_jenis">
        <option value="1">1 (ELEKTRONIK)</option>
        <option value="2">2 (SEMBAKO)</option>
        <option value="3">3 (PRABOTAN)</option>
      </select>
    </div>
    <div class="mb-3">
      <label>HARGA</label>
      <input type="text" class="form-control" name="harga">
    </div>
    <div class="mb-3">
      <label>STOK</label>
      <input type="text" class="form-control" name="stok">
    </div>
    <button type="submit" class="btn btn-submit">Submit</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>new window.Choices(document.querySelector(".choices-single"));</script>

</body>
</html>
