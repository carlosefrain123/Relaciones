<x-app-layout>
    <div class="container-fl">
        <h1 class="text-center">Hola, bienvenido usuario {{ $user->name }}</h1>
        <h2>Sus publicaciones:</h2>
        <ul>
            @foreach ($posts as $post)
            <a class="nav-link active" aria-current="page" href="{{ route('prueba2', $post) }}">{{$post->name}}</a>
            @endforeach
        </ul>
    </div>
</x-app-layout>
