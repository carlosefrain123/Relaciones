<x-app-layout>
    <div class="container">
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
    </div>
</x-app-layout>
