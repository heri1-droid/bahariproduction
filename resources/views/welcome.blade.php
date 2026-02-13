



@extends('landing.app')
@section('content')
   

    <!-- ===== HOME ===== -->
    <div id="pg-home" class="pg-home">
        <section class="hero">
            <div class="hero-wrap">

                <div class="hi">
                    <div class="hbadge">⚓ Program Mudik Gratis 2025</div>
                    <h1 class="ht">Pulang Kampung<span>Tanpa Biaya</span></h1>
                    <p class="hd">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
                    <div class="ha">
                        <a href="{{ url('/belitiket') }}"><button class="bw">🎫 Pesan Tiket Gratis</button></a>
                       {{-- <a href="{{ url('/panduan') }}"><button class="bg" onclick="sp('profil')">ℹ️ Pelajari Program</button> --}}
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
            </div>
        </section>




        <section class="sec sec-route">
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
        </section>





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
