@props(['project'])

<div class="card">
    <img src="{{ asset("/storage/$project->image") }}" alt="Project Preview Screenshot" class="card-preview-img">
    <div class="card-info">
        <div class="title-and-links">
            <span class="project-title">
                {{ $project->title }}
            </span>
            <div class="project-links">
                <a href="{{ $project->url }}">
                    <i class="fa-brands fa-github"></i>
                </a>
            </div>
        </div>
        <div class="project-skills">
            @foreach (explode(',', $project->keywords) as $keyword)
                <span>{{ $keyword }}</span>
            @endforeach
        </div>
        <p class="project-description">
            {{ $project->description }}
        </p>
    </div>
</div>
