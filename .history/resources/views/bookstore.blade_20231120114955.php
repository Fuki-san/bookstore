@extends('layouts.main')

@section('title', 'bookstore')
    
@section('content')
    <header>
        <img src="img/mainvisual.jpg">
        <a href="{{ route('book') }}"><img src="img/logo.svg"></a>
    </header>

    <main>
        <section id="intro"></section>
        <div class="middlevisual">
            <img src="">
            <img src="">
        </div>
        <section id="fashionstyle" class="wrapper">
            <p></p>
            <div><input type="submit" class="button" value="Read More"></div>
            <img src="">
        </section>
        <div id="catalog" class="wrapper">
            <img src="">
            <h3 class="content-title">Catalog</h3>
        </div>
        <div id="antique" class="wrapper">
            <img src="">
            <h3 class="content-title">Antique</h3>
        </div>

    </main>


    <footer>
        <div></div>
        <img src="">
        <h4>タイトル</h4>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <h4>タイトルタイトルタイトル</h4>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <p>&copy; Mag88</p>
    </footer>
@endsection
