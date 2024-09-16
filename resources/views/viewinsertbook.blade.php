<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
    </div>
    <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('insertbook') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex justify-content-center">
            <div class="">
                <div class="col-4">
                    <label class="fore-label" for="name">Title</label>
                    <input class="fore-control" id="title" name="title">
                </div>


                <div class="col-4">
                    <label class="fore-label" for="phone_number">Description</label>
                    <input class="fore-control" id="description" name="description">
                </div>

                <div class="col-4">
                    <label class="fore-label" for="email">Page Count</label>
                    <input class="fore-control" name="page_count" type="number">
                </div>

                <div class="col-4">
                    <label class="fore-label" for="message">Author Name</label>
                    <input class="fore-control" name="author_name">
                </div>

                <div class="col-4">
                    <label class="fore-label" for="message">Author Email</label>
                    <input class="fore-control" name="author_email" type="email">
                </div>

                <div class="col-6">
                    <label class="fore-label" for="message">Published Date</label>
                    <input class="fore-control" name="published_date" type="date">
                </div>
                
                <button class="btn btn-primary mt-2" type="submit">Submit</button>
                <a class="btn btn-danger mt-2" href="{{ route('bookview') }}">Kembali</a>
            </div>

    </form>
    @vite(['resources/js/app.js'])
</body>

</html>
