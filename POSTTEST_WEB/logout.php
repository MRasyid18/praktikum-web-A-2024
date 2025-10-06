<?php
// Selalu mulai sesi terlebih dahulu
session_start();

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi secara permanen
session_destroy();

// Redirect (arahkan) pengguna kembali ke halaman login
header('Location: login.php');
exit;