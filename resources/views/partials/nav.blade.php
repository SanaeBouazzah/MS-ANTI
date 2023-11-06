<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">MS-ANTI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('profiles.index') }}">Profiles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('settings.index') }}">Informations</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <button class=" nav-link border-dark dropdown-toggle text-gray" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                             aria-expanded="false">
                            <div style="width:32px; height:32px;">
                              <img src="{{ '../storage/' . auth()->user()->image }}"
                                    style="display: block; border-radius:50%; object-fit:cover; width:100%; height:100%;">
                            </div>
                        </button>
                        <div class="dropdown-menu bg-dark border-none rounded-0 py-3" aria-labelledby="dropdownMenuButton" style="
                        position: absolute; left: -130px;  top: 50px;" >
                            <a class="dropdown-item py-1" href="{{ route('login.logout') }}">Logout</a>
                            <a class="dropdown-item py-1" href="#">Another action</a>
                            <a class="dropdown-item py-1" href="#">Something else here</a>
                        </div>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('login.index') }}">Register</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
