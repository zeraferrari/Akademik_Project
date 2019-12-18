<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>Search_Data</title>
</head>
<body>
    <div class="container">
        <form action="{{route('search.data')}}">
            @csrf
            <label for="Nama">Search</label>
            <input type="text" name="Nama" id="Nama">
            <button type="submit">Submit</button>
        </form>
        @if(isset($data))
            <ul>
                <li>{{$data->Nama}}</li>
                <li>{{$data->score}}</li>
            </ul>
        @endif
    </div>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>