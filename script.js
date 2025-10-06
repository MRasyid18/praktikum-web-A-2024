document.addEventListener('DOMContentLoaded', () => {
    const programCards = document.querySelectorAll('.program-grid .card');
    const themeToggleBtn = document.getElementById('theme-toggle');
    const body = document.body;
    const detailProgramSection = document.getElementById('detail-program');
    const detailContent = document.getElementById('detail-content');
    
    // Data detail untuk setiap paket
    const programDetails = {
        skd: {
            title: "Paket SKD",
            content: `
                <h4>Detail Paket SKD</h4>
                <p>Paket ini dirancang khusus untuk menghadapi tes Seleksi Kompetensi Dasar.</p>
                <ul>
                    <li>Materi lengkap TWK, TIU, dan TKP yang ter-update.</li>
                    <li>Latihan soal terstruktur dan simulasi CAT yang mirip dengan aslinya.</li>
                    <li>Sesi pembahasan soal intensif bersama tutor ahli.</li>
                    <li>Pendampingan dan konsultasi personal.</li>
                </ul>
                <button class="btn btn-primary" style="margin-top: 1rem;">Daftar Sekarang</button>
            `
        },
        skb: {
            title: "Paket SKB",
            content: `
                <h4>Detail Paket SKB</h4>
                <p>Pendalaman materi dan persiapan menghadapi Seleksi Kompetensi Bidang sesuai dengan jurusan.</p>
                <ul>
                    <li>Materi spesifik sesuai bidang yang Anda pilih.</li>
                    <li>Studi kasus dan analisis mendalam.</li>
                    <li>Simulasi tes SKB.</li>
                    <li>Tips dan trik mengerjakan soal SKB.</li>
                </ul>
                <button class="btn btn-primary" style="margin-top: 1rem;">Daftar Sekarang</button>
            `
        },
        psikotest: {
            title: "Paket Psikotest",
            content: `
                <h4>Detail Paket Psikotest</h4>
                <p>Fokus pada persiapan tes Psikotest yang krusial dalam seleksi kedinasan dan CPNS.</p>
                <ul>
                    <li>Latihan soal-soal psikotes yang beragam.</li>
                    <li>Pembahasan mendalam dan strategi pengerjaan yang efektif.</li>
                    <li>Meningkatkan kecepatan dan akurasi dalam menjawab.</li>
                    <li>Dibimbing oleh psikolog profesional.</li>
                </ul>
                <button class="btn btn-primary" style="margin-top: 1rem;">Daftar Sekarang</button>
            `
        }
    };

    // Fungsi untuk menampilkan detail program dan menggulir ke bawah
    const showProgramDetails = (programKey) => {
        const details = programDetails[programKey];
        if (details) {
            detailProgramSection.classList.remove('hidden');
            detailContent.innerHTML = details.content;
            document.getElementById('detail-title').innerText = details.title;
            
            detailProgramSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    };

    // --- Logika untuk Klik Kartu Program ---
    programCards.forEach(card => {
        card.addEventListener('click', function(e) {
            e.preventDefault();
            programCards.forEach(c => c.classList.remove('card-selected'));
            this.classList.add('card-selected');
            const programKey = this.dataset.program;
            showProgramDetails(programKey);
        });
    });

    // --- Logika untuk Dark Mode ---
    const currentTheme = localStorage.getItem('theme');
    if (currentTheme === 'dark-mode') {
        body.classList.add('dark-mode');
        themeToggleBtn.innerText = 'Mode Terang';
    }

    themeToggleBtn.addEventListener('click', () => {
        if (body.classList.contains('dark-mode')) {
            body.classList.remove('dark-mode');
            themeToggleBtn.innerText = 'Mode Gelap';
            localStorage.setItem('theme', 'light-mode');
        } else {
            body.classList.add('dark-mode');
            themeToggleBtn.innerText = 'Mode Terang';
            localStorage.setItem('theme', 'dark-mode');
        }
    });

    // Menampilkan detail paket pertama saat halaman dimuat
    const initialProgramKey = 'skd';
    programCards.forEach(card => {
        if (card.dataset.program === initialProgramKey) {
            card.classList.add('card-selected');
        }
    });
    showProgramDetails(initialProgramKey);
});

// --- Scroll Reveal Animasi ---
const sections = document.querySelectorAll('section');
const revealOnScroll = () => {
    const triggerBottom = window.innerHeight * 0.8;
    sections.forEach(sec => {
        const secTop = sec.getBoundingClientRect().top;
        if (secTop < triggerBottom) {
            sec.classList.add('show-section');
        }
    });
};
window.addEventListener('scroll', revealOnScroll);
revealOnScroll();