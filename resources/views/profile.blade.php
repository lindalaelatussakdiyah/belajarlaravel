@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container profile-card">
    <img src="{{ asset('image/leaa.jpg') }}" alt="Foto Profil" class="profile-img">
    <h1>Profil Saya</h1>
    <p>Halo, saya <strong>Linda Laelatus Sakdiyah</strong>. Saat ini sedang belajar Laravel sebagai framework 
    PHP untuk membuat aplikasi web modern.</p>

    <h2>Skill</h2>
    <ul>
        <li>HTML, CSS, dan JavaScript</li>
        <li>PHP dan Laravel</li>
        <li>Database MySQL</li>
    </ul>

    <h2>Deskripsi</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis velit eu est porttitor, eget 
    interdum odio pulvinar. Sed eget ex eget nunc elementum accumsan.</p>
</div>
@endsection
