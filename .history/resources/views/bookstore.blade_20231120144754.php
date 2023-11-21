@extends('layouts.main')

@section('title', 'bookstore')

@section('content')
    <header></header>
    <main>
        <section id="magazine"></section>
        <section id="fashion"></section>
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
                    </div>
                    <img src="">
                </div>
            </div>

        </section>

    </main>
    <footer></footer>
@endsection
