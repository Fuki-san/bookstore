@extends('layouts.main')

@section('title', 'bookstore')

@section('content')
    <header id="header">
        <h1 class="site-title"><img src="img/logo.svg"></h1>
    </header>

    <main>
        <section id="magazine">
            <div class="wrapper">
                <h2 class="sec-title">A special, long article in a newspaper or magazine</h2>
                <p>テキストテキストテキスト</p>
                <div class="flex-items">
                    <a href="#" class="items">
                        <img src="img/magazine-archive.jpg">
                        <div class="text">
                            <p class="title">Archive</p>
                            <p>テキストテキスト</p>
                        </div>
                    </a>
                    <a href="#" class="items">
                        <img src="img/magazine-new.jpg">
                        <div class="text">
                            <p class="title">New</p>
                            <p>テキストテキスト</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="fashion">
            <div class="wrapper">
                <h2 class="sec-title">Fashion &amp; Style</h2>
                <p>テキストテキストテキスト</p>
                <a href="{{ route('book') }}" class="btn">Read More</a>
            </div>
        </section>

        <section class="catalog-antique">
            <div class="flex-items wrapper">
                <div class="items">
                    <img src="img/catalog.jpg">
                </div>
                <div class="items">
                    <h2 class="sec-title">Catalog</h2>
                    <p>テキストテキストテキスト</p>
                    <p>テキストテキストテキスト</p>
                    <p>テキストテキストテキスト</p>
                </div>
            </div>
        </section>

        <section class="catalog-antique">
            <div class="flex-items wrapper">
                <div class="items">
                    <h2 class="sec-title">Antique</h2>
                    <p>テキストテキストテキスト</p>
                    <p>テキストテキストテキスト</p>
                    <p>テキストテキストテキスト</p>
                    <a href="{{ route('book') }}" class="btn">Read More</a>
                </div>
                <div class="items">
                    <img src="img/antique.jpg">
                </div>
            </div>
        </section>

    </main>
    <footer id="footer">
        <div class="flex-items wrapper">
            <div class="items">
                <a href=""></a>
            </div>
            <div class="items">
                <p class="title">タイトル</p>
                <ul>
                    <li>テキスト</li>
                    <li>テキスト</li>
                    <li>テキスト</li>
                    <li>テキスト</li>
                    <li>テキスト</li>
                </ul>
            </div>
            <div class="items">
                <p class="title">タイトルタイトル</p>
                <p>テキスト</p>
            </div>
        </div>
        <p class="copyright">&copy; Mag88</p>
    </footer>
@endsection
