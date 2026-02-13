// mobile
const ships = document.querySelectorAll(".ship");
let index = 0;

setInterval(() => {
    ships[index].classList.remove("active");
    index = (index + 1) % ships.length;
    ships[index].classList.add("active");
}, 3000);

//pulau
const regions = document.querySelectorAll(".region");

regions.forEach(region => {
    region.querySelector(".region-title").addEventListener("click", () => {

        regions.forEach(r => r.classList.remove("active"));
        region.classList.add("active");

    });
});






function selRoute() {
    const sel = document.getElementById('rute');
    const val = sel.value;
    
    if (!val) {
        // Reset jika tidak ada pilihan
        S.r = '';
        S.dur = '';
        S.fr = '';
        S.to = '';
        S.tof = '';
        upSum();
        return;
    }
    
    // Parse value: "Banda Aceh → Sabang|8 jam|BDA|SBG|Sabang|🌊"
    const [nama, durasi, from, to, tujuan, icon] = val.split('|');
    
    // Update global state S
    Object.assign(S, {
        r: nama,
        dur: durasi,
        fr: from,
        to: to,
        tof: tujuan
    });
    
    // Update summary di sidebar
    upSum();
}






















//SCRIPT SEMENTARA
const S = { r: '', dur: '', fr: 'JKT', to: 'SMG', tof: 'Semarang', d: 1, a: 0 };
const ktp = {};

function sp(p) {
    document.querySelectorAll('.pg').forEach(e => e.classList.remove('act'));
    document.querySelectorAll('.nm a').forEach(a => a.classList.remove('active'));
    document.getElementById('pg-' + p).classList.add('act');
    const n = document.getElementById('n-' + p);
    if (n) n.classList.add('active');
    window.scrollTo(0, 0);
}

function pRoute(r) { sp('tiket'); setTimeout(() => { document.querySelectorAll('.ropt').forEach(o => { if (o.querySelector('.ron').textContent === r) { o.classList.add('sel'); S.r = r; upSum(); } }); }, 100) }

function selR(el, r, d, fr, to, tof) {
    document.querySelectorAll('.ropt').forEach(o => o.classList.remove('sel'));
    el.classList.add('sel'); Object.assign(S, { r, dur: d, fr, to, tof }); upSum();
}

function cc(t, d) {
    if (t === 'd') { S.d = Math.max(1, S.d + d); document.getElementById('cd').textContent = S.d; }
    else { S.a = Math.max(0, S.a + d); document.getElementById('ca').textContent = S.a; }
    upSum();
}

function upSum() {
    document.getElementById('srt').textContent = S.r || 'Pilih rute...';
    document.getElementById('skl').textContent = document.getElementById('kls').value;
    document.getElementById('ssd').textContent = S.d + ' penumpang';
    document.getElementById('ssa').textContent = S.a + ' penumpang';
    const tg = document.getElementById('tgl').value;
    if (tg) { const dt = new Date(tg); document.getElementById('stg').textContent = dt.toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }); }
}

function gs(n) {
    if (n === 2 && !S.r) { toast('⚠️ Pilih rute terlebih dahulu!', 'wn'); return; }
    if (n === 2 && !document.getElementById('tgl').value) { toast('⚠️ Pilih tanggal keberangkatan!', 'wn'); return; }
    if (n === 2) bpx();
    if (n === 3) { if (!valPx()) return; bkfm(); }
    document.querySelectorAll('.bst').forEach(s => s.classList.remove('act'));
    document.getElementById('st' + n).classList.add('act');
    document.querySelectorAll('.bs2').forEach((b, i) => { b.classList.remove('act', 'dn'); if (i + 1 === n) b.classList.add('act'); if (i + 1 < n) b.classList.add('dn'); });
    window.scrollTo({ top: 130, behavior: 'smooth' });
}

