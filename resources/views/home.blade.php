@extends('layouts.app')

@section('content')
    @include('includes.hero')
    @include('includes.search')
    @include('includes.takeover')
    <div class="container">
        @include('includes.spotlight', ['title' => 'TOP RATED THIS WEEK', 'spotlights' => $spotlights['rated'], 'type' => 'movies'])
        @include('includes.spotlight', ['title' => 'RECENTLY ADDED', 'spotlights' => $spotlights['movies'], 'type' => 'movies'])        
        <section class="section">
            @include('includes.reviews')
        </section>
    </div>
@endsection
