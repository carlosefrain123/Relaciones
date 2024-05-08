<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    @include('navigation')
    <h1>Relaciones</h1>
    <h2 class="text-center">Relación de uno a muchos</h2>
    <h3>Modo tabla</h3>
    <div class="row justify-content-center">
        <div class="col-auto">
            <table class="table table-striped table-hover">
                <thead class="bg-primary">
                    <th>ID</th>
                    <th>DESCRIPCIÓN</th>
                    <th>USUARIO</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        @foreach ($user->posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    <h3>
        <div>
            @foreach ($users as $user)
                <h1>El usuario {{ $user->name }}</h1>
                @if ($user->posts->count() > 0)
                    <ul>
                        @foreach ($user->posts as $post)
                            <a href="{{ route('prueba2', $post) }}">
                                <li>{{ $post->name }}</li>
                            </a>
                        @endforeach
                    </ul>
                @else
                    <p>Este usuario no tiene ningún post.</p>
                @endif
            @endforeach
        </div>
    </h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
