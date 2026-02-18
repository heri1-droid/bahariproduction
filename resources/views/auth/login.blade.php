@extends('landing.app')
@section('content')
    <!-- ===== LOGIN ===== -->
    <div id="pg-login" class="pg">
        <div class="aw">
            <div class="ac">
                <div class="aico">🔑</div>
                <h2 class="at">Selamat Datang</h2>
                <p class="as">Masuk ke akun Express Bahari Anda</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="fg2"><label>Email <span class="req">*</span></label>
                        <input type="email" class="fc2" placeholder="email@contoh.com" name="email" id="email">
                    </div>
                    <div class="fg2"><label>Kata Sandi <span class="req">*</span></label>
                        <input type="password" class="fc2" placeholder="Masukkan kata sandi Anda" id="password" name="password">
                    </div>
                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:18px;">
                        <label
                            style="display:flex;align-items:center;gap:7px;font-size:13px;color:var(--g6);cursor:pointer;font-weight:600"><input
                                type="checkbox" style="accent-color:var(--b6)"> Ingat saya</label>
                        <a style="font-size:13px;color:var(--b6);font-weight:600;cursor:pointer">Lupa sandi?</a>
                    </div>
                    <button class="bpri" type="submit">Masuk ke Akun →</button>
                    <div class="div">atau</div>
                    <div class="al">Belum punya akun? <a href="  {{ route('register') }}">Daftar sekarang</a></div>
                </form>
            </div>
        </div>
    </div>
@endsection
