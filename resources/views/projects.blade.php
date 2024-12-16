@extends('layouts.app')
@section('title')
    Projects
@endsection
@section('content')
    <main class="main-container project-section">
        <link rel="stylesheet" href="{{ asset('./css/projects.css') }}" type="text/css">
        <section class="projects">
            <div class="page-title">
                <img src="./img/coding.svg" alt="Code Icon">
                <h2>{{$user->name}}.<span class="pink">projects</span></h2>
            </div>
            <p class="section-description">
                See <a class="hyperlink" href="{{$user->settings->github_url}}">GitHub</a> profile for more details.
            </p>

            <div class="project-cards-container">
                @foreach ($user->project as  $project)  
                    <x-project-card :$project></x-project-card> 
                @endforeach             

            </div>
        </section>
    </main>
@endsection
