<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Detail Data</title>
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
<div class="container" style="position: relative; top: 5em; left: 7em;">
    <h1 style="padding: 2em; margin-left: 2em;">"Data Diri Akademik Guru"</h1>
    <div class="row">
        <div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
            Nama
        </div>
        <div class="col-md-4 col-sm-4">
            {{ $data['Nama'] }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
            NIP
        </div>
        <div class="col-md-4 col-sm-4">
            {{ $data['NIP'] }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
            Email
        </div>
        <div class="col-md-4 col-sm-4">
            {{ $data['Email'] }}
        </div>
    </div>
</div>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>