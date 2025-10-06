<?php
// Mulai sesi di paling atas
session_start();

// Jika sudah login, tendang ke dashboard
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';
// Proses form kalo ada data yang dikirim (method POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username & password (ini contoh sederhana, harusnya dari database)
    if ($username === 'admin' && $password === '12345678') {
        // Kalo bener, simpen username di session
        $_SESSION['username'] = $username;
        // Arahkan ke dashboard
        header('Location: dashboard.php');
        exit;
    } else {
        // Kalo salah, kasih pesan error
        $error = 'Username atau password salah!';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="login-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-panel-left">
            <div class="brand-content">
                <h1>🎓</h1>
                <h2>Selamat Datang Kembali</h2>
                <p>Silakan masuk untuk mengelola konten Bimbel Rasyid.</p>
            </div>
        </div>

        <div class="login-panel-right">
            <div class="form-container">
                <h2>Login Administrator</h2>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required placeholder="Masukkan password">
                    </div>
                    
                    <?php if (!empty($error)): ?>
                        <p class="error-message"><?php echo $error; ?></p>
                    <?php endif; ?>

                    <button type="submit" class="btn-login">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>