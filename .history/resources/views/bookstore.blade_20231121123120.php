@extends('layouts.main')

@section('title', 'bookstore')

@section('content')
    <header id="header">
        <h1 class="site-title"><img src="img/logo.svg"></h1>
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
                
            </div>
        </section>
    </main>
    <footer></footer>
@endsection
