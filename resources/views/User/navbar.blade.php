
<body class="antialiased">
    <div class="topHead">
        <ul>
            <li>
                <a href="contact"> <i class="fa-solid fa-phone"></i></a>
                <a href="contact"><i class="fa-solid fa-envelope"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com/rafat.saqqa/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://github.com/RafatSaqqa"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/rafat-saqqa-b0091a209/"><i class="fa-brands fa-linkedin"></i></a>
            </li>
            <li>
                <div class="au">
                @if (Route::has('login'))

                @auth
                    <a href="{{ url('/profile') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth

            @endif
        </div>
            </li>
        </ul>

    </div>

    <header class="bg-white shadow d-flex justify-content-around">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About </a>
                        </li>

                    </ul>

                    <div class="au">

            </div>
                </div>
            </div>
        </nav>
    </header>




