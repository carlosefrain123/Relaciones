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
    <h1>Relaciones</h1>
    <h2 class="text-center">Relación de uno a muchos</h2>
    <div class="row justify-content-center">
        <div class="col-auto">
            <table class="table table-striped table-hover">
                <thead class="bg-primary">
                    <th>ID</th>
                    <th>DESCRIPCIÓN</th>
                    <th>USERS</th>
                </thead>
                <tbody>
                    @foreach ($post as $registro)
                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->name }}</td>
                            {{-- <td>{{ $registro->user_id }}</td> --}}
                            <td>{{ $registro->user->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
