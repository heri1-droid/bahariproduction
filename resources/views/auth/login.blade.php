{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('landing.app')
@section('content')

 <!-- ===== LOGIN ===== -->
    <div id="pg-login" class="pg">
        <div class="aw">
            <div class="ac">
                <div class="aico">🔑</div>
                <h2 class="at">Selamat Datang</h2>
                <p class="as">Masuk ke akun Bahari Express Anda</p>
                <div class="fg2"><label>Email <span class="req">*</span></label><input type="email"
                        class="fc2" placeholder="email@contoh.com" id="lin-email"></div>
                <div class="fg2"><label>Kata Sandi <span class="req">*</span></label><input type="password"
                        class="fc2" placeholder="Masukkan kata sandi Anda" id="lin-pass"></div>
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:18px;">
                    <label
                        style="display:flex;align-items:center;gap:7px;font-size:13px;color:var(--g6);cursor:pointer;font-weight:600"><input
                            type="checkbox" style="accent-color:var(--b6)"> Ingat saya</label>
                    <a style="font-size:13px;color:var(--b6);font-weight:600;cursor:pointer">Lupa sandi?</a>
                </div>
                <button class="bpri" onclick="doLogin()">Masuk ke Akun →</button>
                <div class="div">atau</div>
                <button class="bout" onclick="sp('tiket')">🎫 Lanjutkan sebagai Tamu</button>
                <div class="al">Belum punya akun? <a onclick="sp('reg')">Daftar sekarang</a></div>
            </div>
        </div>
    </div>

@endsection
