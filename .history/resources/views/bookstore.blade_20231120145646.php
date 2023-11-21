@extends('layouts.main')

@section('title', 'bookstore')

@section('content')
    <header></header>
    <main>
        <section id="magazine">
            <div class="wrapper">
                <div class="text">
                    <h2 class="sec-title">A special, long article in a newspaper or magazine</h2>
                    <p>テキストテキストテキスト</p>
                </div>
                <div class="flex-items">
                    <div class="items">
                        <img src="">
                        <h3>Archive</h3>
                        
                    </div>
                </div>
            </div>
        </section>

        <section id="fashion">
            <div class="wrapper">
                <div class="text">
                    <h2>Fashion &amp; Style</h2>
                    <p>テキストテキストテキスト</p>
                    <a href="{{ route('bookstore') }}">Read More</a>
                </div>
                <img src="">
            </div>
        </section>

        <section class="catalog-antique">
            <div class="flex-items">
                <div class="items wrapper">
                    <img src="">
                    <div class="text">
                        <h3>Catalog</h3>
                        <p>テキストテキストテキスト</p>
                        <p>テキストテキストテキスト</p>
                        <p>テキストテキストテキスト</p>
                    </div>
                </div>


                <div class="flex-items">
                    <div class="items wrapper">
                        <div class="text">
                            <h3>Antique</h3>
                            <p>テキストテキストテキスト</p>
                            <p>テキストテキストテキスト</p>
                            <p>テキストテキストテキスト</p>
                            <a href="{{ route('bookstore') }}" class="btn">Read More </a>
                        </div>
                        <img src="">
                    </div>
                </div>

            </div>

        </section>

    </main>
    <footer id="footer">
        <div class="flex-items">
            <div class="site-title"><img src=""></div>
            <div>
                <h3 class="content-title">タイトル</h3>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div>
                <h3 class="content-title">タイトルタイトルタイトル</h3>
                <p></p>
            </div>
        </div>
        <div class="copyright">&copy; Mag88</div>
    </footer>
@endsection
