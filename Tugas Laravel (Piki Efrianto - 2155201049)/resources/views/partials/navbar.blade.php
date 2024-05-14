<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
<div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Blog</a>
                </li>
            </ul>

            @if (Auth::user())
            <form action="{{ route('logout') }}" method="POST" class="d-flex">
            @csrf
                <button class="btn btn-success" type="submit">Logout</button>
            </form>
            @else
            <button class="btn btn-success" type="submit" onclick="window.location.href='{{ route('login') }}'">Login</button>

            <button class="btn btn-success" type="submit" onclick="window.location.href='{{ route('register') }}'">Register</button>
            @endif
        </div>
    </div>
</nav>