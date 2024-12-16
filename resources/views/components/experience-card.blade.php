@props(['experience'])
<div class="education-experience-card">
  <div class="card-info">
      <h4 class="green">{{$experience->role}}</h4>
      <p class="date">{{$experience->start_date}} - {{$experience->end_date}}</p>
      <p><a href="{{$experience->company_url}}">{{$experience->company}}</a><br>
          {{$experience->job_type}}</p>
  </div>
  <div class="card-description">
    <div class="card-description">
      @php
          $experiences = App\Models\Experience::with('experience_task')->get();
      @endphp
      @foreach ($experiences as $experience)
          @foreach ($experience->experience_task as $task)
              <h5>{{ $task->task_name }}</h5>
              <p>{{ $task->description }}</p>
          @endforeach
      @endforeach
  </div>
  
  </div>
</div>