<?php
$programDetails = [
    'skd' => [
        'title' => "Paket SKD",
        'content' => "<h4>Detail Paket SKD</h4><p>Paket ini dirancang khusus untuk menghadapi tes Seleksi Kompetensi Dasar.</p><ul><li>Materi lengkap TWK, TIU, dan TKP yang ter-update.</li><li>Latihan soal terstruktur dan simulasi CAT yang mirip dengan aslinya.</li><li>Sesi pembahasan soal intensif bersama tutor ahli.</li><li>Pendampingan dan konsultasi personal.</li></ul><button class='btn btn-primary' style='margin-top: 1rem;'>Daftar Sekarang</button>"
    ],
    'skb' => [
        'title' => "Paket SKB",
        'content' => "<h4>Detail Paket SKB</h4><p>Pendalaman materi dan persiapan menghadapi Seleksi Kompetensi Bidang sesuai dengan jurusan.</p><ul><li>Materi spesifik sesuai bidang yang Anda pilih.</li><li>Studi kasus dan analisis mendalam.</li><li>Simulasi tes SKB.</li><li>Tips dan trik mengerjakan soal SKB.</li></ul><button class='btn btn-primary' style='margin-top: 1rem;'>Daftar Sekarang</button>"
    ],
    'psikotest' => [
        'title' => "Paket Psikotest",
        'content' => "<h4>Detail Paket Psikotest</h4><p>Fokus pada persiapan tes Psikotest yang krusial dalam seleksi kedinasan dan CPNS.</p><ul><li>Latihan soal-soal psikotes yang beragam.</li><li>Pembahasan mendalam dan strategi pengerjaan yang efektif.</li><li>Meningkatkan kecepatan dan akurasi dalam menjawab.</li><li>Dibimbing oleh psikolog profesional.</li></ul><button class='btn btn-primary' style='margin-top: 1rem;'>Daftar Sekarang</button>"
    ]
];
$selectedProgramKey = isset($_GET['program']) && array_key_exists($_GET['program'], $programDetails) ? $_GET['program'] : 'skd';
$selectedProgram = $programDetails[$selectedProgramKey];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbel Rasyid</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <div class="container flex-between">
            <h1 class="logo">🎓 Bimbel Rasyid</h1>
            <nav class="nav">
                <a href="#program" class="btn btn-link">Program</a>
                <a href="#testimoni" class="btn btn-link">Testimoni</a>
                <a href="#kontak" class="btn btn-link">Kontak</a>
                <a href="login.php" class="btn btn-link">Login</a>
                <button id="theme-toggle" class="btn btn-link">Mode Gelap</button>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero-section">
            <div class="container hero-content">
                <h1 class="hero-title">📘 Bimbel Rasyid</h1>
                <h2 class="hero-subtitle">Persiapkan diri untuk seleksi sekolah kedinasan & CPNS</h2>
                <p class="hero-description">Kami adalah bimbingan belajar online yang berkomitmen membantu Anda meraih impian. Dengan materi terstruktur, soal ter-update, dan mentor berpengalaman, kami pastikan Anda siap menghadapi setiap tantangan seleksi.</p>
                <div class="cta-buttons">
                    <a href="#program" class="btn btn-primary">Lihat Program</a>
                    <a href="#kontak" class="btn btn-secondary">Hubungi Kami</a>
                </div>
            </div>
        </section>

        <section id="program" class="program-section">
            <div class="container">
                <h2 class="section-title">📚 Pilih Paket Belajar Unggulan</h2>
                <div class="program-grid">
                    <a href="index.php?program=skd#detail-program" class="card-link-wrapper" style="text-decoration: none; color: inherit;">
                        <article class="card <?php if ($selectedProgramKey === 'skd') echo 'card-selected'; ?>">
                            <h3>✏️ Paket SKD</h3>
                            <p>Fokus pada persiapan tes seleksi kompetensi dasar dengan materi dan latihan soal lengkap.</p>
                        </article>
                    </a>
                    <a href="index.php?program=skb#detail-program" class="card-link-wrapper" style="text-decoration: none; color: inherit;">
                        <article class="card <?php if ($selectedProgramKey === 'skb') echo 'card-selected'; ?>">
                            <h3>📖 Paket SKB</h3>
                            <p>Pendalaman materi dan persiapan menghadapi seleksi kompetensi bidang sesuai dengan jurusan.</p>
                        </article>
                    </a>
                    <a href="index.php?program=psikotest#detail-program" class="card-link-wrapper" style="text-decoration: none; color: inherit;">
                        <article class="card <?php if ($selectedProgramKey === 'psikotest') echo 'card-selected'; ?>">
                            <h3>🧠 Paket Psikotest</h3>
                            <p>Fokus pada persiapan tes Psikotest, melatih kecepatan dan akurasi dalam pengerjaan soal.</p>
                        </article>
                    </a>
                </div>
            </div>
        </section>

        <section id="detail-program" class="detail-program">
            <div class="container">
                <h2 id="detail-title" class="section-title"><?php echo htmlspecialchars($selectedProgram['title']); ?></h2>
                <div id="detail-content" class="detail-content">
                    <?php echo $selectedProgram['content']; ?>
                </div>
            </div>
        </section>
        
        <section id="testimoni" class="testimoni-section">
            <div class="container">
                <h2 class="section-title">👩‍🎓 Apa Kata Mereka?</h2>
                <div class="testimoni-grid">
                    <div class="testimoni-card">
                        <p>"Materi yang diberikan sangat terstruktur dan mudah dipahami. Latihan soalnya juga sangat membantu!"</p>
                        <p class="testimoni-author">- Rizky, Lolos SKD 2024</p>
                    </div>
                    <div class="testimoni-card">
                        <p>"Saya sangat terbantu dengan bimbingan dari Bimbel Rasyid, terutama untuk bagian Psikotest. Terima kasih!"</p>
                        <p class="testimoni-author">- Sinta, Lolos SKB 2024</p>
                    </div>
                    <div class="testimoni-card">
                        <p>"Metode belajarnya efektif dan interaktif. Saya jadi lebih percaya diri saat menghadapi ujian."</p>
                        <p class="testimoni-author">- Budi, Lolos CPNS 2024</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="kontak" class="kontak-section">
            <div class="container">
                <h2 class="section-title">📞 Hubungi Kami</h2>
                <p>Siap untuk bergabung? Hubungi kami melalui:</p>
                <div class="contact-list-container">
                    <ul class="contact-list">
                        <li class="contact-item">
                            <a href="mailto:daftar@bimbelrasyid.com" class="contact-link">
                                <span class="contact-icon email-icon"></span>
                                daftar@bimbelrasyid.com
                            </a>
                        </li>
                        <li class="contact-item">
                            <a href="https://wa.me/6281345162892" class="contact-link">
                                <span class="contact-icon whatsapp-icon"></span>
                                Hubungi via WhatsApp
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Bimbel Rasyid. All rights reserved.</p>
            <a href="https://belajarbertahap.com/" target="_blank" class="btn btn-link">Web Referensi</a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>