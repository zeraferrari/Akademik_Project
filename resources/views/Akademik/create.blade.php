<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Create Data</title>
</head>
<body>
  <div class="container-fluid pr-0 pl-0 position-fixed" style="z-index:1;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('searching')}}"><i class="fas fa-school fa-lg"></i> Dashboard Akademik</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('akademik.index')}}"><i class="fas fa-graduation-cap"></i> Data Siswa<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dosen.index')}}"><i class="fas fa-user-graduate"></i> Data Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('searching')}}"><i class="fas fa-search"></i> Searching</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    <form action="{{ route('akademik.store') }}" method="POST" style="position: relative; top: 5em">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="Nama">Nama</label>
          <input type="text" autocomplete="off" class="form-control" id="Nama" aria-describedby="emailHelp" name="Nama">
        </div>

        <div class="form-group">
          <label for="NIM">NIM</label>
          <input type="text" autocomplete="off" class="form-control" id="NIM" name="NIM">
        </div>

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" autocomplete="off" class="form-control" id="Email" name="Email">
        </div>

        <div class="form-group">
          <label for="Password">Password</label>
          <input type="password" autocomplete="off" class="form-control" id="Password" name="Password">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>