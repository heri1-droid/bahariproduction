{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}




@extends('landing.app')
@section('content')
 <!-- ===== REGISTER ===== -->
    <div id="pg-reg" class="pg">
        <div class="aw">
            <div class="ac" style="max-width:540px;">
                <div class="aico">📋</div>
                <h2 class="at">Buat Akun</h2>
                <p class="as">Daftar untuk memesan tiket mudik gratis</p>
                <div class="fr">
                    <div class="fg2"><label>Nama Lengkap <span class="req">*</span></label><input type="text"
                            class="fc2" placeholder="Sesuai KTP" id="r-fn"></div>
                    
                </div>
                <div class="fg2"><label>NIK (16 digit) <span class="req">*</span></label><input type="number"
                        class="fc2" placeholder="Nomor Induk Kependudukan sesuai KTP" maxlength="16" id="r-nik">
                </div>

                <!-- DAK JADI KTP UPLOAD -->
                {{-- <div class="fg2">
                    <label>📎 Foto KTP <span class="req">*</span></label>
                    <div class="ktp-info">
                        <span style="font-size:18px;flex-shrink:0">ℹ️</span>
                        <div class="ktp-info-text">
                            <strong>Panduan Upload KTP</strong>
                            Foto KTP jelas, tidak blur, seluruh bagian terlihat. Format JPG, PNG, atau PDF. Maks. 2 MB.
                        </div>
                    </div>
                    <div class="ua" id="ua-reg" onclick="document.getElementById('fi-reg').click()">
                        <input type="file" id="fi-reg" accept="image/jpeg,image/png,application/pdf"
                            style="display:none" onchange="hKTP(this,'reg')">
                        <div id="up-reg">
                            <div class="uico">🪪</div>
                            <div class="utit">Klik untuk pilih foto KTP</div>
                            <div class="usub">JPG, PNG, PDF • Maks. 2 MB</div>
                        </div>
                        <div class="uprev" id="uv-reg">
                            <img id="ui-reg" src="" alt="KTP">
                            <div class="ufn" id="uf-reg"></div>
                        </div>
                    </div>
                </div> --}}

                <div class="fr">
                    <div class="fg2"><label>No. HP <span class="req">*</span></label><input type="number"
                            class="fc2" placeholder="08xxxxxxxxxx" id="r-hp"></div>
                    <div class="fg2"><label>Email <span class="req">*</span></label><input type="email"
                            class="fc2" placeholder="email@contoh.com" id="r-em"></div>
                </div>
                <div class="fr">
                    <div class="fg2"><label>Kata Sandi <span class="req">*</span></label><input type="password"
                            class="fc2" placeholder="Min. 8 karakter" id="r-pw"></div>
                    <div class="fg2"><label>Konfirmasi Sandi <span class="req">*</span></label><input
                            type="password" class="fc2" placeholder="Ulangi sandi" id="r-pw2"></div>
                </div>
                <div style="margin-bottom:18px"><label
                        style="display:flex;align-items:flex-start;gap:8px;font-size:13px;color:var(--g6);cursor:pointer;line-height:1.6"><input
                            type="checkbox" id="r-cb" style="accent-color:var(--b6);margin-top:3px">Saya
                        menyetujui <a style="color:var(--b6);font-weight:700;margin:0 3px">Syarat & Ketentuan</a> serta
                        <a style="color:var(--b6);font-weight:700;margin-left:3px">Kebijakan Privasi</a> program
                        ini.</label></div>
                <button class="bpri" onclick="doReg()">Daftar Sekarang →</button>
                <div class="al">Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></div>
            </div>
        </div>
    </div>
@endsection
