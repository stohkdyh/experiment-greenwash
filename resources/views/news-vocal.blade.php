<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>DIY Green News</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/News-Logo.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f6f8;
        }
        .custom-nav-link {
            transition: color 0.2s ease, transform 0.2s ease;
            font-size: 0.95rem;
        }
        .custom-nav-link:hover {
            color: #2a5934 !important;
            transform: translateY(-1px);
        }
        .nav-item .active.custom-nav-link {
            color: #1e3932 !important;
            border-bottom: 2px solid #1e3932;
            padding-bottom: 0.3rem;
        }
        .badge-premium {
            background-color: #d1e7dd;
            color: #0f5132;
            font-weight: 600;
            padding: 0.6em 1em;
        }
        .btn-premium {
            background-color: #2a5934;
            color: white;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-premium:hover {
            background-color: #1e3932;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(42, 89, 52, 0.3);
        }
        .related-news-link {
            color: #2b2b2b;
            text-decoration: none;
            transition: color 0.2s ease;
            display: block;
            padding: 1rem 0;
            border-bottom: 1px solid #eaeaea;
        }
        .related-news-link:hover {
            color: #2a5934;
        }
        .related-news-item:last-child .related-news-link {
            border-bottom: none;
        }
        .post-test-card {
            background: linear-gradient(135deg, #2a5934 0%, #1e3932 100%);
            color: white;
        }
        .btn-post-test {
            background-color: #ffffff;
            color: #1e3932;
            transition: all 0.3s ease;
        }
        .btn-post-test:hover {
            background-color: #f8f9fa;
            color: #1e3932;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15) !important;
        }
    </style>
</head>
<body>
    <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container py-2">
            <a class="navbar-brand d-flex align-items-center" href="#!">
                <img src="assets/img/News-LogoText.png" alt="logo" width="160">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
                    <li class="nav-item mx-2"><a class="nav-link text-muted custom-nav-link" href="#">Home</a></li>
                    <li class="nav-item mx-2"><a class="nav-link text-muted custom-nav-link" href="#!">About</a></li>
                    <li class="nav-item mx-2"><a class="nav-link text-muted custom-nav-link" href="#!">Contact</a></li>
                    <li class="nav-item mx-2"><a class="nav-link active custom-nav-link" aria-current="page" href="#">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Post content-->
                <article class="card border-0 shadow-sm rounded-4 p-4 p-md-5 mb-5 bg-white">
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post categories-->
                        <div class="mb-3">
                            <span class="badge badge-premium rounded-pill me-2">Environment</span>
                            <span class="badge badge-premium rounded-pill">Sustainability</span>
                        </div>
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-3 text-dark" style="font-size: 2.25rem; line-height: 1.3;">PT CISTA Kembali Menorehkan Predikat Sebagai Perusahaan Ramah Lingkungan Terbaik Se-Indonesia</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fw-medium d-flex align-items-center mb-2">
                            <i class="bi bi-calendar3 me-2"></i> Yogyakarta, 20 Februari 2024
                        </div>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-0">
                        <div class="ratio ratio-16x9 mx-auto rounded-4 overflow-hidden shadow-sm">
                            <iframe src="https://www.youtube.com/embed/MvvptIgmjFc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </figure>
                </article>
            </div>
            
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3" style="color: #1e3932;">Cari Artikel</h5>
                        <div class="input-group">
                            <input class="form-control rounded-start-pill bg-light border-0 px-4" type="text" placeholder="Kata Kunci..." aria-label="Enter search term..." />
                            <button class="btn btn-premium rounded-end-pill px-4" type="button"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
                
                <!-- Categories widget-->
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3" style="color: #1e3932;">Kategori</h5>
                        <div class="row g-2">
                            <div class="col-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a class="text-decoration-none fw-medium" style="color: #2a5934;" href="#!"><i class="bi bi-chevron-right small me-1"></i>Lingkungan</a></li>
                                    <li class="mb-2"><a class="text-decoration-none text-muted" href="#!"><i class="bi bi-chevron-right small me-1"></i>Politik</a></li>
                                    <li class="mb-2"><a class="text-decoration-none text-muted" href="#!"><i class="bi bi-chevron-right small me-1"></i>Bisnis</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a class="text-decoration-none text-muted" href="#!"><i class="bi bi-chevron-right small me-1"></i>Olahraga</a></li>
                                    <li class="mb-2"><a class="text-decoration-none text-muted" href="#!"><i class="bi bi-chevron-right small me-1"></i>Edukasi</a></li>
                                    <li class="mb-2"><a class="text-decoration-none text-muted" href="#!"><i class="bi bi-chevron-right small me-1"></i>Kesehatan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Related widget-->
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-1" style="color: #1e3932;">Berita Terkait</h5>
                        <div class="related-news-list">
                            <div class="related-news-item">
                                <a href="#!" class="related-news-link">
                                    <h6 class="mb-1 fw-bold lh-base">Sejumlah Pihak Peringatkan Taktik "Pembohongan Ramah Lingkungan" Terselubung Energi Fosil dalam COP28</h6>
                                    <small class="text-muted"><i class="bi bi-clock me-1"></i>18 Feb 2024</small>
                                </a>
                            </div>
                            <div class="related-news-item">
                                <a href="#!" class="related-news-link">
                                    <h6 class="mb-1 fw-bold lh-base">Masyarakat Perlu Mewaspadai Perusahaan yang Mengeklaim Ramah Lingkungan dengan Menerapkan Strategi Penipuan kepada Publik</h6>
                                    <small class="text-muted"><i class="bi bi-clock me-1"></i>15 Feb 2024</small>
                                </a>
                            </div>
                            <div class="related-news-item">
                                <a href="#!" class="related-news-link">
                                    <h6 class="mb-1 fw-bold lh-base">Terapkan Bisnis Ramah Lingkungan, Distribusi Farmasi Sehat Group Pakai Kendaraan Listrik</h6>
                                    <small class="text-muted"><i class="bi bi-clock me-1"></i>12 Feb 2024</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Post-Test Section -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="card post-test-card border-0 shadow-sm rounded-4 p-5 text-center">
                    <div class="card-body py-3">
                        <h2 class="fw-bolder mb-3">Langkah Selanjutnya</h2>
                        <p class="lead mb-4 fw-medium" style="color: #d1e7dd;">Silahkan tekan tombol di bawah ini untuk memulai Post-Test dan mengukur pemahaman Anda terkait artikel yang telah dibaca.</p>
                        <button type="button" onclick='location.href="/post-test"' class="btn btn-post-test btn-lg rounded-pill px-5 py-3 fw-bold shadow-sm">
                            Mulai Post-Test <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer-->
    <footer class="py-4" style="background-color: #1e3932;">
        <div class="container">
            <p class="m-0 text-center text-white-50">Copyright &copy; DIY Green News 2024</p>
        </div>
    </footer>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>