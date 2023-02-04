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
        <p>Endereço de {{$user->name}}</p>

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
                <tr>

                    <th scope="col">Rua</th>
                    <th scope="col">Number</th>


                </tr>
            </thead>
        <tbody>

            <tr>

                <td>{{$user->address->street}}</td>
                <td>{{$user->address->number}}</td>


            </tr>


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
