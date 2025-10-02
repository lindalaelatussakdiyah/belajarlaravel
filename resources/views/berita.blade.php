@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<div class="container">
    <h1>Berita Terbaru</h1>

    <article>
        <h2>Berita 1: Laravel 11 Dirilis</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla sem at diam volutpat, a malesuada 
        ex facilisis. Integer vitae nisl nec erat volutpat porttitor.</p>
    </article>

    <article>
        <h2>Berita 2: Framework PHP Paling Populer</h2>
        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed volutpat libero 
        vel mi malesuada, vel porttitor sem tincidunt.</p>
    </article>

    <article>
        <h2>Berita 3: Komunitas Laravel di Indonesia</h2>
        <p>Praesent eu neque volutpat, malesuada libero a, porta justo. Integer id tortor vel ligula euismod 
        sollicitudin at vitae arcu.</p>
    </article>
</div>
@endsection
