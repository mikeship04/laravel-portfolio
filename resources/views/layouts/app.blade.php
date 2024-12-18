<!DOCTYPE html>

<html lang="en">

<head>
    <title>@yield('title')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="{{$user->name}}">
    <meta name="description" content="Hi! I'm {{$user->name}}.">
    <meta name="keywords"
        content="{{$user->name}} Portfolio, developer, laravel, php, html, css, javascript, react, web developer, webdev, portfolio">
    <meta name="robots" content="noindex, nofollow" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('./css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./css/header.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./css/footer.css') }}" type="text/css">

</head>

<body>
    <header class="header">
        <a href="/" class="header-logo">{{ '@' . $user->settings->username }} </a>
        <nav class="nav">
            <div class="toggle"><i class="fas fa-bars"></i></div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a href="{{ route('projects') }}">Projects</a></li>
                {{-- <li class="nav-item"><a href="{{ route('contact') }}">Contact</a></li> --}}
            </ul>
        </nav>
    </header>
    @yield('content')

    <footer class="footer-container">
        <div class="footer">
            <div class="footer-column">
                <a href="/" class="footer-logo">{{ '@' . $user->settings->username }}</a>
                <div class="socials">
                    <ul>
                        <li class="social-link">
                            <a href="{{$user->settings->linkedin_url}}" aria-label="LinkedIn" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li class="social-link">
                            <a href="{{$user->settings->github_url}}" aria-label="GitHub" target="_blank">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </li>
                        <li class="social-link">
                            <a href="{{$user->settings->instagram_url}}" aria-label="Instagram"
                                target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <span class="copyright"><i class="fa-regular fa-copyright"></i> {{ $user->settings->username }}
                    2022-2024</span>
            </div>
            <div class="footer-column">
                <a href="{{ route('about') }}" class="footer-button">
                    <img src="{{ asset('./img/smile.svg') }}" alt="Smile Icon">
                    About
                </a>
                <a href="{{ route('projects') }}" class="footer-button">
                    <img src="{{ asset('./img/coding.svg') }}" alt="Code Icon">
                    Projects
                </a>

            </div>
            <div class="footer-column">
                <a href="mailto:{{ $user->settings->email }}" class="footer-button">
                    <img src="{{ asset('./img/email.svg') }}" alt="Email Icon">
                    Contact
                </a>
            </div>
        </div>
    </footer>
    <script src="{{ asset('./js/main.js') }}"></script>
</body>

</html>
