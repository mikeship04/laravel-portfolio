@extends('layouts.app')
@section('title')
    About me
@endsection
@section('content')
    <main class="main-container about-section">
        <link rel="stylesheet" href="{{ asset('./css/about.css') }}" type="text/css">
        <section id="profile">
            <div class="page-title">
                <img src="{{ asset('./img/smile.svg') }}" alt="Smile Icon">
                <h2>{{ $user->settings->name . '.' }}<span class="green">profile</span></h2>
            </div>
            <p class="section-description">
                Exploring pixels and code, one quality click at a time.
            </p>
            <div class="profile-container">
                <div class="me-icon-container">
                    <img class="me-icon" src="{{ asset('img/howsitgoin.png') }}"
                        alt="Icon of myself saying how's it goin" title="Shippy how's it goin icon">
                </div>
                <div class="terminal-container">
                    <div class="terminal-header">
                        <div id="terminal-title">{{ $user->name }}.exe</div>
                        <div class="right-side-buttons">
                            <i class="fa-solid fa-window-minimize"></i>
                            <i class="fa-solid fa-window-restore"></i>
                            <i class="fa-solid fa-window-close"></i>
                        </div>
                    </div>
                    <div class="terminal-window">
                        <div class="statement">
                            <p class="input">
                                {{ $user->name . '.' }}<span class="green">pronouns</span>
                            </p>
                            <p class="return">
                                {{ $user->settings->pronouns }}
                            </p>
                        </div>
                        <div class="statement">
                            <p class="input">
                                {{ $user->name . '.' }}<span class="green">location</span>
                            </p>
                            <p class="return">
                                {{ $user->settings->location }}
                            </p>
                        </div>
                        <div class="statement">
                            <p class="input">
                                {{$user->name . '.'}}<span class="green">resume</span>
                            </p>
                            <p class="return">
                                <a href="{{asset('./img/MikeShippyResume.pdf')}}" class="hyperlink">{{$user->name . '.' . 'resume'}}</a>
                            </p>
                        </div>
                        <div class="statement">
                            <p class="input">
                                {{$user->name . '.'}}<span class="green">languages</span>
                            </p>
                            <p class="return">
                                @foreach ($user->settings->languages as $lang)
                                    <x-language :$lang></x-language>
                                @endforeach
                            </p>
                        </div>
                        <div class="statement">
                            <p class="input">
                                {{$user->name . '.'}}<span class="green">pupper</span>
                            </p>
                            <p class="return">
                                <p>Riki</p>
                            </p>
                        </div>
                        <div class="statement">
                            <p class="input bottom"><span></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="education-experience">
            <div id="education" class="education-experience-container">
                <h3>Education</h3>
                <div class="education-experience-card">
                    <div class="card-info">
                        <h4 class="green">{{$user->education[0]->education_institution}}</h4>
                        <p>{{$user->education[0]->education_degree}}</p>
                    </div>
                    <div class="card-description">
                        <h5>Achievements</h5>
                        {{-- TODO comma separated list so we can loop --}}
                        <p>{{$user->education[0]->education_achievements}}</p>
                    </div>
                </div>
            </div>

            <div id="experience" class="education-experience-container">
                <h3>Experience</h3>
                @foreach($user->experience as $experience)
                    <x-experience-card :$experience></x-experience-card>
                @endforeach
        </section>

        <section id="tech-stack">
            <h3>Tech Stack</h3>
            <div class="tech-stack-container">
                @foreach ($user->tech_stack as $stack)
                    <x-tech-stack :$stack></x-tech-stack>
                @endforeach
            </div>
        </section>

        <section id="all-social-media">
            <h3>Contact</h3>
            <p class="section-description">
                Here are all the places you can find me on the
                internet.
            </p>
            <div class="social-media-list">
                <a href="{{$user->settings->linkedin_url}}" class="social-media-item">
                    <i class="fa-brands fa-linkedin-in"></i>
                    LinkedIn
                </a>
                <a href="{{$user->settings->github_url}}" class="social-media-item">
                    <i class="fa-brands fa-github"></i>
                    GitHub
                </a>
                <a href="{{$user->settings->instagram_url}}" class="social-media-item">
                    <i class="fa-brands fa-instagram"></i>
                    Instagram
                </a>
                <a href="mailto:mikeship04@gmail.com" class="social-media-item">
                    <i class="fa-solid fa-envelope"></i>
                    Email
                </a>
            </div>
        </section>

    </main>
@endsection