function bpx() {
    const tot = S.d + S.a; let h = '';
    for (let i = 1; i <= tot; i++) {
        const ank = i > S.d;
        h += `<div class="pxc">
      <div class="pxt">${ank ? '👶' : '👤'} Penumpang ${i}${ank ? ' (Anak-anak)' : ' (Dewasa)'}</div>
      <div class="fr">
        <div class="fg2"><label>Nama Lengkap <span class="req">*</span></label><input type="text" id="pn${i}" class="fc2" placeholder="Sesuai KTP / Akta"></div>
        <div class="fg2"><label>${ank ? 'No. Akta Lahir' : 'NIK KTP'} <span class="req">*</span></label><input type="text" id="pk${i}" class="fc2" placeholder="Nomor identitas" maxlength="${ank ? 20 : 16}"></div>
      </div>
      <div class="fr">
        <div class="fg2"><label>Jenis Kelamin</label><select id="pj${i}" class="fc2"><option value="L">Laki-laki</option><option value="P">Perempuan</option></select></div>
        <div class="fg2"><label>Tanggal Lahir</label><input type="date" id="pt${i}" class="fc2"></div>
      </div>
      <div class="fg2">
        <label>📎 ${ank ? 'Akta Lahir' : 'Foto KTP'} <span class="req">*</span></label>
        <div class="ktp-info"><span style="font-size:17px;flex-shrink:0">ℹ️</span><div class="ktp-info-text"><strong>Panduan Upload</strong>Pastikan dokumen jelas dan terbaca. JPG/PNG/PDF, maks. 2 MB.</div></div>
        <div class="ua" id="ua${i}" onclick="document.getElementById('fi${i}').click()">
          <input type="file" id="fi${i}" accept="image/jpeg,image/png,application/pdf" style="display:none" onchange="hKTP(this,${i})">
          <div id="up${i}"><div class="uico">${ank ? '📄' : '🪪'}</div><div class="utit">Klik untuk pilih ${ank ? 'Akta Lahir' : 'foto KTP'}</div><div class="usub">JPG, PNG, PDF • Maks. 2 MB</div></div>
          <div class="uprev" id="uv${i}"><img id="ui${i}" src="" alt="" style="max-height:80px;border-radius:8px;border:1px solid var(--b2)"><div class="ufn" id="uf${i}"></div></div>
        </div>
      </div>
    </div>`;
    }
    document.getElementById('pxf').innerHTML = h;
}

function hKTP(inp, i) {
    if (!inp.files || !inp.files[0]) return;
    const f = inp.files[0];
    if (f.size > 2 * 1024 * 1024) { toast('⚠️ File melebihi 2 MB!', 'wn'); inp.value = ''; return; }
    ktp[i] = f;
    document.getElementById('ua' + i).classList.add('hf');
    document.getElementById('up' + i).style.display = 'none';
    document.getElementById('uv' + i).style.display = 'block';
    document.getElementById('uf' + i).textContent = '✓ ' + f.name;
    if (f.type.startsWith('image/')) { const r = new FileReader(); r.onload = e => { document.getElementById('ui' + i).src = e.target.result; document.getElementById('ui' + i).style.display = 'block'; }; r.readAsDataURL(f); }
    else { document.getElementById('ui' + i).style.display = 'none'; document.getElementById('uf' + i).textContent = '📄 ' + f.name; }
    toast('✓ Dokumen penumpang ' + i + ' berhasil dipilih', 'ok');
}

function hKTP(inp, id) {
    if (!inp.files || !inp.files[0]) return;
    const f = inp.files[0], key = id;
    if (f.size > 2 * 1024 * 1024) { toast('⚠️ File melebihi 2 MB!', 'wn'); inp.value = ''; return; }
    ktp[key] = f;
    const sfx = id === 'reg' ? '-reg' : id;
    const ua = document.getElementById('ua' + sfx) || document.getElementById('ua' + id);
    const upDiv = document.getElementById('up' + sfx) || document.getElementById('up' + id);
    const uvDiv = document.getElementById('uv' + sfx) || document.getElementById('uv' + id);
    const ufEl = document.getElementById('uf' + sfx) || document.getElementById('uf' + id);
    const uiEl = document.getElementById('ui' + sfx) || document.getElementById('ui' + id);
    if (ua) ua.classList.add('hf');
    if (upDiv) upDiv.style.display = 'none';
    if (uvDiv) uvDiv.style.display = 'block';
    if (ufEl) ufEl.textContent = '✓ ' + f.name;
    if (f.type.startsWith('image/')) { const r = new FileReader(); r.onload = e => { if (uiEl) { uiEl.src = e.target.result; uiEl.style.display = 'block'; } }; r.readAsDataURL(f); }
    else { if (uiEl) uiEl.style.display = 'none'; if (ufEl) ufEl.textContent = '📄 ' + f.name; }
    toast('✓ Dokumen berhasil dipilih', 'ok');
}

function valPx() {
    const tot = S.d + S.a;
    for (let i = 1; i <= tot; i++) {
        if (!document.getElementById('pn' + i) || !document.getElementById('pn' + i).value.trim()) { toast('⚠️ Lengkapi nama penumpang ' + i, 'wn'); return false; }
        if (!document.getElementById('pk' + i).value.trim()) { toast('⚠️ Lengkapi NIK penumpang ' + i, 'wn'); return false; }
        if (!ktp[i]) { toast('⚠️ Upload dokumen penumpang ' + i, 'wn'); return false; }
    }
    return true;
}

