@extends('layouts.main')
@section('title', 'Profil PPID')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Title -->
    <h1 class="text-3xl font-bold text-navy-900 mb-8">Profil PPID</h1>

    <!-- Main Image -->
    <div class="mb-8">
        <img src="{{ asset('images/dinsos-building.jpg') }}" 
             alt="Dinas Sosial Building" 
             class="w-full max-w-3xl mx-auto rounded-lg shadow-lg">
    </div>

@endsection
