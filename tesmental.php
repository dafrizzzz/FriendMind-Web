<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tes Kesehatan Mental - FriendMind</title>
    <meta name="description" content="Tes kesehatan mental depresi dengan 10 pertanyaan untuk mengetahui kondisi mental Anda di FriendMind." />
    <meta name="keywords" content="tes depresi, kesehatan mental, friendmind" />

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

    <!-- Custom CSS for Quiz -->
    <style>
        .quiz-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        .quiz-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .question {
            margin-bottom: 30px;
        }
        .question h4 {
            margin-bottom: 15px;
            color: #333;
            font-weight: 600;
        }
        .options label {
            display: block;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .options label:hover {
            background-color: #f0f0f0;
        }
        .options input[type="radio"] {
            margin-right: 10px;
        }
        .btn-calculate {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
        }
        .btn-calculate:hover {
            background-color: #0056b3;
        }
        #result {
            margin-top: 30px;
            padding: 20px;
            border-radius: 5px;
            display: none;
        }
        .disclaimer {
            font-size: 0.9em;
            color: #666;
            text-align: center;
            margin-bottom: 30px;
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

<script>
function calculateScore() {
    const form = document.getElementById("depressionTest");
    let totalScore = 0;
    const totalQuestions = 10;

    // Hitung skor dari semua pertanyaan
    for (let i = 1; i <= totalQuestions; i++) {
        const answer = form["q" + i].value;
        if (answer === "") {
            alert("Pastikan semua pertanyaan sudah dijawab sebelum menghitung skor.");
            return;
        }
        totalScore += parseInt(answer);
    }

    // Arahkan ke halaman hasil tes dengan membawa skor sebagai parameter URL
    window.location.href = "hasiltesmental.html?score=" + totalScore;
}
</script>


<body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="dashboard.html">
                <img src="assets/img/LOGO FRIENDMIND.png" alt="FriendMind" width="250px" class="logo d-flex align-items-center me-auto" />
            </a>
            <h1 class="sitename"></h1>
            <nav id="navmenu" class="navmenu ms-auto">
                <ul>
                    <li><a href="starter.html">Tentang</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Fitur</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="tes-mental.html">Tes Kesehatan Mental</a></li>
                            <li><a href="teskepribadian.html">Tes Kepribadian</a></li>
                        </ul>
                    </li>
                    <li><a href="dashboard.html">Riwayat</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="btn-getstarted" href="dashboard.html">Ayo Mulai!</a>
        </div>
    </header>

    <main class="main">
        <!-- Quiz Section -->
        <section id="quiz" class="quiz-section">
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <span class="hero-label">Tes Kesehatan Mental</span>
                    <h2>Tes Kesehatan Mental</h2>
                    <p>Jawab pertanyaan berikut dengan jujur untuk mengetahui kondisi mental Anda dalam 2 minggu terakhir. Tes ini membantu Anda memahami diri sendiri lebih baik.</p>
                </div>
                <div class="quiz-container">
                    <p class="disclaimer">Tes ini hanya untuk tujuan informasi. Jika skor Anda tinggi, konsultasikan dengan ahli kesehatan mental. Ini bukan pengganti diagnosis profesional. FriendMind berkomitmen untuk privasi Anda.</p>
                    
                    <form id="depressionTest">
                        <div class="question">
                            <h4>1. Apakah Anda merasa sedih, murung, atau depresi?</h4>
                            <div class="options">
                                <label><input type="radio" name="q1" value="0"> Tidak pernah</label>
                                <label><input type="radio" name="q1" value="1"> Beberapa hari</label>
                                <label><input type="radio" name="q1" value="2"> Lebih dari setengah hari</label>
                                <label><input type="radio" name="q1" value="3"> Hampir setiap hari</label>
                            </div>
                        </div>
                        
                        <div class="question">
                            <h4>2. Apakah Anda kehilangan minat atau kesenangan pada aktivitas yang biasanya Anda nikmati?</h4>
                            <div class="options">
                                <label><input type="radio" name="q2" value="0"> Tidak pernah</label>
                                <label><input type="radio" name="q2" value="1"> Beberapa hari</label>
                                <label><input type="radio" name="q2" value="2"> Lebih dari setengah hari</label>
                                <label><input type="radio" name="q2" value="3"> Hampir setiap hari</label>
                            </div>
                        </div>
                        
                        <div class="question">
                            <h4>3. Apakah Anda merasa lelah atau kurang energi?</h4>
                            <div class="options">
                                <label><input type="radio" name="q3" value="0"> Tidak pernah</label>
                                <label><input type="radio" name="q3" value="1"> Beberapa hari</label>
                                <label><input type="radio" name="q3" value="2"> Lebih dari setengah hari</label>
                                <label><input type="radio" name="q3" value="3"> Hampir setiap hari</label>
                            </div>
                        </div>
                        
                        <div class="question">
                            <h4>4. Apakah Anda mengalami kesulitan tidur atau terlalu banyak tidur?</h4>
                            <div class="options">
                                <label><input type="radio" name="q4" value="0"> Tidak pernah</label>
                                <label><input type="radio" name="q4" value="1"> Beberapa hari</label>
                                <label><input type="radio" name="q4" value="2"> Lebih dari setengah hari</label>
                                <label><input type="radio" name="q4" value="3"> Hampir setiap hari</label>
                            </div>
                        </div>
                        
                        <div class="question">
                            <h4>5. Apakah Anda merasa tidak berharga atau bersalah?</h4>
                            <div class="options">
                                <label><input type="radio" name="q5" value="0"> Tidak pernah</label>
                                <label><input type="radio" name="q5" value="1"> Beberapa hari</label>
                                <label><input type="radio" name="q5" value="2"> Lebih dari setengah hari</label>
                                <label><input type="radio" name="q5" value="3"> Hampir setiap hari</label>
                            </div>
                        </div>
                        
                        <div class="question">
                            <h4>6. Apakah Anda merasa cemas atau khawatir berlebihan?</h4>
                            <div class="options">
                                <label><input type="radio" name="q6" value="0"> Tidak pernah</label>
                                <label><input type="radio" name="q6" value="1"> Beberapa hari</label>
                                <label><input type="radio" name="q6" value="2"> Lebih dari setengah hari</label>
                                <label><input type="radio" name="q6" value="3"> Hampir setiap hari</label>
                            </div>
                        </div>
                        
                        <div class="question">
                            <h4>7. Apakah Anda sulit berkonsentrasi atau membuat keputusan?</h4>
                            <div class="options">
                                <label><input type="radio" name="q7" value="0"> Tidak pernah</label>
                                <label><input type="radio" name="q7" value="1"> Beberapa hari</label>
                                <label><input type="radio" name="q7" value="2"> Lebih dari setengah hari</label>
                                <label><input type="radio" name="q7" value="3"> Hampir setiap hari</label>
                            </div>
                        </div>
                        
                        <div class="question">
                            <h4>8. Apakah Anda kehilangan nafsu makan atau makan berlebihan?</h4>
                            <div class="options">
                                <label><input type="radio" name="q8" value="0"> Tidak pernah</label>
                                <label><input type="radio" name="q8" value="1"> Beberapa hari</label>
                                <label><input type="radio" name="q8" value="2"> Lebih dari setengah hari</label>
                                <label><input type="radio" name="q8" value="3"> Hampir setiap hari</label>
                            </div>
                        </div>
                        
                        <div class="question">
                            <h4>9. Apakah Anda merasa gelisah atau sulit diam?</h4>
                            <div class="options">
                                <label><input type="radio" name="q9" value="0"> Tidak pernah</label>
                                <label><input type="radio" name="q9" value="1"> Beberapa hari</label>
                                <label><input type="radio" name="q9" value="2"> Lebih dari setengah hari</label>
                                <label><input type="radio" name="q9" value="3"> Hampir setiap hari</label>
                            </div>
                        </div>
                        
                        <div class="question">
                            <h4>10. Apakah Anda memiliki pikiran tentang menyakiti diri sendiri?</h4>
                            <div class="options">
                                <label><input type="radio" name="q10" value="0"> Tidak pernah</label>
                                <label><input type="radio" name="q10" value="1"> Beberapa hari</label>
                                <label><input type="radio" name="q10" value="2"> Lebih dari setengah hari</label>
                                <label><input type="radio" name="q10" value="3"> Hampir setiap hari</label>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="button" class="btn-calculate" onclick="calculateScore()">Hitung Skor</button>
                        </div>
                    </form>
                    
                    <div id="result"></div>
                </div>
            </div>
        </section>
        <!-- /Quiz Section -->
    </main>

    <footer id="footer" class="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h4>Yuk, Berlangganan FriendMind !</h4>
                        <p>Setelah berlangganan dapatkan berita terbaru tentang produk dan layanan kami!</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form">
                                <input type="email" name="email" /><input type="submit" value="Subscribe" />
                            </div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Kamu telah berlangganan, Terimakasih !</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">FriendMind</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jalan Cinta Sejati No. 7, Kota Surabaya</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 888 111 222 333</span></p>
                        <p><strong>Email:</strong> <span>friendmind@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Kepoin yuk!</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="index.html">Beranda</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="index.html#about">Tentang</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="index.html#contact">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Layanan</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="tes-mental.html">Tes Kesehatan Mental</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Tes Kepribadian</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Ikuti kami di sosial media</h4>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright 2025</span> <strong class="px-1 sitename">FriendMind Sejahtera</strong> <span>All Rights Reserved</span></p>
        </div>
    </footer>

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

    <!-- Custom JS for Quiz -->
   