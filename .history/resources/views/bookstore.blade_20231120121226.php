@extends('layouts.main')

@section('title', 'bookstore')

@section('content')
    <header>
        <h1 class="site-title"><img src="img/logo.svg" alt="Mag88"></h1>
    </header>

    <main>
        <section id="magazine" class="wrapper">
            <h2 class="sec-title">A special, long article in a newspaper or magazine</h2>
            <p>テキストテキスト</p>
            <div class="flex-item">
                <a class="item" href="#">
                    <img src="img/magazine-archive.jpg">
                    <div class="text">
                        <p class="title">Archive</p>
                        <p>
                            テキストテキストテキストテキスト<br>
                            テキストテキスト
                        </p>
                    </div>
                </a>
                <a href="#" class="item">
                    <img src="img/magazine-" alt="">
                </a>
            </div>
        </section>

        <section id="fashion" class="wrapper">
            <h2>Fashion & Style</h2>
            <p></p>
            <div><a href=""></a><input type="submit" class="button" value="Read More"></div>
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
