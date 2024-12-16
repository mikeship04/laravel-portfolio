@props(['stack'])

<div class="skill">
  <img src="{{ asset("/storage/$stack->image") }}" alt="Git Icon">
  <span>
    <a href="{{$stack->url}}">{{ $stack->name}}</a>
  </span>
</div>