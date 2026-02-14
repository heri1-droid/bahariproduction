// butooM mobile bawa
const navItems = document.querySelectorAll(".bn-item");

navItems.forEach(item => {
    // Set active berdasarkan URL saat ini
    if (window.location.pathname === new URL(item.href).pathname) {
        item.classList.add("active");
    }

    // Klik juga tetap jalan
    item.addEventListener("click", function () {
        navItems.forEach(i => i.classList.remove("active"));
        this.classList.add("active");
    });
});










// ── SCRIPT   SEMENTARA ──
// ── STATE ──
const S = { r: '', dur: '', fr: '', to: '', tof: '', d: 1, a: 0 };
const ktp = {};

// ── ROUTE ──
function selRoute() {
    const val = document.getElementById('rute').value;
    if (!val) { Object.assign(S, { r: '', dur: '', fr: '', to: '', tof: '' }); upSum(); return; }
    const [nama, durasi, from, to, tujuan] = val.split('|');
    Object.assign(S, { r: nama, dur: durasi, fr: from, to: to, tof: tujuan });
    upSum();
}

// ── COUNTER ──
function cc(t, d) {
    if (t === 'd') { S.d = Math.max(1, S.d + d); document.getElementById('cd').textContent = S.d; }
    upSum();
}

// ── SUMMARY ──
function upSum() {
    const srt = document.getElementById('srt');
    srt.textContent = S.r || 'Pilih rute...';
    srt.style.color = S.r ? 'var(--g7)' : 'var(--g4)';
    document.getElementById('skl').textContent = document.getElementById('kls').value;
    document.getElementById('ssd').textContent = (S.d + S.a) + ' penumpang';
    const tg = document.getElementById('tgl').value;
    if (tg) {
        const dt = new Date(tg + 'T00:00:00');
        document.getElementById('stg').textContent = dt.toLocaleDateString('id-ID', { weekday: 'short', day: 'numeric', month: 'long', year: 'numeric' });
    }
}

