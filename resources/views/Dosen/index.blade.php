<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Landing Page</title>
</head>
<body>
    <div class="container">
        <h3>Data Dosen</h3>
            <a href="{{route('dosen.create')}}" class="btn btn-primary btn-md"><i class="fas fa-plus-circle"></i> Add Data</a>
        <hr>
        @if (session('status'))
            <div class="alert alert-success " role="alert">
                <strong>{{ session('status') }}</strong>
		        <button type="button" class="close" data-dismiss="alert" aria-label-"Close">
			        <span aria-hidden="true">&times;</span>
		        </button>
            </div>
        @endif
        <table class="table table-hover" id="myTable">
            <thead>
            <tr align="center">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody align="center">
                @foreach ($data as $key)
                    <tr>
                        <td>{{ $key->id }}</td>
                        <td>{{ $key->Nama }}</td>
                        <td>{{ $key->NIP }}</td>
                        <td>{{ $key->Email }}</td>
                        <td>
                            <a href="{{route('dosen.show', $key['id'])}}" class="btn btn-primary btn-sm"><i class="far fa-eye"></i> Show</a>
                            <a href="{{route('dosen.edit', $key['id'])}}" class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i> Edit</a>
                            <form class="d-inline" action="{{route('dosen.delete', $key['id'])}}" onsubmit="return('Are Your Sure Delete This Data ?')" method="POST">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        });
    </script>
</body>
</html>