<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center">Relación de muchos a muchos</h1>
            <div class="col-auto">
                <h3>Usuario <span class="badge bg-secondary">{{ $user->name }}</span></h3>
                <table class="table table-striped table-hover">
                    <thead class="bg-primary">
                        <th>Roles</th>
                    </thead>
                    <tbody>
                        @foreach ($user->roles as $registro)
                            <tr>
                                <td>{{ $registro->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <h3>Role <span class="badge bg-secondary">{{ $role->name }}</span></h3>
                <table class="table table-striped table-hover">
                    <thead class="bg-primary">
                        <th>Roles</th>
                    </thead>
                    <tbody>
                        @foreach ($role->user as $registro)
                            <tr>
                                <td>{{ $registro->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ route('prueba') }}" class="btn btn-primary">Ir a Prueba</a>
    </div>
</x-app-layout>
