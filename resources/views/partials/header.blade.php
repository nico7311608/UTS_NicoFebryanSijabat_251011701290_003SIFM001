<nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm">
            <div class="container">

                <a class="navbar-brand text-white fw-bold" href="#">
                    UNPAM - Sistem Informasi
                </a>

                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon">                        
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link text-white">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/profile') }}" class="nav-link text-white">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/project') }}" class="nav-link text-white">
                                Project
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/about') }}" class="nav-link text-white">
                                About
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>