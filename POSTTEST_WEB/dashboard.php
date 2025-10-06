<?php
// Mulai sesi
session_start();

// Penjaga pintu: Kalo belum login, usir ke halaman login
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="dashboard-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="dashboard-wrapper">
        <header class="dashboard-header">
            <h1 class="header-title">🎓 Dashboard Admin</h1>
            <div class="user-menu">
                <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                <a href="logout.php" class="btn-logout">Logout</a>
            </div>
        </header>

        <main class="dashboard-main">
            <div class="card welcome-card">
                <h2>Selamat Datang Kembali! 👋</h2>
                <p>Anda bisa mengelola semua aspek bimbingan belajar dari sini.</p>
            </div>

            <div class="card">
                <h3>Aksi Cepat</h3>
                <ul class="quick-actions">
                    <li><a href="#">Kelola Siswa</a></li>
                    <li><a href="#">Tambah Materi Baru</a></li>
                    <li><a href="#">Lihat Laporan</a></li>
                    <li><a href="index.php">Kembali ke Beranda</a></li>
                </ul>
            </div>

            <div class="card">
                <h3>Statistik Sekilas</h3>
                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">120</span>
                        <span class="stat-label">Siswa Aktif</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">15</span>
                        <span class="stat-label">Kelas Tersedia</span>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>