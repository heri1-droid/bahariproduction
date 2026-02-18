


@extends('landing.app')
@section('content')
    <!-- ===== REGISTER ===== -->
    <div id="pg-reg" class="pg">
        <div class="aw">
            <div class="ac" style="max-width:540px;">
                <div class="aico">📋</div>
                <h2 class="at">Buat Akun</h2>
                <p class="as">Daftar untuk memesan tiket mudik gratis</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="fr">
                        <div class="fg2"><label>Nama Lengkap <span class="req">*</span></label>
                            <input type="text" class="fc2" name="name" id="name" placeholder="Sesuai KTP">
                        </div>
                    </div>
                    <div class="fg2"><label>NIK (16 digit) <span class="req">*</span></label>
                        <input type="number" class="fc2" placeholder="Nomor Induk Kependudukan sesuai KTP" maxlength="16" id="nik" name="nik">
                    </div>
                    <div class="fr">
                        <div class="fg2"><label>No. HP <span class="req">*</span></label>
                            <input type="number" class="fc2" placeholder="08xxxxxxxxxx" id="phone" name="phone">
                        </div>
                        <div class="fg2"><label>Email <span class="req">*</span></label>
                            <input type="email" class="fc2" placeholder="email@contoh.com" id="email" name="email">
                        </div>
                    </div>
                    <div class="fr">
                        <div class="fg2"><label>Kata Sandi <span class="req">*</span></label>
                            <input type="password" class="fc2" placeholder="Min. 8 karakter" id="password" name="password">
                        </div>
                        <div class="fg2"><label>Konfirmasi Sandi <span class="req">*</span></label>
                            <input type="password" class="fc2" placeholder="Ulangi sandi" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                    <div style="margin-bottom:18px"><label
                            style="display:flex;align-items:flex-start;gap:8px;font-size:13px;color:var(--g6);cursor:pointer;line-height:1.6"><input
                                type="checkbox" id="r-cb" style="accent-color:var(--b6);margin-top:3px">Saya
                            menyetujui <a style="color:var(--b6);font-weight:700;margin:0 3px">Syarat & Ketentuan</a> serta
                            <a style="color:var(--b6);font-weight:700;margin-left:3px">Kebijakan Privasi</a> program
                            ini.</label></div>
                    <button class="bpri" type="submit">Daftar Sekarang →</button>
                    <div class="al">Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></div>
                </form>
            </div>
        </div>
    </div>
@endsection
