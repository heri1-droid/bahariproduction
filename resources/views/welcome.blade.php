@extends('landing.app')
@section('content')
  




    {{-- ===== HOME ===== --}}
    <div id="pg-home" class="pg-home">
        <section class="hero">
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

                {{-- SLIDER KANAN --}}
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

                    {{-- DOTS --}}
                    <div class="hs-dots">
                        <span class="hs-dot active" onclick="goSlide(0)"></span>
                        <span class="hs-dot" onclick="goSlide(1)"></span>
                        <span class="hs-dot" onclick="goSlide(2)"></span>
                        <span class="hs-dot" onclick="goSlide(3)"></span>
                    </div>
                </div>

            </div>
        </section>
    </div>


    {{-- ===== CSS SLIDER ===== --}}
    <style>
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
    </style>


    {{-- ===== JS SLIDER ===== --}}
    <script>
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
    </script>










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
