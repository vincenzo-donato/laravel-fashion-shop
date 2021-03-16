<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home.page') }}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('prodotti.page') }}">Prodotti</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('contatti.page') }}">Contatti</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>