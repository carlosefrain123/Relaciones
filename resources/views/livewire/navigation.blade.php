<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('principal') }}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach ($users as $user)
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('prueba3', $user) }}">{{$user->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

</div>
