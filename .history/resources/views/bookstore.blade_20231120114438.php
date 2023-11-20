@extends('layouts.main')

@section('title', 'bookstore')
    
@section('content')
    <header>
        <img src="img/mainvisual.jpg">
        <a href="{{ route('book') }}"><img src="img/logo.svg"></a>
    </header>

    <main>
        <section class="intro"></section>
        <div class="middlevisual">
            <img src="">
            <img src="">
        </div>
        <section></section>
    </main>


    <footer></footer>
@endsection
