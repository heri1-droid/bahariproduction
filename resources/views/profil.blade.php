

@extends('landing.app')
@section('content')
    {{-- HERO HEADER --}}
    <div class="ph" style="padding:50px 5% 80px;">
        <div style="display:flex;flex-direction:column;align-items:center;gap:14px;">

            <br><br><br>
            <div
                style="width:90px;height:90px;border-radius:50%;background:rgba(255,255,255,.15);border:3px solid rgba(255,255,255,.4);display:flex;align-items:center;justify-content:center;box-shadow:0 8px 30px rgba(0,0,0,.15);">
                <i class="fa-solid fa-user" style="font-size:38px;color:rgba(255,255,255,.9);"></i>
            </div>

            <div style="text-align:center;">
                <h2 style="font-family:'Lora',serif;font-size:24px;font-weight:700;color:#fff;margin-bottom:4px;">
                    Budi Santoso
                </h2>
                <p style="font-size:13px;color:rgba(255,255,255,.75);letter-spacing:.5px;">
                    budi.santoso@email.com
                </p>
            </div>

            <span
                style="background:rgba(34,197,94,.2);border:1px solid rgba(34,197,94,.5);color:#bbf7d0;font-size:11px;font-weight:700;padding:4px 14px;border-radius:100px;letter-spacing:1px;">
                ✓ Terverifikasi
            </span>

        </div>
    </div>

    <div style="max-width:900px;margin:0 auto;padding:32px 5% 72px;display:flex;flex-direction:column;gap:24px;">

        {{-- ── RIWAYAT TIKET ── --}}
        <div class="pc" style="border-radius:20px;">

            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
                <h3
                    style="font-family:'Lora',serif;font-size:18px;color:var(--b8);display:flex;align-items:center;gap:8px;margin:0;">
                    <i class="fa-solid fa-ticket" style="color:var(--b5);font-size:16px;"></i>
                    Riwayat Pemesanan Tiket
                </h3>
                <a href="#"
                    style="font-size:13px;color:var(--b6);font-weight:700;text-decoration:none;display:flex;align-items:center;gap:5px;">
                    <i class="fa-solid fa-plus" style="font-size:11px;"></i> Pesan Baru
                </a>
            </div>

            {{-- Tiket 1 - Diterima --}}
            <div style="border:1.5px solid var(--g2);border-radius:14px;padding:18px;margin-bottom:12px;">
                <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
                    <div style="display:flex;align-items:center;gap:14px;">
                        <div
                            style="width:44px;height:44px;border-radius:10px;background:var(--b0);border:1px solid var(--b1);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <i class="fa-solid fa-ship" style="font-size:18px;color:var(--b5);"></i>
                        </div>
                        <div>
                            <div style="font-weight:700;font-size:15px;color:var(--g8);margin-bottom:4px;">Palembang →
                                Muntok</div>
                            <div style="font-size:12px;color:var(--g5);display:flex;gap:12px;flex-wrap:wrap;">
                                <span><i class="fa-regular fa-calendar" style="margin-right:4px;"></i>28 Maret 2025</span>
                                <span><i class="fa-solid fa-chair" style="margin-right:4px;"></i>Ekonomi</span>
                                <span><i class="fa-solid fa-users" style="margin-right:4px;"></i>2 penumpang</span>
                            </div>
                        </div>
                    </div>
                    <div style="display:flex;flex-direction:column;align-items:flex-end;gap:6px;">
                        <span
                            style="background:#dcfce7;color:#15803d;font-size:11px;font-weight:700;padding:4px 12px;border-radius:100px;">
                            <i class="fa-solid fa-circle-check" style="margin-right:4px;"></i> Diterima
                        </span>
                        <div style="font-size:11px;color:var(--g4);font-family:monospace;letter-spacing:1px;">
                            BHE-2025-ABC123</div>
                    </div>
                </div>
                <div style="margin-top:14px;padding-top:12px;border-top:1px solid var(--g1);">
                    <a href="#"
                        style="font-size:12px;font-weight:700;color:var(--b6);text-decoration:none;display:inline-flex;align-items:center;gap:5px;padding:6px 14px;border:1.5px solid var(--b3);border-radius:8px;">
                        <i class="fa-solid fa-ticket"></i> Lihat E-Tiket
                    </a>
                </div>
            </div>

            {{-- Tiket 2 - Menunggu --}}
            <div style="border:1.5px solid var(--g2);border-radius:14px;padding:18px;margin-bottom:12px;">
                <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
                    <div style="display:flex;align-items:center;gap:14px;">
                        <div
                            style="width:44px;height:44px;border-radius:10px;background:var(--b0);border:1px solid var(--b1);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <i class="fa-solid fa-ship" style="font-size:18px;color:var(--b5);"></i>
                        </div>
                        <div>
                            <div style="font-weight:700;font-size:15px;color:var(--g8);margin-bottom:4px;">Kupang →
                                Rote</div>
                            <div style="font-size:12px;color:var(--g5);display:flex;gap:12px;flex-wrap:wrap;">
                                <span><i class="fa-regular fa-calendar" style="margin-right:4px;"></i>30 Maret 2025</span>
                                <span><i class="fa-solid fa-chair" style="margin-right:4px;"></i>VIP</span>
                                <span><i class="fa-solid fa-users" style="margin-right:4px;"></i>3 penumpang</span>
                            </div>
                        </div>
                    </div>
                    <div style="display:flex;flex-direction:column;align-items:flex-end;gap:6px;">
                        <span
                            style="background:#fef3c7;color:#b45309;font-size:11px;font-weight:700;padding:4px 12px;border-radius:100px;">
                            <i class="fa-solid fa-clock" style="margin-right:4px;"></i> Menunggu
                        </span>
                        <div style="font-size:11px;color:var(--g4);font-family:monospace;letter-spacing:1px;">
                            BHE-2025-DEF456</div>
                    </div>
                </div>
            </div>

            {{-- Tiket 3 - Ditolak --}}
            <div style="border:1.5px solid var(--g2);border-radius:14px;padding:18px;">
                <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
                    <div style="display:flex;align-items:center;gap:14px;">
                        <div
                            style="width:44px;height:44px;border-radius:10px;background:var(--b0);border:1px solid var(--b1);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <i class="fa-solid fa-ship" style="font-size:18px;color:var(--b5);"></i>
                        </div>
                        <div>
                            <div style="font-weight:700;font-size:15px;color:var(--g8);margin-bottom:4px;">Gresik → Bawean
                            </div>
                            <div style="font-size:12px;color:var(--g5);display:flex;gap:12px;flex-wrap:wrap;">
                                <span><i class="fa-regular fa-calendar" style="margin-right:4px;"></i>26 Maret 2025</span>
                                <span><i class="fa-solid fa-chair" style="margin-right:4px;"></i>Ekonomi</span>
                                <span><i class="fa-solid fa-users" style="margin-right:4px;"></i>1 penumpang</span>
                            </div>
                        </div>
                    </div>
                    <div style="display:flex;flex-direction:column;align-items:flex-end;gap:6px;">
                        <span
                            style="background:#fef2f2;color:#b91c1c;font-size:11px;font-weight:700;padding:4px 12px;border-radius:100px;">
                            <i class="fa-solid fa-circle-xmark" style="margin-right:4px;"></i> Ditolak
                        </span>
                        <div style="font-size:11px;color:var(--g4);font-family:monospace;letter-spacing:1px;">
                            BHE-2025-GHI789</div>
                    </div>
                </div>
            </div>

        </div>

        {{-- ── DATA DIRI ── --}}
        <div class="pc" style="border-radius:20px;">

            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
                <h3
                    style="font-family:'Lora',serif;font-size:18px;color:var(--b8);display:flex;align-items:center;gap:8px;margin:0;">
                    <i class="fa-solid fa-id-card" style="color:var(--b5);font-size:16px;"></i>
                    Data Diri
                </h3>
                <a href="#"
                    style="font-size:13px;color:var(--b6);font-weight:700;text-decoration:none;display:flex;align-items:center;gap:5px;">
                    <i class="fa-solid fa-pen-to-square" style="font-size:12px;"></i> Edit
                </a>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:18px;">
                <div>
                    <div
                        style="font-size:11px;font-weight:700;color:var(--g5);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:5px;">
                        Nama Depan</div>
                    <div style="font-size:15px;font-weight:600;color:var(--g8);">Budi</div>
                </div>
                <div>
                    <div
                        style="font-size:11px;font-weight:700;color:var(--g5);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:5px;">
                        Nama Belakang</div>
                    <div style="font-size:15px;font-weight:600;color:var(--g8);">Santoso</div>
                </div>
                <div>
                    <div
                        style="font-size:11px;font-weight:700;color:var(--g5);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:5px;">
                        NIK</div>
                    <div style="font-size:15px;font-weight:600;color:var(--g8);font-family:monospace;letter-spacing:1px;">
                        3271 •••• •••• 0001</div>
                </div>
                <div>
                    <div
                        style="font-size:11px;font-weight:700;color:var(--g5);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:5px;">
                        No. HP</div>
                    <div style="font-size:15px;font-weight:600;color:var(--g8);">0812-3456-7890</div>
                </div>
                <div>
                    <div
                        style="font-size:11px;font-weight:700;color:var(--g5);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:5px;">
                        Email</div>
                    <div style="font-size:15px;font-weight:600;color:var(--g8);">budi.santoso@email.com</div>
                </div>
                <div>
                    <div
                        style="font-size:11px;font-weight:700;color:var(--g5);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:5px;">
                        Bergabung Sejak</div>
                    <div style="font-size:15px;font-weight:600;color:var(--g8);">10 Januari 2025</div>
                </div>
            </div>

            {{-- KTP status --}}
            <div
                style="margin-top:20px;padding-top:18px;border-top:1px solid var(--g1);display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:10px;">
                <div style="display:flex;align-items:center;gap:10px;">
                    <i class="fa-solid fa-id-card" style="font-size:20px;color:var(--b4);"></i>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--g7);">Foto KTP</div>
                        <div style="font-size:12px;color:var(--g5);">Sudah diupload</div>
                    </div>
                </div>
                <span
                    style="background:#dcfce7;color:#15803d;font-size:11px;font-weight:700;padding:3px 12px;border-radius:100px;">
                    ✓ Tersimpan
                </span>
            </div>

        </div>



        {{-- ── LOGOUT ── --}}
        <div style="text-align:center;padding-bottom:16px;">
            <a href="#"
                style="display:inline-flex;align-items:center;gap:7px;border:1.5px solid var(--g3);color:var(--g5);font-size:14px;font-weight:600;padding:10px 28px;border-radius:10px;text-decoration:none;">
                <i class="fa-solid fa-right-from-bracket"></i> Keluar
            </a>
        </div>

    </div>
    
@endsection
