@extends('layouts.app')

@section('title', 'Profil')

@section('content')

<div class="profile-card">
    <img src="{{ asset('image/leaa.jpg') }}" alt="Foto Profil" class="profile-img">
    <h2>Linda Laelatus Sakdiyah</h2>
    <p>Mahasiswa S1 Teknologi Informasi</p>

    <div class="bio">
        Halo! Aku <strong>Linda</strong> 🌸<br>
        Seorang mahasiswa yang tertarik dengan dunia <strong>web development</strong>, 
        khususnya menggunakan <strong>PHP & Laravel</strong>. 
        Aku suka menciptakan desain web yang <em>clean</em>, 
        <em>responsive</em>, dan penuh warna!
    </div>

    <a href="mailto:linda@example.com" class="btn-custom">Hubungi Saya 💌</a>
</div>
@endsection
