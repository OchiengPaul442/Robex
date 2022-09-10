<!-- Nav Bar Start -->

<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Robex</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('about') }}"
                            class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                        <a href="{{ route('services') }}"
                            class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}">Service</a>
                        <a href="{{ route('team') }}"
                            class="nav-item nav-link {{ Request::is('team') ? 'active' : '' }}">Team</a>
                        <a href="{{ route('projects') }}"
                            class="nav-item nav-link {{ Request::is('projects') ? 'active' : '' }}">Project</a>
                        <a href="{{ route('news') }}"
                            class="nav-item nav-link {{ Request::is('news') ? 'active' : '' }}">News</a>
                        <a href="{{ route('contact') }}"
                            class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Nav Bar End -->
