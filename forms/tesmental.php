<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tes Kesehatan Mental - FriendMind</title>
    <meta name="description" content="Tes kesehatan mental depresi dengan 10 pertanyaan untuk mengetahui kondisi mental Anda di FriendMind." />
    <meta name="keywords" content="tes depresi, kesehatan mental, friendmind" />

    <!-- Favicons -->
<link href="../assets/img/favicon.png" rel="icon" />
<link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect" />
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
  rel="stylesheet"
/>

    <!-- Vendor CSS Files -->
<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
<link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
<link href="../assets/css/main.css" rel="stylesheet" />


    <!-- Custom CSS for Quiz -->
<link href="../assets/css/tes.css" rel="stylesheet" />


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
    window.location.href = "../forms/hasiltesmental.php?score=" + totalScore;
}
</script>


<body class="index-page">

  <?php include __DIR__ . '/../includes/header_quiz.php'; ?>

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

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>

    <!-- Custom JS for Quiz -->
   