@extends('layouts.main')

@section('title', 'bookstore')

@section('content')
    <header>
        <img src="img/mainvisual.jpg">
        <a href="{{ route('book') }}"><img src="img/logo.svg"></a>
    </header>

    <main>
        <section id="magazine">
            <h2>A special, long article in a newspaper or magazine</h2>
            <p>テキストテキスト</p>
            <div class="middlevisual">
                <a href=""></a>
            </div>
        </section>

        <section id="fashion" class="wrapper">
            <p></p>
            <div><input type="submit" class="button" value="Read More"></div>
            <img src="">
        </section>
        <section class="catalog-antique">
            <img src="">
            <h3>Catalog</h3>
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </section>
        <section class="catalog-antique">
            <img src="">
            <h3>Antique</h3>
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </section>

    </main>


    <footer>
        <div class="footer-menu">
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
        </div>
        <p>&copy; Mag88</p>
    </footer>
@endsection
