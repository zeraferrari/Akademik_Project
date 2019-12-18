<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.js">
    <title>Searching Data</title>
</head>
<body>
    <div class="container-fluid pr-0 pl-0">
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
        <div class="d-flex justify-content-center">
            <div class="inner cover">
                <h1 class="cover-heading ml-5"><i class="fas fa-search"></i> Search Data Siswa</h1>
                    <p class="lead ml-5">"Masukan Data Berdasarkan Nama"</p>
                <div class="lead">
                    <form action="{{route('search.data')}}">
                        @csrf
                        <label for="Nama"></label>
                        <input type="text" name="Nama" id="Nama" class="ml-5">
                        <button type="submit">Submit</button>
                    </form>
                    @if(isset($data->Nama))
                        <ul>
                            <li>{{$data->Nama}}</li>
                            <li>{{$data->score}}</li>
                        </ul>
                    @endif
                </div>
                <div class="row-2 border border-dark lead mt-5">
                    @if(isset($data->Nama))
                        <div class="col p-5">
                            <p>Nama : {{$data->Nama}}</p>
                        </div>
                        <div class="col p-5">
                            <p>Score : {{$data->score}}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
<script src="../js/all.min.js"></script>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>