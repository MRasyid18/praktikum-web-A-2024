document.addEventListener('DOMContentLoaded', () => {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const body = document.body;
    
    /* BAGIAN KODE UNTUK MENAMPILKAN DETAIL PROGRAM BERDASARKAN KLIK DIHAPUS.
    FUNGSI INI SEKARANG DI-HANDLE LANGSUNG OLEH PHP MENGGUNAKAN $_GET PADA SAAT
    HALAMAN DIMUAT.
    */

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
// Panggil sekali saat halaman dimuat untuk menampilkan section awal
revealOnScroll();