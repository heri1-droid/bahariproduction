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
        /* ── Hero: full height, posisi relative untuk layer-layer di dalamnya ── */
        .hero {
            position: relative;
            padding: 110px 8% 200px;
            overflow: hidden;
            /* hapus background biru lama — akan diganti gambar */
            background: none !important;
        }

        /* ── Background slider: cover penuh area hero ── */
        .hero-bg-slider {
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .hbs-track {
            position: absolute;
            inset: 0;
        }

        /* Tiap slide = background-image, fade in/out */
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

        /* ── Gradient overlay: biru tua pekat di kiri → transparan di kanan ── */
        /* .hbs-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(100deg,
                        rgba(10, 30, 90, 0.92) 0%,
                        rgba(20, 55, 140, 0.82) 30%,
                        rgba(30, 79, 168, 0.55) 55%,
                        rgba(37, 99, 235, 0.15) 75%,
                        rgba(37, 99, 235, 0.0) 100%);
                z-index: 1;
            } */

        .hbs-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(100deg,
                    rgba(12, 36, 97, 0.97) 0%,
                    /* --b9 */
                    rgba(26, 58, 124, 0.93) 20%,
                    /* --b8 */
                    rgba(30, 79, 168, 0.85) 38%,
                    /* --b7 */
                    rgba(37, 99, 235, 0.65) 55%,
                    /* --b6 */
                    rgba(59, 130, 246, 0.30) 72%,
                    /* --b5 */
                    rgba(96, 165, 250, 0.05) 88%,
                    /* --b4 */
                    rgba(96, 165, 250, 0.0) 100%
                    /* transparan */
                );
            z-index: 1;
        }

        /* ── Dim ringan seluruh area agar gambar tidak terlalu silau ── */
        .hbs-dim {
            position: absolute;
            inset: 0;
            background: rgba(5, 15, 50, 0.28);
            z-index: 1;
        }

        /* ── Semua konten hero di atas overlay ── */
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

        /* ── Dots navigasi: pojok kanan bawah area hero ── */
        .hbs-dots-wrap {
            position: absolute;
            bottom: -100px;
            /* relatif ke hero-wrap; disesuaikan */
            right: 0;
            display: flex;
            gap: 8px;
            align-items: center;
        }

        /* override posisi dots agar ada di bawah hero, pojok kanan */
        .hero {
            /* padding bawah lebih panjang untuk ruang dots */
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

        /* Hapus pseudo sebelumnya yang buat wave putih — tetap pakai */
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: none;
            /* override */
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
            /* di atas gambar */
        }

        /* ── Responsive dots ── */
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

            /* Overlay lebih merata di mobile karena tidak ada gambar kanan */
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

            // Auto-play setiap 4 detik
            setInterval(() => goBgSlide(cur + 1), 4000);

            // Expose ke HTML (onclick dots)
            window.goBgSlide = goBgSlide;
        })();
    </script>


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


    {{-- ===== HOME ===== --}}
    {{-- <div id="pg-home" class="pg-home">
        <section class="hero">
            <div class="hero-wrap">

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

                <div class="hero-slider">
                    <div class="hs-track">
                        <div class="hs-slide active">
                            <img src="{{ asset('images/kapal1.jpeg') }}" alt="Kapal Mudik 1">
                        </div>
                        <div class="hs-slide">
                            <img src="{{ asset('images/kapal2.jpeg') }}" alt="Kapal Mudik 2">
                        </div>
                        <div class="hs-slide">
                            <img src="{{ asset('images/kapal3.jpeg') }}" alt="Kapal Mudik 3">
                        </div>
                        <div class="hs-slide">
                            <img src="{{ asset('images/kapal4.jpeg') }}" alt="Kapal Mudik 4">
                        </div>
                    </div>

                    <div class="hs-dots">
                        <span class="hs-dot active" onclick="goSlide(0)"></span>
                        <span class="hs-dot" onclick="goSlide(1)"></span>
                        <span class="hs-dot" onclick="goSlide(2)"></span>
                        <span class="hs-dot" onclick="goSlide(3)"></span>
                    </div>
                </div>

            </div>
        </section>
    </div> --}}


    {{-- ===== CSS SLIDER ===== --}}
    {{-- <style>
        .hero-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 48px;
            max-width: 1200px;
            margin: auto;
        }

        /* Container slider */
        .hero-slider {
            width: 580px;
            flex-shrink: 0;
            position: relative;
        }

        /* Track: tumpuk semua slide di posisi sama */
        .hs-track {
            position: relative;
            width: 100%;
            aspect-ratio: 16/10;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 24px 64px rgba(0, 0, 0, .35);
        }

        /* Tiap slide */
        .hs-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity .8s ease;
        }

        .hs-slide.active {
            opacity: 1;
        }

        .hs-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Dots */
        .hs-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 16px;
        }

        .hs-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .35);
            cursor: pointer;
            transition: all .3s;
            border: none;
        }

        .hs-dot.active {
            background: #fff;
            width: 28px;
            border-radius: 4px;
        }

        @media (max-width: 1100px) {
            .hero-slider {
                width: 480px;
            }
        }

        /* Responsive */
        @media (max-width: 900px) {
            .hero-slider {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
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
        }

        @media (max-width: 768px) {
            .hero-slider {
                display: none;
            }
        }
    </style> --}}


    {{-- ===== JS SLIDER ===== --}}
    {{-- <script>
        (function() {
            let current = 0;
            const slides = document.querySelectorAll('.hs-slide');
            const dots = document.querySelectorAll('.hs-dot');
            const total = slides.length;

            function goSlide(n) {
                slides[current].classList.remove('active');
                dots[current].classList.remove('active');
                current = (n + total) % total;
                slides[current].classList.add('active');
                dots[current].classList.add('active');
            }

            // Auto play setiap 3 detik
            setInterval(() => goSlide(current + 1), 3000);

            // Expose ke HTML (untuk onclick di dots)
            window.goSlide = goSlide;
        })();
    </script> --}}










    {{-- <section class="sec sec-route">
            <h2 class="st">Pilih <em>Tujuan</em> Mudikmu</h2>
            <p class="sd">Tersedia berbagai rute antar pulau untuk memudahkan perjalanan pulang kampung Anda.</p>

            <!-- ================= SUMATERA ================= -->
            <div class="chip">Rute Pelayaran</div>

            <div class="region active">
                <h3 class="region-title">Pulau Sumatera</h3>
                <div class="region-content pt-5">
                    <div class="rg">
                        <div class="rc">
                            <div class="ri">🌊</div>

                            <div class="rn">Banda Aceh ⮂ Sabang</div>
                            <div class="rm"><span>🕐 8 jam</span><span>📅 28 Mar – 3 Apr</span></div>
                            <span class="badge bg2">Tersedia</span>
                        </div>

                        <div class="rc">
                            <div class="ri">⚓</div>
                            <div class="rn">Palembang ⮂ Muntok</div>
                            <div class="rm"><span>🕐 8 jam</span><span>📅 28 Mar – 3 Apr</span></div>
                            <span class="badge bg2">Tersedia</span>
                        </div>

                        <div class="rc">
                            <div class="ri">🏝️</div>
                            <div class="rn">Pangkal Pinang ⮂ Belitung</div>
                            <div class="rm"><span>🕐 8 jam</span><span>📅 28 Mar – 3 Apr</span></div>
                            <span class="badge bg2">Tersedia</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================= JAWA ================= -->
            <div class="region">
                <h3 class="region-title">Pulau Jawa </h3>
                <div class="region-content">
                    <div class="rg">
                        <div class="rc">
                            <div class="ri">🚢</div>
                            <div class="rn">Gresik ⮂ Bawean</div>
                            <div class="rm"><span>🕐 8 jam</span><span>📅 28 Mar – 3 Apr</span></div>
                            <span class="badge bg2">Tersedia</span>
                        </div>

                        <div class="rc">
                            <div class="ri">🌊</div>
                            <div class="rn">Jepara ⮂ Karimunjawa</div>
                            <div class="rm"><span>🕐 8 jam</span><span>📅 28 Mar – 3 Apr</span></div>
                            <span class="badge bg2">Tersedia</span>
                        </div>

                        <div class="rc">
                            <div class="ri">🏝️</div>
                            <div class="rn">Kalianget ⮂ Kangean</div>
                            <div class="rm"><span>🕐 8 jam</span><span>📅 28 Mar – 3 Apr</span></div>
                            <span class="badge bg2">Tersedia</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================= TIMUR ================= -->
            <div class="region">
                <h3 class="region-title">Pulau Timur</h3>
                <div class="region-content">
                    <div class="rg">
                        <div class="rc">
                            <div class="ri">⚓</div>
                            <div class="rn">Kupang ⮂ Rote</div>
                            <div class="rm"><span>🕐 8 jam</span><span>📅 28 Mar – 3 Apr</span></div>
                            <span class="badge bg2">Tersedia</span>
                        </div>

                        <div class="rc">
                            <div class="ri">🚢</div>
                            <div class="rn">Banyuwangi ⮂ Denpasar</div>
                            <div class="rm"><span>🕐 8 jam</span><span>📅 28 Mar – 3 Apr</span></div>
                            <span class="badge bg2">Tersedia</span>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}





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
