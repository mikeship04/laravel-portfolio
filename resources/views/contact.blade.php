@extends('layouts.app')
@section('title')
    Contact
@endsection
@section('content')

<h1>Contact Us</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" placeholder="Enter the subject" value="{{ old('subject') }}">
        @error('subject')<p>{{ $message }}</p>@enderror

        <br><br>

        <label for="date">Date:</label>
        <input type="date" name="date" id="date" value="{{ old('date') }}">
        @error('date')<p>{{ $message }}</p>@enderror

        <br><br>

        <label for="details">Details:</label>
        <textarea name="details" id="details" placeholder="Tell us a little about why you're getting in touch">{{ old('details') }}</textarea>
        @error('details')<p>{{ $message }}</p>@enderror

        <br><br>

        <button type="submit">Send Message</button>
    </form>
@endsection
