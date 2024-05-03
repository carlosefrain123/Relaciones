<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="row justify-content-center">
        <div class="col-auto">
            <h3>Usuario <span class="badge bg-secondary">{{$user->name}}</span></h3>
            <table class="table table-striped table-hover">
                <thead class="bg-primary">
                    <th>Roles</th>
                </thead>
                <tbody>
                    @foreach ($user->roles as $registro)
                        <tr>
                            <td>{{$registro->name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-auto">
            <h3>Role <span class="badge bg-secondary">{{$role->name}}</span></h3>
            <table class="table table-striped table-hover">
                <thead class="bg-primary">
                    <th>Roles</th>
                </thead>
                <tbody>
                    @foreach ($role->user as $registro)
                        <tr>
                            <td>{{$registro->name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
