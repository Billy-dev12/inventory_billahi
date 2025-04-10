<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
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
          <a class="nav-link " aria-current="page" href="../barang/index.php">BARANG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">JENIS</a>
        </li>
      </ul>
    </div>
  </div>
  
</nav>

<br></br>

    <div class="container">
    <a href="index.php" class="btn btn-primary">kembali ke data Parkiran</a>
    <form action="proses_tambahan.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID JENIS</label>
    <input type="number" class="form-control" name="id_jenis" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NAMA JENIS</label>
    <input type="text" class="form-control" name="nama_jenis" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>

<script>new window.Choices(document.querySelector(".choices-single"));</script>
</html>