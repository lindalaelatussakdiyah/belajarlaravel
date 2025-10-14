@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<style>
    /* 🌈 Background gradient lembut */
    body {
        background: linear-gradient(135deg, #a18cd1 0%, #fbc2eb 100%);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    /* 💎 Card profil dengan efek kaca */
    .profile-card {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(20px);
        border-radius: 25px;
        padding: 40px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        max-width: 420px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        animation: fadeIn 1.2s ease;
    }

    .profile-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
    }

    /* 🌀 Foto profil */
    .profile-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #fff;
        margin-bottom: 20px;
        box-shadow: 0 0 25px rgba(255, 255, 255, 0.4);
        transition: transform 0.3s ease;
    }

    .profile-img:hover {
        transform: scale(1.05) rotate(2deg);
    }

    /* 🖋️ Teks */
    .profile-card h2 {
        font-weight: 700;
        color: #fff;
        margin-bottom: 5px;
    }

    .profile-card p {
        color: #f9f9f9;
        font-size: 15px;
    }

    .profile-card .bio {
        font-size: 16px;
        line-height: 1.6;
        color: #fff;
        margin-top: 15px;
    }

    /* ✨ Tombol interaktif */
    .btn-custom {
        margin-top: 20px;
        border: none;
        border-radius: 50px;
        padding: 10px 25px;
        font-weight: 600;
        color: #fff;
        background: linear-gradient(135deg, #ff9966, #ff5e62);
        box-shadow: 0 4px 15px rgba(255, 94, 98, 0.4);
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-custom:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 25px rgba(255, 94, 98, 0.6);
    }

    /* 🌟 Animasi masuk */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

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
