<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Hasil Tes Kesehatan Mental - FriendMind</title>
    <meta name="description" content="Hasil tes kesehatan mental depresi di FriendMind." />
    <meta name="keywords" content="hasil tes depresi, kesehatan mental, friendmind" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />

    <!-- Custom CSS for Result -->
    <style>
        .result-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        .result-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }
        .result-score {
            font-size: 48px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 20px;
        }
        .result-message {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .btn-back {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
        }
        .btn-back:hover {
            background-color: #218838;
        }
        .disclaimer {
            font-size: 0.9em;
            color: #666;
            margin-top: 30px;
        }
        .hero-label {
            display: inline-block;
            background-color: #d5f5e3;
            color: #10bc69;
            font-weight: 600;
            font-size: 14px;
            padding: 6px 14px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="index-page">
    <?php include 'includes/header.html'; ?>

    <main class="main">
        <!-- Result Section -->
        <section id="result" class="result-section">
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <span class="hero-label">Hasil Tes Kesehatan Mental</span>
                    <h2>Hasil Tes Kesehatan Mental</h2>
                    <p>Berikut adalah hasil tes Anda berdasarkan jawaban yang diberikan.</p>
                </div>
                <div class="result-container">
                    <div id="resultContent">
                        <!-- Hasil akan ditampilkan di sini -->
                    </div>
                    <button class="btn-back" onclick="window.location.href='dashboard.php'">Kembali ke Tes</button>
                    <p class="disclaimer">Tes ini hanya untuk tujuan informasi. Jika skor Anda tinggi, konsultasikan dengan ahli kesehatan mental. Ini bukan pengganti diagnosis profesional. FriendMind berkomitmen untuk privasi Anda.</p>
                </div>
            </div>
        </section>
        <!-- /Result Section -->
    </main>

   <?php include 'includes/footer.html'; ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Custom JS for Result -->
    <script>
        // Fungsi untuk mendapatkan parameter dari URL
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Tampilkan hasil berdasarkan skor
        const score = parseInt(getQueryParam('score'));
        const resultContent = document.getElementById('resultContent');
        const imgElement = document.getElementById('resultImage');

        if (score !== null && !isNaN(score)) {
            let message = '';
            let image = '';

            if (score <= 9) {
                message = 'Kondisi Anda tampak baik. Tetap jaga kesehatan mental Anda.';
                image = 'img/resulttest1.png';

            } else if (score <= 19) {
                message = 'Anda mungkin mengalami gejala ringan. Pertimbangkan untuk berbicara dengan seseorang.';
            } else if (score <= 24) {
                message = 'Gejala sedang. Konsultasikan dengan ahli kesehatan mental.';
            } else {
                message = 'Gejala berat. Segera cari bantuan profesional.';
            }

            resultContent.innerHTML = `
                <div class="result-score">${score}</div>
                <div class="result-message">${message}</div>
            `;
            imgElement.src = image; 
            imgElement.style.display = 'block';

        } else {
            resultContent.innerHTML = '<p>Terjadi kesalahan dalam memuat hasil. Silakan ulangi tes.</p>';
        }
    </script>
</body>
</html>