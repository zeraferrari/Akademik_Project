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
    <div class="container">
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