<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search_Data</title>
</head>
<body>
    <form action="{{route('search.data')}}">
        @csrf
        <label for="Nama">Search</label>
        <input type="text" name="Nama" id="Nama">
        <button type="submit">Submit</button>
    </form>
    @if(isset($data))
        <ul>
            <li>{{$data}}</li>
        </ul>
    @endif
</body>
</html>