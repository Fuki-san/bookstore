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
                    <img src="img/magazine-new.jpg">
                    <div class="text">
                        <p class="title">New</p>
                        <p>
                            テキストテキストテキストテキスト<br>
                            テキストテキスト
                        </p>
                    </div>
                </a>
            </div>
        </section>

        <section id="fashion">
            <div class="wrapper">
                <h2 class="sec-title">Fashion &amp; Style</h2>
                <p>
                    テキストテキストテキストテキスト<br>
                    テキストテキスト
                </p>
                <a href="#" btn>Read More</a>
            </div>
        </section>

        <section class="catalog-antique">]
            <div class="flex-item wrapper">
                <div class="item">
                    <img src="img/catalog.jpg">
                </div>
                <div class="item">
                    <h2 class="sec-title">Catalog</h2>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
            </div>
        </section>
        <section class="catalog-antique">]
            <div class="flex-item wrapper">
                <div class="item">
                    <h2 class="sec-title">Catalog</h2>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="item">
                    <img src="img/catalog.jpg">
                </div>
            </div>
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
