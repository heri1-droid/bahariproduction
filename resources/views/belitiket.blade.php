@extends('landing.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/tiketsementara.css') }}">
    <div id="pg-tiket" class="pg">
        <div class="th">
            <h1>Pesan Tiket <span style="color:var(--g2)">Mudik Gratis</span></h1>
            <p style="color:rgba(255,255,255,.8);font-size:14px">Lengkapi formulir berikut untuk mendapatkan e-tiket
                perjalanan Anda</p>
        </div>

        <div class="bl">
            <div>
                <!-- STEP TABS -->
                <div class="bsb">
                    <div class="bs2 act" id="ind1" onclick="gs(1)"><span class="bsn">1</span> Pilih Rute</div>
                    <div class="bs2" id="ind2" onclick="gs(2)"><span class="bsn">2</span> Data Penumpang</div>
                    <div class="bs2" id="ind3" onclick="gs(3)"><span class="bsn">3</span> Konfirmasi</div>
                </div>
                <div class="bcard">
                    <!-- STEP 1 -->
                    <div class="bst act" id="st1">
                        <h2>⚓ Pilih Rute &amp; Jadwal</h2>
                        <div class="fg2">
                            <label>Rute Keberangkatan <span class="req">*</span></label>
                            <select id="rute" class="fc2" onchange="selRoute()">
                                <option value="">-Pilih Rute Keberangkatan-</option>
                                <optgroup label="⚪ Pulau Sumatera">
                                    <option value="Banda Aceh → Sabang|8 jam|BDA|SBG|Sabang|🌊">Banda Aceh → Sabang</option>
                                    <option value="Sabang → Banda Aceh|8 jam|SBG|BDA|Banda Aceh|🌊">Sabang → Banda Aceh
                                    </option>
                                    <option value="Palembang → Muntok|8 jam|PLM|MTK|Muntok|⚓">Palembang → Muntok</option>
                                    <option value="Muntok → Palembang|8 jam|MTK|PLM|Palembang|⚓">Muntok → Palembang</option>
                                    <option value="Pangkal Pinang → Belitung|8 jam|PGK|BLT|Belitung|🏝️">Pangkal Pinang →
                                        Belitung</option>
                                    <option value="Belitung → Pangkal Pinang|8 jam|BLT|PGK|Pangkal Pinang|🏝️">Belitung →
                                        Pangkal Pinang</option>
                                </optgroup>
                                <optgroup label="⚪ Pulau Jawa">
                                    <option value="Gresik → Bawean|8 jam|GRS|BWN|Bawean|🚢">Gresik → Bawean</option>
                                    <option value="Bawean → Gresik|8 jam|BWN|GRS|Gresik|🚢">Bawean → Gresik</option>
                                    <option value="Jepara → Karimunjawa|8 jam|JPR|KRJ|Karimunjawa|🌊">Jepara → Karimunjawa
                                    </option>
                                    <option value="Karimunjawa → Jepara|8 jam|KRJ|JPR|Jepara|🌊">Karimunjawa → Jepara
                                    </option>
                                    <option value="Kalianget → Kangean|8 jam|KLG|KGN|Kangean|🏝️">Kalianget → Kangean
                                    </option>
                                    <option value="Kangean → Kalianget|8 jam|KGN|KLG|Kalianget|🏝️">Kangean → Kalianget
                                    </option>
                                </optgroup>
                                <optgroup label="⚪ Pulau Timur">
                                    <option value="Kupang → Rote|8 jam|KPG|ROT|Rote|⚓">Kupang → Rote</option>
                                    <option value="Rote → Kupang|8 jam|ROT|KPG|Kupang|⚓">Rote → Kupang</option>
                                    <option value="Banyuwangi → Denpasar|8 jam|BWI|DPS|Denpasar|🚢">Banyuwangi → Denpasar
                                    </option>
                                    <option value="Denpasar → Banyuwangi|8 jam|DPS|BWI|Banyuwangi|🚢">Denpasar → Banyuwangi
                                    </option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="fr">
                            <div class="fg2">
                                <label>Tanggal Keberangkatan <span class="req">*</span></label>
                                <input type="date" id="tgl" class="fc2" min="2025-03-26" max="2025-04-04"
                                    value="2025-03-26" onchange="upSum()">
                            </div>
                            <div class="fg2">
                                <label>Kelas Tiket</label>
                                <select id="kls" class="fc2" onchange="upSum()">
                                    <option>Eksekutif</option>
                                    {{-- <option>VIP</option> --}}
                                </select>
                            </div>
                        </div>

                        <div class="fg2">
                            <label>Jumlah Penumpang <span class="req">*</span></label>
                            <div class="cr">
                                <div class="cl">👤 Dewasa</div>
                                <div class="cbs">
                                    <button class="cb" type="button" onclick="cc('d',-1)">−</button>
                                    <span class="cv" id="cd">1</span>
                                    <button class="cb" type="button" onclick="cc('d',1)">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="nb2">
                            <button class="bln" onclick="gs(2)">Lanjut: Data Penumpang →</button>
                        </div>
                    </div>

                    <!-- STEP 2 -->
                    <div class="bst" id="st2">
                        <h2>👤 Data Penumpang</h2>
                        <div id="pxf"></div>
                        <div class="nb2">
                            <button class="bbk" onclick="gs(1)">← Kembali</button>
                            <button class="bln" onclick="gs(3)">Konfirmasi →</button>
                        </div>
                    </div>

                    <!-- STEP 3 -->
                    <div class="bst" id="st3">
                        <h2>✅ Konfirmasi Pemesanan</h2>
                        <div id="kdet"></div>
                        <div class="nb2">
                            <button class="bbk" onclick="gs(2)">← Kembali</button>
                            <button class="bps" onclick="pesan()">🎫 Dapatkan E-Tiket Gratis</button>
                        </div>
                    </div>

                    <!-- SUCCESS -->
                    <div class="bst" id="stok">
                        <div class="sv">
                            <div class="sch" style="color: #ffffff;">✓</div>
                            <h2 style="color: #0a2463;">Tiket Berhasil Dipesan!</h2>
                            <p>E-tiket Anda telah berhasil dibuat. Tunjukkan tiket kepada petugas saat boarding di
                                pelabuhan.</p>
                            <div id="etw">
                                <div class="etw-title">🎫 E-Tiket Mudik Gratis 2025</div>
                                <div class="route-disp">
                                    <div class="port">
                                        <div class="port-code" id="tfr">PLM</div>
                                        <div class="port-name">Asal</div>
                                    </div>
                                    <div class="arr">
                                        <div class="arr-icon">🚢</div>
                                        <div class="arr-line"></div>
                                    </div>
                                    <div class="port">
                                        <div class="port-code" id="tto">MTK</div>
                                        <div class="port-name" id="ttof">Tujuan</div>
                                    </div>
                                </div>
                                <div class="et-row"><span class="et-lbl">Tanggal</span><span class="et-val"
                                        id="ttg">—</span></div>
                                <div class="et-row"><span class="et-lbl">Kelas</span><span class="et-val"
                                        id="tkl">—</span></div>
                                <div class="et-row"><span class="et-lbl">Penumpang</span><span class="et-val"
                                        id="tpx">—</span></div>
                                <div class="et-row"><span class="et-lbl">Biaya</span><span class="et-val">🆓
                                        GRATIS</span></div>
                                <div class="bc-wrap" id="bc"></div>
                                <div class="code-disp" id="tcode">BHE-2025-XXXXXX</div>
                            </div>
                            <button class="bpri" onclick="resetAll()">← Pesan Tiket Lain</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SIDEBAR -->
            <div class="sidebar">

                <div class="info-box">
                    <strong>ℹ️ Informasi Penting</strong>
                    Tiket ini merupakan program mudik gratis dari pemerintah. Hadir 30 menit sebelum keberangkatan. Bawa
                    dokumen identitas asli.
                </div>
            </div>

        </div>


        <style>
            @media (max-width: 768px) {

                #pg-tiket {
                    padding-top: 68px;
                }

                .th {
                    padding: 18px 18px 22px;
                }

                .th h1 {
                    font-size: 20px;
                    line-height: 1.2;
                    margin-bottom: 5px;
                }

                .th p {
                    font-size: 12px;
                    line-height: 1.5;
                }
            }

            @media (max-width: 380px) {

                .th {
                    padding: 14px 16px 18px;
                }

                .th h1 {
                    font-size: 17px;
                }

                .th p {
                    font-size: 11px;
                }
            }
        </style>
        <div id="toast" class="toast"></div>
        <script src="{{ asset('js/app.js') }}"></script>
    </div>
@endsection
