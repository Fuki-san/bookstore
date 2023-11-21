@extends('layouts.main')

@section('title', 'bookstore')

@section('content')
    <header id="header">
        <h1 class="site-title"><a href=""></a><img src="img/logo.svg"></h1>
    </header>

    <main>
        <section class="wrapper" id="magazine">
            <h2 class="sec-title">A special, long article in a newspaper or magazine</h2>
            <p>テキストテキストテキスト</p>
            <div class="flex-item">
                <div class="item"><img src="img/magazine-archive.jpg"><div class="text"><p class="title">Archive</p><p>テキストテキストテキスト</p></div></div>
                <div class="item"><img src="img/magazine-new.jpg"><div class="text"><p class="title">New</p><p>テキストテキストテキスト</p></div></div>
            </div>
        </section>
        <section class="wrapper" id="fashion">
            <h2 class="sec-title">Fahion & Style</h2>
            <p>テキストテキストテキスト</p>
            <a href="#" class="btn">Read More</a>
            <img src="img/fashion.jpg">
        </section>
        <section class="wrapper" id="catalog-antique">
            <div class="flex-item">
                <div class="item">
                    <img src="img/catalog.jpg">
                </div>
                <div class="item">
                    <h2 class="sec-title">Catalog</h2>
                    <p>テキスト</p>
                    <p>テキスト</p>
                    <p>テキスト</p>
                </div>
            </div>
        </section>
        <section class="wrapper" id="catalog-antique">
            <div class="flex-item">
                <div class="item">
                    <h2 class="sec-title">Antique</h2>
                    <p>テキストテキストテキスト</p>
                    <p>テキストテキストテキスト</p>
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="item">
                    <img src="img/antique.jpg">
                </div>
            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="flex-items wrapper">
            <div class="site-title item"><img src="img/logo.svg"></div>
            <div class="item">
                <p class="title">タイトル</p>
                <ul>
                    <li>テキストテキストテキスト</li>
                    <li>テキストテキストテキスト</li>
                    <li>テキストテキストテキスト</li>
                </ul>
            </div>
            <div class="item">
                <p>テキストテキストテキストテキストテキスト</p>
            </div>
        </div>
        <p class="copyright">&copy; Mag88</p>
    </footer>
@endsection