function bkfm() {
    const tot = S.d + S.a; const tg = document.getElementById('tgl').value; const kl = document.getElementById('kls').value;
    const dt = new Date(tg); const ts = dt.toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
    let rows = '';
    for (let i = 1; i <= tot; i++) {
        const nm = document.getElementById('pn' + i).value;
        const nk = document.getElementById('pk' + i).value;
        const fn = ktp[i] ? ktp[i].name : '—';
        rows += `<div class="sr2"><span class="lb">${nm}</span><span class="vl" style="font-size:12px;color:var(--g5)">${nk} · 📎 ${fn}</span></div>`;
    }
    document.getElementById('kdet').innerHTML = `
    <div class="orb" style="margin-bottom:16px"><div class="orn">${S.r}</div><div class="ord">${ts} · ${S.dur} · Kelas ${kl}</div></div>
    <div style="font-size:11px;font-weight:700;color:var(--g5);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:8px">Daftar Penumpang & Dokumen</div>
    ${rows}
    <div class="tr"><span class="tl">Total Biaya</span><span><span class="ta">Rp 0</span> <span class="badge-g">GRATIS</span></span></div>`;
}

function pesan() {
    const code = 'BHE-2025-' + Math.floor(100000 + Math.random() * 900000);
    const tg = document.getElementById('tgl').value; const kl = document.getElementById('kls').value; const dt = new Date(tg);
    document.getElementById('tfr').textContent = S.fr;
    document.getElementById('tto').textContent = S.to;
    document.getElementById('ttof').textContent = S.tof;
    document.getElementById('ttg').textContent = dt.toLocaleDateString('id-ID', { day: 'numeric', month: 'short', year: 'numeric' });
    document.getElementById('tkl').textContent = kl;
    document.getElementById('tpx').textContent = (S.d + S.a) + ' Orang';
    document.getElementById('tcode').textContent = code;
    const hts = [32, 44, 22, 36, 44, 28, 38, 20, 42, 30, 36, 22, 44, 28, 38, 24, 40, 30, 26, 44, 20, 38, 42, 24];
    document.getElementById('bc').innerHTML = hts.map(h => `<span style="height:${h}px"></span>`).join('');
    document.getElementById('etw').style.display = 'block';
    document.querySelectorAll('.bst').forEach(s => s.classList.remove('act'));
    document.getElementById('stok').classList.add('act');
    document.querySelectorAll('.bs2').forEach(b => b.classList.add('dn'));
    toast('🎉 Tiket berhasil! ' + code, 'ok');
    window.scrollTo({ top: 100, behavior: 'smooth' });
}

function doLogin() {
    const e = document.getElementById('lin-email').value.trim();
    const p = document.getElementById('lin-pass').value;
    if (!e || !p) { toast('⚠️ Isi email dan kata sandi!', 'wn'); return; }
    toast('✓ Berhasil masuk!', 'ok'); setTimeout(() => sp('home'), 1200);
}

function doReg() {
    const fn = document.getElementById('r-fn').value.trim();
    const ln = document.getElementById('r-ln').value.trim();
    const nk = document.getElementById('r-nik').value.trim();
    const hp = document.getElementById('r-hp').value.trim();
    const em = document.getElementById('r-em').value.trim();
    const pw = document.getElementById('r-pw').value;
    const pw2 = document.getElementById('r-pw2').value;
    const cb = document.getElementById('r-cb').checked;
    if (!fn || !ln || !nk || !hp || !em || !pw) { toast('⚠️ Lengkapi semua data!', 'wn'); return; }
    if (nk.length !== 16) { toast('⚠️ NIK harus 16 digit!', 'wn'); return; }
    if (!ktp['reg']) { toast('⚠️ Foto KTP wajib diupload!', 'wn'); return; }
    if (pw !== pw2) { toast('⚠️ Kata sandi tidak cocok!', 'wn'); return; }
    if (pw.length < 8) { toast('⚠️ Kata sandi min. 8 karakter!', 'wn'); return; }
    if (!cb) { toast('⚠️ Setujui syarat & ketentuan!', 'wn'); return; }
    toast('✓ Pendaftaran berhasil! Silakan masuk.', 'ok');
    setTimeout(() => sp('login'), 1400);
}

function toast(msg, type = '') {
    const t = document.getElementById('toast');
    t.textContent = msg; t.className = 'toast show' + (type ? ' ' + type : '');
    setTimeout(() => t.classList.remove('show'), 3500);
}

upSum();