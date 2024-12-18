@extends('layouts.app')
@section('title')
    Contact
@endsection
@section('content')

<h1>Contact Us</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <body class="bg-gray-100 p-4">
        <form action="{{ route('contact.send') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto mt-8">
            @csrf
            
            <label for="subject" class="block text-black font-bold mb-2">Subject:</label>
            <input 
                type="text" 
                name="subject" 
                id="subject" 
                placeholder="Enter the subject" 
                value="{{ old('subject') }}" 
                class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
            >
            @error('subject')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
    
            <label for="date" class="block text-black font-bold mb-2 mt-4">Date:</label>
            <input 
                type="date" 
                name="date" 
                id="date" 
                value="{{ old('date') }}" 
                class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
            >
            @error('date')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
    
            <label for="details" class="block text-black font-bold mb-2 mt-4">Details:</label>
            <textarea 
                name="details" 
                id="details" 
                placeholder="Tell us a little about why you're getting in touch" 
                class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
            >{{ old('details') }}</textarea>
            @error('details')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
    
            <button 
                type="submit" 
                class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600 mt-4 w-full"
            >
                Send Message
            </button>
        </form>
    </body>
    
@endsection
