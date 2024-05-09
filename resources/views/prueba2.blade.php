<x-app-layout>
    <div class="container-fl">
        <h1>Post Principal</h1>
        <h2 class="text-center">Relación de uno a muchos</h2>
        <div class="row justify-content-center">
            <ul>
                <p>Bienvenido {{ $post->name }}</p>
                <p>Bienvenido {{ $post->body }}</p>
            </ul>
        </div>
        <div class="row justify-content-center">
            <h2>Post relacionados con el usuario: {{$post->user->name}}</h2>
            @foreach ($similares as $similar)
                <li><a href="{{ route('prueba2', $similar) }}">{{$similar->name}}</a></li>
            @endforeach
        </div>
    </div>
</x-app-layout>
