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
                    <a href="" class="items">
                        <img src="img/magazine-archive.jpg">
                        <div class="text">
                            <p class="title">Archive</p>
                            <p>テキストテキスト</p>
                        </div>
                    </a>
                    <a href="" class="items">
                        <img src="img/magazine-archive.jpg">
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
                <a href="{{ route('bookstore') }}" class="btn">Read More</a>
                <img src="img/fashion.jpg">
            </div>
        </section>

        <section class="catalog-antique">
            <div class="flex-items wrapper">
                <div class="items">
                    <img src="catalog.jpg">
                </div>
                <div>
                
                </div>


                <div class="flex-items">
                    <div class="items">
                        <div class="text">
                            <h3>Antique</h3>
                            <p>テキストテキストテキスト</p>
                            <p>テキストテキストテキスト</p>
                            <p>テキストテキストテキスト</p>
                            <a href="{{ route('bookstore') }}" class="btn">Read More </a>
                        </div>
                        <img src="antique.jpg">
                    </div>
                </div>

            </div>

        </section>

    </main>
    <footer id="footer">
        <div class="flex-items">
            <div>
                <h1 class="site-title"><a href="img/logo.svg"></a></h1>
            </div>
            <div>
                <h3 class="content-title">タイトル</h3>
                <ul>
                    <li>テキスト</li>
                    <li>テキスト</li>
                    <li>テキスト</li>
                </ul>
            </div>
            <div>
                <h3 class="content-title">タイトルタイトルタイトル</h3>
                <p>テキスト</p>
            </div>
        </div>
        <div class="copyright">&copy; Mag88</div>
    </footer>
@endsection
