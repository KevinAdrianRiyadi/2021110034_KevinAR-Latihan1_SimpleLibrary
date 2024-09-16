<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Book</title>
</head>
<body>
    <div class="container-field"> </div>
    <a class="btn btn-primary mt-2" href="{{ route('viewinsertbook') }}">Tambah Data</a>

<table class="table table-striped table-bordered table table-sm table-warning mt-3">
<tr>
    <th>title</th>
    <th>description</th>
    <th>page_count</th>
    <th>author_name</th>
    <th>author_email</th>
    <th>published_date</th>
</tr>
@foreach ($viewbook as $viewbook)
<tr>
    <td>{{$viewbook->title}}</td>
    <td>{{$viewbook->description}}</td>
    <td>{{$viewbook->page_count}}</td>
    <td>{{$viewbook->author_name}}</td>
    <td>{{$viewbook->author_email}}</td>
    <td>{{$viewbook->published_date}}</td>
</tr>
@endforeach
</table>
@vite(['resources/js/app.js'])

</body>
</html>
