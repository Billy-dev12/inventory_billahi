<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Parkiran</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <style>
    body {
      background-color: #0d1117;
      color: #ffffff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
      background-color: #1f2937 !important;
    }

    .navbar-brand,
    .nav-link {
      color: #ffffff !important;
    }

    .nav-link.active {
      color: #f97316 !important;
      font-weight: bold;
    }

    .btn-primary {
      background-color: #3b82f6;
      border-color: #3b82f6;
    }

    .btn-primary:hover {
      background-color: #2563eb;
      border-color: #2563eb;
    }

    .btn-warning {
      background-color: #f59e0b;
      border-color: #f59e0b;
      color: #000000;
    }

    .btn-danger {
      background-color: #ef4444;
      border-color: #ef4444;
    }

    table {
      background-color: #1e293b;
    }

    th,
    td {
      color: #f1f5f9;
      vertical-align: middle;
    }

    h1 {
      color: #3b82f6;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">GamerParkir</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../barang/index.php">BARANG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">JENIS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1>Data Parkiran</h1>
    <a href="view_tambahan.php" class="btn btn-primary mb-3">Tambah Data Parkiran</a>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No.</th>
            <th>ID JENIS</th>
            <th>NAMA JENIS</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          include "../../config/koneksi.php";
          $query = mysqli_query($conn,"SELECT * FROM jenis");
          $no = 1;
          if(mysqli_num_rows($query)){
              while($result = mysqli_fetch_assoc($query)){
                  ?>
                  <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $result['id_jenis']; ?></td>
                      <td><?php echo $result['nama_jenis']; ?></td>
                      <td>
                          <a href='view_edit.php?id=<?php echo $result['id_jenis']; ?>' class="btn btn-warning btn-sm">Edit</a>
                          <a href='hapus.php?id=<?php echo $result['id_jenis']; ?>' onclick="return confirm('Apakah kamu yakin?')" class="btn btn-danger btn-sm">Hapus</a>
                      </td>
                  </tr>
                  <?php 
                  $no++;
              }
          } else {
              echo "<tr><td colspan='4' class='text-center text-light'>Data jenis tidak ditemukan</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
