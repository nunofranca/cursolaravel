<!doctype html>
<html lang="pt_BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Nuno!</title>
</head>
<body>

<main class="container">


    <div class="d-flex justify-content-between align-items-center">
        <h1>Index</h1>
        <p>texto</p>

        <form method="post" action="{{route('logout')}}">
            @csrf
            <button type="submit" class="btn btn-link">SAIR</button>
        </form>


    </div>

    <div class="d-flex justify-content-between">
        <a type="button" href="{{route('users.create')}}" class="btn btn-primary">
            NOVO USUARIOS
        </a>
        <a type="button" href="{{route('posts.create')}}" class="btn btn-info text-white">
            NOVO POST
        </a>
    </div>

    <table class="table">
        <thead>
        <th scope="col">Intereção do loop</th>
        <th scope="col">ID</th>
        <th> Image</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Rua</th>
        <th scope="col">Number</th>
        <th scope="col">Data de Criação</th>
        <th scope="col">Ver</th>
        <th scope="col">Editar</th>
        <th scope="col">Endereço</th>
        <th scope="col">Post</th>
        <th scope="col">Deletar</th>
        </thead>
        <tbody>

            @each('user.__partials.loopUsers', $alunos, 'user', 'user.__partials.empty')

        </tbody>
    </table>

</main>


<script>

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>
