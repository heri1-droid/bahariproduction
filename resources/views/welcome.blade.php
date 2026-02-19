@extends('landing.app')
@section('content')
    {{-- ===== HOME ===== --}}
    <div id="pg-home" class="pg-home">
        <section class="hero">

            {{-- BACKGROUND CAROUSEL --}}
            <div class="hero-bg-slider">
                <div class="hbs-track">
                    <div class="hbs-slide active" style="background-image: url('{{ asset('images/kapal1.jpeg') }}')"></div>
                    <div class="hbs-slide" style="background-image: url('{{ asset('images/kapal2.jpeg') }}')"></div>
                    <div class="hbs-slide" style="background-image: url('{{ asset('images/kapal3.jpeg') }}')"></div>
                    <div class="hbs-slide" style="background-image: url('{{ asset('images/kapal4.jpeg') }}')"></div>
                    <div class="hbs-slide" style="background-image: url('{{ asset('images/kapaloek1.jpeg') }}')"></div>
                    {{-- <div class="hbs-slide" style="background-image: url('{{ asset('images/5F.jpg') }}')"></div> --}}
                </div>

                {{-- Gradient overlay: biru pekat di kiri, transparan ke kanan --}}
                <div class="hbs-overlay"></div>

                {{-- Overlay gelap ringan di seluruh area agar teks tetap terbaca --}}
                <div class="hbs-dim"></div>
            </div>

            <div class="hero-wrap">

                {{-- TEKS KIRI --}}
                <div class="hi">
                    <div class="hbadge">⚓ Program Mudik Gratis 2026</div>
                    <h1 class="ht">Pulang Kampung<span>Tanpa Biaya</span></h1>
                    <p class="hd">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
                    <div class="ha">
                        <a href="{{ url('/belitiket') }}"><button class="bw">🎫 Pesan Tiket Gratis</button></a>
                    </div>
                    <div class="hstats">
                        <div class="hs">
                            <div class="hsn">12.400+</div>
                            <div class="hsl">Kursi Gratis</div>
                        </div>
                        <div class="hs">
                            <div class="hsn">8</div>
                            <div class="hsl">Rute Aktif</div>
                        </div>
                        <div class="hs">
                            <div class="hsn">Rp 0</div>
                            <div class="hsl">Biaya Tiket</div>
                        </div>
                    </div>
                </div>

                {{-- DOTS CAROUSEL (kanan bawah) --}}
                <div class="hbs-dots-wrap">
                    <span class="hbs-dot active" onclick="goBgSlide(0)"></span>
                    <span class="hbs-dot" onclick="goBgSlide(1)"></span>
                    <span class="hbs-dot" onclick="goBgSlide(2)"></span>
                    <span class="hbs-dot" onclick="goBgSlide(3)"></span>
                    <span class="hbs-dot" onclick="goBgSlide(4)"></span>
                    {{-- <span class="hbs-dot" onclick="goBgSlide(5)"></span> --}}
                </div>

            </div>
        </section>
    </div>


    {{-- ===== CSS HERO BACKGROUND CAROUSEL ===== --}}
    <style>
        .hero {
            position: relative;
            padding: 110px 8% 200px;
            overflow: hidden;
            background: none !important;
        }

        .hero-bg-slider {
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .hbs-track {
            position: absolute;
            inset: 0;
        }

        .hbs-slide {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1.2s ease;
        }

        .hbs-slide.active {
            opacity: 1;
        }

        .hbs-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(100deg,
                    rgba(12, 36, 97, 0.97) 0%,
                    rgba(26, 58, 124, 0.93) 20%,
                    rgba(30, 79, 168, 0.85) 38%,
                    rgba(37, 99, 235, 0.65) 55%,
                    rgba(59, 130, 246, 0.30) 72%,
                    rgba(96, 165, 250, 0.05) 88%,
                    rgba(96, 165, 250, 0.0) 100%
                );
            z-index: 1;
        }

        .hbs-dim {
            position: absolute;
            inset: 0;
            background: rgba(5, 15, 50, 0.28);
            z-index: 1;
        }

        .hero-wrap {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 48px;
            max-width: 1200px;
            margin: auto;
        }

        .hbs-dots-wrap {
            position: absolute;
            bottom: -100px;
            right: 0;
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .hero {
        }

        .hbs-dots-wrap {
            position: absolute;
            bottom: -116px;
            right: 0;
        }

        .hbs-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            display: inline-block;
        }

        .hbs-dot.active {
            background: #fff;
            width: 28px;
            border-radius: 4px;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: none;
            z-index: 0;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            right: 0;
            height: 60px;
            background: var(--g0);
            clip-path: ellipse(55% 100% at 50% 100%);
            z-index: 3;
        }

        @media (max-width: 900px) {
            .hbs-dots-wrap {
                bottom: -90px;
                right: 50%;
                transform: translateX(50%);
            }
            .hero-wrap {
                flex-direction: column-reverse;
                text-align: center;
            }
            .ha {
                justify-content: center;
            }
            .hstats {
                margin-left: auto;
                margin-right: auto;
            }
            .hbs-overlay {
                background: linear-gradient(180deg,
                        rgba(10, 30, 90, 0.80) 0%,
                        rgba(10, 30, 90, 0.75) 100%);
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 90px 8% 120px;
            }
            .hbs-dots-wrap {
                display: flex;
                bottom: 18px;
                right: 50%;
                transform: translateX(50%);
            }
            .ha {
                gap: 8px;
                margin-bottom: 20px;
            }
        }
    </style>


    {{-- ===== JS BACKGROUND SLIDER ===== --}}
    <script>
        (function() {
            let cur = 0;
            const slides = document.querySelectorAll('.hbs-slide');
            const dots = document.querySelectorAll('.hbs-dot');
            const total = slides.length;

            function goBgSlide(n) {
                slides[cur].classList.remove('active');
                dots[cur].classList.remove('active');
                cur = (n + total) % total;
                slides[cur].classList.add('active');
                dots[cur].classList.add('active');
            }
            setInterval(() => goBgSlide(cur + 1), 4000);
            window.goBgSlide = goBgSlide;
        })();
    </script>

    </div>


      <section class="sec sec-lt">
        <div class="chip">Panduan</div>
        <h2 class="st mb-5">Mudah dalam <em>4 Langkah</em></h2>
        <div class="sr ">
            <div class="si">
                <div class="sc">1</div>
                <div class="stit">Daftar Akun</div>
                <div class="sdc">Buat akun & upload foto KTP Anda</div>
            </div>
            <div class="si">
                <div class="sc">2</div>
                <div class="stit">Pilih Rute</div>
                <div class="sdc">Pilih rute & tanggal keberangkatan</div>
            </div>
            <div class="si">
                <div class="sc">3</div>
                <div class="stit">Isi Data Penumpang</div>
                <div class="sdc">Lengkapi identitas & upload KTP tiap penumpang</div>
            </div>
            <div class="si">
                <div class="sc">4</div>
                <div class="stit">Cetak E-Tiket</div>
                <div class="sdc">Tunjukkan e-tiket saat boarding</div>
            </div>
        </div>
    </section>

    <section class="sec sec-bl" style="text-align:center;padding:56px 5%">
        <div class="chip chip-w">Kuota Terbatas!</div>
        <h2 class="st st-w" style="text-align:center;margin-bottom:10px">Jangan Sampai Kehabisan</h2>
        <p style="color:rgba(255,255,255,.8);font-size:14px;max-width:420px;margin:0 auto 24px;line-height:1.7">
            Segera daftarkan diri dan pesan tiket mudik gratis sebelum kuota habis.</p>
        <a href="{{ url('/belitiket') }}"><button class="bw">🚀 Daftar Sekarang</button></a>
    </section>
    </div>
@endsection
