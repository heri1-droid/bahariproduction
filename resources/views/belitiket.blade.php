@extends('landing.app')
@section('content')
    <div id="pg-tiket" class="pg">
        <div class="th">
            <h1>Pesan Tiket <span style="color:var(--b2)">Mudik Gratis</span></h1>
            <p style="color:rgba(255,255,255,.8);font-size:14px">Lengkapi formulir berikut untuk mendapatkan e-tiket
                perjalanan Anda</p>
        </div>

        <div class="bl">
            <div>
                <div class="bsb">
                    <div class="bs2 act" id="ind1"><span class="bsn">1</span>Pilih Rute</div>
                    <div class="bs2" id="ind2"><span class="bsn">2</span>Data Penumpang</div>
                    <div class="bs2" id="ind3"><span class="bsn">3</span>Konfirmasi</div>
                </div>

                <div class="bcard">
                    <!-- STEP 1 -->
                    <div class="bst act" id="st1">
                        <h2>⚓ Pilih Rute & Jadwal</h2>
                        {{-- <div class="fg2">
                            <label>Rute Keberangkatan <span class="req">*</span></label>
                            <div class="ro" id="ro">
                                <div class="ropt"
                                    onclick="selR(this,'Jakarta → Semarang','8 jam','JKT','SMG','Semarang')">
                                    <div class="roi">⚓</div>
                                    <div class="ron">Jakarta → Semarang</div>
                                    <div class="rod">±8 jam</div>
                                </div>
                                <div class="ropt"
                                    onclick="selR(this,'Jakarta → Surabaya','18 jam','JKT','SBY','Surabaya')">
                                    <div class="roi">🚢</div>
                                    <div class="ron">Jakarta → Surabaya</div>
                                    <div class="rod">±18 jam</div>
                                </div>
                                <div class="ropt" onclick="selR(this,'Jakarta → Medan','36 jam','JKT','MDN','Medan')">
                                    <div class="roi">🌊</div>
                                    <div class="ron">Jakarta → Medan</div>
                                    <div class="rod">±36 jam</div>
                                </div>
                                <div class="ropt"
                                    onclick="selR(this,'Surabaya → Makassar','24 jam','SBY','MKS','Makassar')">
                                    <div class="roi">🏝️</div>
                                    <div class="ron">Surabaya → Makassar</div>
                                    <div class="rod">±24 jam</div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="fg2">
                            <label>Rute Keberangkatan <span class="req">*</span></label>
                            <select id="rute" class="fc2" onchange="selRoute()">
                                <option value="">-- Pilih Rute Keberangkatan --</option>

                                <optgroup label="Pulau Sumatera">
                                    <option value="Banda Aceh → Sabang|8 jam|BDA|SBG|Sabang|🌊">Banda Aceh → Sabang 
                                    </option>
                                    <option value="Sabang → Banda Aceh|8 jam|SBG|BDA|Banda Aceh|🌊">Sabang → Banda Aceh (±8
                                        jam)</option>

                                    <option value="Palembang → Muntok|8 jam|PLM|MTK|Muntok|⚓">Palembang → Muntok 
                                    </option>
                                    <option value="Muntok → Palembang|8 jam|MTK|PLM|Palembang|⚓">Muntok → Palembang 
                                    </option>

                                    <option value="Pangkal Pinang → Belitung|8 jam|PGK|BLT|Belitung|🏝️">Pangkal Pinang →
                                        Belitung </option>
                                    <option value="Belitung → Pangkal Pinang|8 jam|BLT|PGK|Pangkal Pinang|🏝️">Belitung →
                                        Pangkal Pinang </option>
                                </optgroup>

                                <optgroup label="Pulau Jawa">
                                    <option value="Gresik → Bawean|8 jam|GRS|BWN|Bawean|🚢">Gresik → Bawean 
                                    </option>
                                    <option value="Bawean → Gresik|8 jam|BWN|GRS|Gresik|🚢">Bawean → Gresik 
                                    </option>

                                    <option value="Jepara → Karimunjawa|8 jam|JPR|KRJ|Karimunjawa|🌊">Jepara → Karimunjawa
                                        </option>
                                    <option value="Karimunjawa → Jepara|8 jam|KRJ|JPR|Jepara|🌊">Karimunjawa → Jepara (±8
                                        jam)</option>

                                    <option value="Kalianget → Kangean|8 jam|KLG|KGN|Kangean|🏝️">Kalianget → Kangean (±8
                                        jam)</option>
                                    <option value="Kangean → Kalianget|8 jam|KGN|KLG|Kalianget|🏝️">Kangean → Kalianget (±8
                                        jam)</option>
                                </optgroup>

                                <optgroup label="Pulau Timur">
                                    <option value="Kupang → Rote|8 jam|KPG|ROT|Rote|⚓">Kupang → Rote </option>
                                    <option value="Rote → Kupang|8 jam|ROT|KPG|Kupang|⚓">Rote → Kupang </option>

                                    <option value="Banyuwangi → Denpasar|8 jam|BWI|DPS|Denpasar|🚢">Banyuwangi → Denpasar
                                        </option>
                                    <option value="Denpasar → Banyuwangi|8 jam|DPS|BWI|Banyuwangi|🚢">Denpasar → Banyuwangi
                                        </option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="fr">
                            <div class="fg2"><label>Tanggal Keberangkatan <span class="req">*</span></label><input
                                    type="date" id="tgl" class="fc2" min="2025-03-26" max="2025-04-04"
                                    value="2025-03-26" onchange="upSum()"></div>
                            <div class="fg2"><label>Kelas Tiket</label><select id="kls" class="fc2"
                                    onchange="upSum()">
                                    <option>Ekonomi</option>
                                    <option>VIP</option>
                                </select></div>
                        </div>
                        <div class="fg2">
                            <label>Jumlah Penumpang <span class="req">*</span></label>
                            <div class="cr">
                                <div class="cl">👤 Dewasa</div>
                                <div class="cbs"><button class="cb" type="button"
                                        onclick="cc('d',-1)">−</button><span class="cv" id="cd">1</span><button
                                        class="cb" type="button" onclick="cc('d',1)">+</button></div>
                            </div>
                            <div class="cr">
                                <div class="cl">👶 Anak-anak (≤12 th)</div>
                                <div class="cbs"><button class="cb" type="button"
                                        onclick="cc('a',-1)">−</button><span class="cv" id="ca">0</span><button
                                        class="cb" type="button" onclick="cc('a',1)">+</button></div>
                            </div>
                        </div>
                        <div class="nb2"><button class="bln" onclick="gs(2)">Lanjut: Data Penumpang →</button>
                        </div>
                    </div>

                    <!-- STEP 2 -->
                    <div class="bst" id="st2">
                        <h2>👤 Data Penumpang</h2>
                        <div id="pxf"></div>
                        <div class="nb2"><button class="bbk" onclick="gs(1)">← Kembali</button><button class="bln"
                                onclick="gs(3)">Konfirmasi →</button></div>
                    </div>

                    <!-- STEP 3 -->
                    <div class="bst" id="st3">
                        <h2>✅ Konfirmasi Pemesanan</h2>
                        <div id="kdet"></div>
                        <div class="nb2"><button class="bbk" onclick="gs(2)">← Kembali</button><button class="bps"
                                onclick="pesan()">🎫 Dapatkan E-Tiket Gratis</button></div>
                    </div>

                    <!-- SUCCESS -->
                    <div class="bst" id="stok">
                        <div class="sv">
                            <div class="sch">✓</div>
                            <h2>Tiket Berhasil Dipesan!</h2>
                            <p>E-tiket Anda telah berhasil dibuat. Tunjukkan tiket kepada petugas saat boarding di
                                pelabuhan.</p>
                            <button class="bpri" style="margin:0 auto" onclick="sp('home')">← Kembali ke
                                Beranda</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SUMMARY -->
            <div>
                <div class="os">
                    <h3>🧾 Ringkasan</h3>
                    <div class="orb">
                        <div class="orn" id="srt">Pilih rute...</div>
                        <div class="ord" id="stg">Tanggal belum dipilih</div>
                    </div>
                    <div class="sr2"><span class="lb">Kelas</span><span class="vl"
                            id="skl">Ekonomi</span></div>
                    <div class="sr2"><span class="lb">Dewasa</span><span class="vl" id="ssd">1
                            penumpang</span></div>
                    <div class="sr2"><span class="lb">Anak</span><span class="vl" id="ssa">0
                            penumpang</span></div>
                    <div class="tr"><span class="tl">Total Biaya</span><span><span class="ta">Rp 0</span>
                            <span class="badge-g">GRATIS</span></span></div>

                    <div id="etw" style="display:none;margin-top:18px">
                        <div class="et">
                            <div class="et-top"><span>⚓ Bahari Express</span><span>E-TIKET MUDIK</span></div>
                            <div class="et-body">
                                <div class="et-r">
                                    <div>
                                        <div class="et-c" id="tfr">JKT</div>
                                        <div class="et-cs">Jakarta</div>
                                    </div>
                                    <div class="et-s">⛴️</div>
                                    <div style="text-align:right">
                                        <div class="et-c" id="tto">SMG</div>
                                        <div class="et-cs" id="ttof">Semarang</div>
                                    </div>
                                </div>
                                <div class="et-sep"></div>
                                <div class="et-det">
                                    <div class="et-d"><label>Tanggal</label><span id="ttg">—</span></div>
                                    <div class="et-d"><label>Kelas</label><span id="tkl">Ekonomi</span></div>
                                    <div class="et-d"><label>Penumpang</label><span id="tpx">1 Orang</span>
                                    </div>
                                    <div class="et-d"><label>Status</label><span style="color:#16a34a;font-weight:700">✓
                                            Confirmed</span></div>
                                </div>
                            </div>
                            <div class="et-bc">
                                <div class="bv" id="bc"></div>
                                <div class="ec" id="tcode">BHE-2025-000000</div>
                            </div>
                        </div>
                        <button onclick="window.print()" class="bout"
                            style="width:100%;justify-content:center;margin-top:10px">🖨️ Cetak E-Tiket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
