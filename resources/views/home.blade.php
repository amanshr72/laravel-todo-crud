<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Todo-App</title>
</head>

<body>

    <div class="container">
        <div>
            @if ($message = Session::get('success-msg'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">?</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if ($message = Session::get('updated-msg'))
                <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">?</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if ($message = Session::get('delete-msg'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">?</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>

        <div class="d-flex justify-content-center mt-2">
            <h3>Todo App using Laravel</h3>
        </div>
        <div class="mt-3">
            <a href="create" class="btn btn-secondary btn-lg btn-block">Add New Note</a><br>
        </div>
        {{-- {{session('success-msg')}} {{session('delete-msg')}} {{session('updated-msg')}}  --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Desciption</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td> <a href="edit/{{ $item->id }}" class="btn btn-primary btn-sm active" role="button"
                                aria-pressed="true">Update</a> </td>
                        <td> <a href="delete/{{ $item->id }}" class="btn btn-secondary btn-sm active" role="button"
                                aria-pressed="true">Delete</a></td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
