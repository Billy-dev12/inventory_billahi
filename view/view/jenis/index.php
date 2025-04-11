<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Barang - Gamer Theme</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #0e0e10;
      color: #ffffff;
      font-family: 'Orbitron', sans-serif;
    }

    .navbar {
      background-color: #1c1c2b;
      border-bottom: 3px solid #ff6a00;
    }

    .navbar-brand, .nav-link {
      color: #00bfff !important;
    }

    .navbar-brand:hover, .nav-link:hover {
      color: #ff6a00 !important;
    }

    h1 {
      color: #00bfff;
      text-shadow: 1px 1px 5px #ff6a00;
    }

    .btn-primary {
      background-color: #00bfff;
      border-color: #00bfff;
    }

    .btn-primary:hover {
      background-color: #ff6a00;
      border-color: #ff6a00;
    }

    .btn-warning {
      background-color: #ffb400;
      border-color: #ffb400;
      color: #000;
    }

    .btn-danger {
      background-color: #ff4d4d;
      border-color: #ff4d4d;
    }

    table {
      background-color: #1f1f2e;
      color: #ffffff;
    }

    th {
      background-color: #282840;
      color: #00bfff;
    }

    tr:nth-child(even) {
      background-color: #2a2a3d;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
    <a class="navbar-brand" href="https://billystore.store/" target="_blank">Billystore</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="../barang/index.php">BARANG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">JENIS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1 class="mb-4">Data Jenis</h1>
    <a href="view_tambahan.php" class="btn btn-primary mb-3">Tambah Data Jenis</a>

    <table class="table table-bordered table-striped">
      <tr>
        <th>No.</th>
        <th>Id_jenis</th>
        <th>Nama_jenis</th>
        <th>Aksi</th>
      </tr>
      <?php 
        include "../../config/koneksi.php";
        $query = mysqli_query($conn,"SELECT * FROM jenis");
        $no =1;
        if(mysqli_num_rows($query)){
          while($result=mysqli_fetch_assoc($query)){
      ?>
        <tr>
          <td><?php echo $no?></td>
          <td><?php echo $result['id_jenis']?></td>
          <td><?php echo $result['nama_jenis']?></td>
          <td>
            <a href='view_edit.php?id=<?php echo $result['id_jenis'] ?>' class="btn btn-warning btn-sm">Edit</a>
          </td>
        </tr>
      <?php 
          $no++;
          }
        } else {
          echo "<tr><td colspan='7' class='text-center text-danger'>Data tidak ditemukan</td></tr>";
        }
      ?>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
