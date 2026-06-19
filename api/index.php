<?php

// Pastikan sistem Vercel (serverless) menggunakan folder /tmp untuk penyimpanan sementara
// karena sistem file bawaan Vercel bersifat read-only.
if (isset($_ENV['VERCEL'])) {
    $storagePath = '/tmp/storage';
    if (!is_dir($storagePath)) {
        mkdir($storagePath, 0777, true);
        mkdir($storagePath . '/framework/views', 0777, true);
        mkdir($storagePath . '/framework/cache', 0777, true);
        mkdir($storagePath . '/framework/sessions', 0777, true);
        mkdir($storagePath . '/logs', 0777, true);
    }
    $_ENV['APP_STORAGE'] = $storagePath;
}

require __DIR__ . '/../public/index.php';
