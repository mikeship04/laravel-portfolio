@extends('layouts.app', ['user' => $user])
@section('title')
    Home
@endsection
@section('content')
    <main class="main-container home-section">
    <link rel="stylesheet" href="{{ asset('./css/home.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./css/projects.css') }}" type="text/css">
        <section id="home">
            <div class="landing-page-details">
                <h1 class="small-title">Hi,</h1>
                <h2 class="big-title">I'm <span class="my-name green">{{$user->settings->name}}</span></h2>
                <h3 class="medium-title"><em>{{$user->settings->title}} @ <a class="green"
                            href="{{$user->experience[0]->company_url}}">{{$user->experience[0]->company}}</a></em></h3>
            </div>
            <div class="art-me">
                <img src="{{ asset("storage/".$user->settings->hero_gif) }}" alt="My personal Icon">
            </div>
            <div class="landing-page-socials">
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
                        <a href="{{$user->settings->instagram_url}}" aria-label="Instagram" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="projects" id="select-projects">
            <h2>Select Projects</h2>
            <p class="section-description">
                Here are some personal projects I have worked on.<br>
                You can find more on <a class="green" href="{{$user->settings->github_url}}">GitHub</a>.
            </p>
            <div class="project-cards-container">
                @foreach ($user->project as  $project)  
                    <x-project-card :$project></x-project-card> 
                @endforeach
        </section>
        <div class="cta-container">
            <a href="/projects" class="cta">
                <img src="{{ asset('img/coding.svg') }}" alt="Code Icon">
                <span>Explore More</span>
            </a>
        </div>
    </main>
@endsection
