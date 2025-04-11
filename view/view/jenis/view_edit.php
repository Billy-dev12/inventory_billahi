<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    .navbar-brand:hover, .nav-link:hover {
      color: #ffd700 !important;
    }
    .btn-primary {
      background-color: #0d6efd;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0b5ed7;
    }
    .btn-warning {
      background-color: #fd7e14;
      border: none;
    }
    .btn-warning:hover {
      background-color: #e86500;
    }
    .btn-danger:hover {
      background-color: #bb2d3b;
    }
    table {
      background-color: #161b22;
      color: white;
    }
    th {
      background-color: #0d6efd;
      color: white;
    }
    td {
      background-color: #21262d;
    }
    select.form-control, input.form-control {
      background-color: #161b22;
      color: #fff;
      border: 1px solid #fd7e14;
    }
    input.form-control:focus, select.form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }
  </style>
  <title>Data Barang - Gamer Theme</title>
</head>

<body>

<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../index.php"></a>a
        </li>
      </ul>
    </div>
  </div>
  
</nav>

<br></br>


    <div class="container">
<?php 
include '../../config/koneksi.php';
$id=$_GET['id'];
$query=mysqli_query($conn, "SELECT * FROM jenis WHERE id_jenis ='$id'");
$result=mysqli_fetch_array($query);

?>
    
    <form action="proses_edit.php?id=<?php echo $result['id_jenis'] ?>" method="POST">
  <div class="mb-3">
    
    <input type="hidden" class="form-control" name="id_jenis" value="<?php echo $result['id_jenis'] ?>" id="exampleInputEmail1" >
    <div id="emailHelp" class="form-text"></div>
  </div>
 
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID JENIS</label>
    <input type="number" class="form-control" name="id_jenis" value="<?php echo $result['id_jenis'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NAMA JENIS</label>
    <input type="text" class="form-control" name="nama_jenis" value="<?php echo $result['nama_jenis'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="index.php" class="btn btn-primary">kembali</a>
  </div>
  
</form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>