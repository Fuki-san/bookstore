@extends('layouts.main')

@section('title', 'bookstore')
    
@section('content')
    <header>
        <img src="img/mainvisual.jpg">
        <a href="{{ route('book') }}"><img src="img/logo.svg"></a>
    </header>

    <main>
        <section id=""></section>
        <div class="middlevisual">
            <img src="">
            <img src="">
        </div>
        <section id="fashionstyle" class="wrapper">
            <p></p>
            <div><input type="submit" class="button" value="Read More"></div>
            <img src="">
        </section>
        <div id="catalog" class="wrapper"></div>
    </main>


    <footer></footer>
@endsection