// ── NAVIGATE — no validation, free tab clicking ──
function gs(n) {
    if (n === 2) bpx();
    if (n === 3) bkfm();
    document.querySelectorAll('.bst').forEach(s => s.classList.remove('act'));
    document.getElementById('st' + n).classList.add('act');
    document.querySelectorAll('.bs2').forEach((b, i) => {
        b.classList.remove('act', 'dn');
        if (i + 1 === n) b.classList.add('act');
        if (i + 1 < n) b.classList.add('dn');
    });
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// ── BUILD PASSENGER FORMS ──
function bpx() {
    const tot = S.d + S.a;
    let h = '';
    for (let i = 1; i <= tot; i++) {
        const ank = i > S.d;
        h += `<div class="pxc">
      <div class="pxt">${ank ? '👶' : '👤'} Penumpang ${i}${ank ? ' (Anak-anak)' : ' (Dewasa)'}</div>
      <div class="fr">
        <div class="fg2"><label>Nama Lengkap <span class="req">*</span></label>
          <input type="text" id="pn${i}" class="fc2" placeholder="Sesuai KTP" value="${i === 1 ? 'Ahmad Fauzi' : i === 2 ? 'Siti Rahayu' : ''}"></div>
        <div class="fg2"><label>${ank ? 'No. Akta Lahir' : 'NIK KTP'} <span class="req">*</span></label>
          <input type="number" id="pk${i}" class="fc2" placeholder="Nomor identitas" maxlength="${ank ? 20 : 16}" value="${i === 1 ? '1271234567890001' : i === 2 ? '1271987654321002' : ''}"></div>
      </div>
      <div class="fr">
        <div class="fg2"><label>Jenis Kelamin</label>
          <select id="pj${i}" class="fc2"><option value="L">Laki-laki</option><option value="P"${i === 2 ? ' selected' : ''}>Perempuan</option></select></div>
        
      </div>
      <div class="fg2">
        <label>📎 ${ank ? 'Akta Lahir' : 'Foto KTP'} <span class="req">*</span></label>
        <div class="ktp-info"><span style="font-size:17px;flex-shrink:0">ℹ️</span>
          <div class="ktp-info-text"><strong>Panduan Upload</strong>Pastikan dokumen jelas dan terbaca. JPG/PNG/PDF, maks. 2 MB.</div></div>
        <div class="ua" id="ua${i}" onclick="document.getElementById('fi${i}').click()">
          <input type="file" id="fi${i}" accept="image/jpeg,image/png,application/pdf" style="display:none" onchange="hKTP(this,${i})">
          <div id="up${i}"><div class="uico">${ank ? '📄' : '🪪'}</div>
            <div class="utit">Klik untuk pilih ${ank ? 'Akta Lahir' : 'foto KTP'}</div>
            <div class="usub">JPG, PNG, PDF • Maks. 2 MB</div></div>
          <div class="uprev" id="uv${i}">
            <img id="ui${i}" src="" alt="" style="max-height:80px;border-radius:8px;border:1px solid var(--b2);display:none">
            <div class="ufn" id="uf${i}"></div></div>
        </div>
      </div>
    </div>`;
    }
    document.getElementById('pxf').innerHTML = h;

    // Simulate uploaded docs for dummy passengers
    [1, 2].forEach(i => {
        if (i > S.d + S.a) return;
        const names = ['ktp_ahmad_fauzi.jpg', 'ktp_siti_rahayu.jpg'];
        ktp[i] = { name: names[i - 1] };
        setTimeout(() => {
            const ua = document.getElementById('ua' + i);
            const up = document.getElementById('up' + i);
            const uv = document.getElementById('uv' + i);
            const uf = document.getElementById('uf' + i);
            if (ua) ua.classList.add('hf');
            if (up) up.style.display = 'none';
            if (uv) uv.style.display = 'flex';
            if (uf) uf.textContent = '✓ ' + names[i - 1];
        }, 50);
    });
}

// ── HANDLE KTP UPLOAD ──
function hKTP(inp, id) {
    if (!inp.files || !inp.files[0]) return;
    const f = inp.files[0];
    if (f.size > 2 * 1024 * 1024) { toast('⚠️ File melebihi 2 MB!', 'wn'); inp.value = ''; return; }
    ktp[id] = f;
    const ua = document.getElementById('ua' + id);
    const up = document.getElementById('up' + id);
    const uv = document.getElementById('uv' + id);
    const uf = document.getElementById('uf' + id);
    const ui = document.getElementById('ui' + id);
    if (ua) ua.classList.add('hf');
    if (up) up.style.display = 'none';
    if (uv) uv.style.display = 'flex';
    if (uf) uf.textContent = '✓ ' + f.name;
    if (f.type.startsWith('image/')) {
        const r = new FileReader();
        r.onload = e => { if (ui) { ui.src = e.target.result; ui.style.display = 'block'; } };
        r.readAsDataURL(f);
    }
    toast('✓ Dokumen penumpang ' + id + ' berhasil dipilih', 'ok');
}

// ── BUILD CONFIRMATION ──
function bkfm() {
    const tg = document.getElementById('tgl').value;
    const kl = document.getElementById('kls').value;
    const dt = new Date(tg + 'T00:00:00');
    const ts = dt.toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
    const tot = S.d + S.a;
    let rows = '';
    for (let i = 1; i <= tot; i++) {
        const nmEl = document.getElementById('pn' + i);
        const nkEl = document.getElementById('pk' + i);
        const nm = nmEl ? nmEl.value || 'Penumpang ' + i : 'Penumpang ' + i;
        const nk = nkEl ? nkEl.value || '—' : '—';
        const fn = ktp[i] ? (ktp[i].name || ktp[i]) : '—';
        rows += `<div class="sr2"><span class="lb">${nm}</span><span class="vl">${nk} · 📎 ${fn}</span></div>`;
    }
    const rLabel = S.r || 'Belum dipilih';
    document.getElementById('kdet').innerHTML = `
    <div class="orb"><div class="orn">${rLabel}</div><div class="ord">${ts} · ${S.dur || '—'} · Kelas ${kl}</div></div>
    <div style="font-size:11px;font-weight:700;color:var(--g5);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:8px">Daftar Penumpang &amp; Dokumen</div>
    ${rows}
    <div class="tr"><span class="tl">Total Biaya</span><span><span class="ta">Rp 0</span> &nbsp;<span class="badge-g">GRATIS</span></span></div>`;
}

// ── PESAN ──
function pesan() {
    const code = 'BHE-2025-' + Math.floor(100000 + Math.random() * 900000);
    const tg = document.getElementById('tgl').value;
    const kl = document.getElementById('kls').value;
    const dt = new Date(tg + 'T00:00:00');
    document.getElementById('tfr').textContent = S.fr || 'PLM';
    document.getElementById('tto').textContent = S.to || 'MTK';
    document.getElementById('ttof').textContent = S.tof || 'Tujuan';
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
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// ── RESET ──
function resetAll() {
    Object.assign(S, { r: '', dur: '', fr: '', to: '', tof: '', d: 1, a: 0 });
    document.getElementById('rute').value = '';
    document.getElementById('cd').textContent = '1';
    document.getElementById('tgl').value = '2025-03-26';
    document.getElementById('kls').value = 'Ekonomi';
    document.getElementById('etw').style.display = 'none';
    upSum(); gs(1);
}

// ── TOAST ──
function toast(msg, type = '') {
    const t = document.getElementById('toast');
    t.textContent = msg;
    t.className = 'toast show' + (type ? ' ' + type : '');
    setTimeout(() => t.classList.remove('show'), 3500);
}

upSum();












