<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudik Gratis – Kapal Bahari Express</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&family=Lora:wght@600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <!-- NAV -->
    <nav class="nav">
        <div class="nb" onclick="sp('home')">
            <div class="nbi"><img src="{{ asset('images/baharilogo.png') }}" alt="" srcset=""></div>
            <div class="nbt"><strong>Express Bahari</strong><small>Mudik Gratis 2025</small></div>
        </div>
        <div class="nm">
            <a id="n-home" class="active" href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/profil') }}">Profil</a>
            <a href="{{ url('/belitiket') }}">Beli Tiket</a>
            <a class="nml d-none d-md-inline" href="{{ route('login') }}">Masuk</a>
            <a class="nmd  d-none d-md-inline" href="{{ route('register') }}">Daftar</a>
        </div>
    </nav>

    <div class="bottom-nav">
        <a href="{{ url('/') }}" class="bn-item active">
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
        </a>
        <a href="{{ url('/belitiket') }}">
            <i class="fa-solid fa-ticket"></i>
            <span>Pesan Tiket</span>
        </a>
        <a href="{{ url('/profil') }}" class="bn-item">
            <i class="fa-solid fa-layer-group"></i>
            <span>Riwayat</span>
        </a>
        <a href="{{ url('/panduan') }}">
            <i class="fa-solid fa-book-open"></i>
            <span>Panduan</span>
        </a>
        <a href="{{ route('login') }}">
            <i class="fa-solid fa-user"></i>
            <span>Akun</span>
        </a>
    </div>

    @yield('content')


    <footer style="background:var(--b9);color:rgba(255,255,255,.55);text-align:center;padding:26px 5%;font-size:13px;">
        ⚓ <strong style="color:#fff">Kapal Bahari Express</strong> – Mudik Gratis 2025 &nbsp;|&nbsp; Bekerjasama dengan
        Kementerian Perhubungan RI &nbsp;|&nbsp; © 2025 PT Bahari Express Nusantara
    </footer>

    <div class="toast" id="toast"></div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
