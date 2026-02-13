@extends('landing.app')
@section('content')
<br><br>
<section class="sec sec-lt">
    <div class="chip">Panduan</div>
    <h2 class="st mb-5">Mudah dalam <em>4 Langkah</em></h2>
    <div class="sr">
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
    
    <div style="display: flex; justify-content: center; margin-top: 3rem;">
        <div class="si" style="max-width: 300px;">
            <div class="sc" style="background-color: #22c55e; color: white;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
            </div>
            <div class="stit" style="color: #22c55e;">Tiket Berhasil Didapat!</div>
            <div class="sdc">Selamat! E-tiket mudik gratis Anda sudah siap digunakan</div>
        </div>
    </div>
</section>
@endsection