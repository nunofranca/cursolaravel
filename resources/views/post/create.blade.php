<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<main class="container">
    <h1>ADICIONAR POST</h1>

    <form method="POST" action="{{route('posts.store')}}">
        @csrf

        <div class="form-group mb-3">
            <label for="title">Título</label>
            <input class="form-control" type="text" name="title" placeholder="Insira o título" id="title">
        </div>
        <div class="form-group mb-3">
            <label for="content">Texto</label>
            <textarea class="form-control" name="content" id="content"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">CADASTRAR POST</button>
        </div>

    </form>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>
