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
    <h1>ADICIONAR</h1>
    <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
        @csrf
        {{--                @foreach ($errors->all() as $error)--}}
        {{--                            <li>{{ $error }}</li>--}}
        {{--                        @endforeach--}}
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                   aria-describedby="emailHelp" value="{{old('name')}}">
            @error('name')

            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="email">
            @error('email')

            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="street" class="form-label">Rua</label>
            <input type="text" name="street" value="{{old('street')}}" class="form-control @error('street') is-invalid @enderror" id="street">
            @error('street')

            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Número</label>
            <input type="text" name="number" value="{{old('number')}}" class="form-control @error('number') is-invalid @enderror" id="number">
            @error('number')

            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
            @error('password')

            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirme sua Senha</label>
            <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="password">
            @error('password')

            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-check">
            <input class="form-check-input @error('term') is-invalid @enderror" type="radio" name="term" id="term">
            <label class="form-check-label" for="flexRadioDefault1">
                Termo de uso
            </label>
            @error('term')

            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <input name="image" type="file" accept=".jpeg, .jpg">
        </div>

        <button type="submit" class="btn btn-primary">SALVAR</button>
    </form>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>
