@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container">
    <h1>Hubungi Kami</h1>
    <p>Jika ada pertanyaan, silakan hubungi melalui kontak berikut:</p>

    <ul>
        <li>Email: <a href="mailto:belajar@laravel.com">belajar@laravel.com</a></li>
        <li>Telp: 0812-3456-7890</li>
        <li>Alamat: Jl. Belajar Laravel No. 123, Jakarta</li>
    </ul>

    <h2>Form Kontak</h2>
    <form>
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>
        <label>Pesan:</label><br>
        <textarea name="pesan"></textarea><br><br>
        <button type="submit">Kirim</button>
    </form>
</div>
@endsection
