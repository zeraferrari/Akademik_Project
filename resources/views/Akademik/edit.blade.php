<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../all.min.css">
    <title>Change Data</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('akademik.update', $data['id']) }}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
              <label for="Nama">Nama</label>
              <input type="text" autocomplete="off" class="form-control" id="Nama" aria-describedby="emailHelp" name="Nama" value="{{$data['Nama']}}">
            </div>

            <div class="form-group">
              <label for="NIM">NIM</label>
              <input type="text" autocomplete="off" class="form-control" id="NIM" name="NIM" value="{{$data['NIM']}}">
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" autocomplete="off" class="form-control" id="Email" name="Email" value="{{$data['Email']}}">
            </div>

            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" autocomplete="off" class="form-control" id="Password" name="Password">
            </div>

            <button type="submit" class="btn btn-primary">Update Data</button>
          </form>
    </div>
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
</body>
</html>