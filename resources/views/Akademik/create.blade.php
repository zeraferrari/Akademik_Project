<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Create Data</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('akademik.store') }}" method="POST">
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
</body>
</html>