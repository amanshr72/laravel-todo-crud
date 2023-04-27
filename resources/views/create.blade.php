<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <form action="submit" method="post">
        @csrf
        <div class="container col-6 mt-5">
            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="title">

            <label for="title">Description</label>
            <textarea type="text" name="description" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
            
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>