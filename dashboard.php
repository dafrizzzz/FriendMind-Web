<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - FriendMind</title>
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
</head>
<body>
  
  <header class="navbar">
    <div class="logo-section">
      <a href="starter.php">
        <img
          src="assets/img/LOGO FRIENDMIND.png" alt="FriendMind"
          width="250px"
          class="logo d-flex align-items-center me-auto"
        />
      </a href>
    </div>

    <div class="user-section">
      <p class="welcome">Dashboard Pengguna</p>
      <button class="logout-btn" onclick="window.location.href='login.php'">
        <span class="icon"></span> Log out
      </button>
    </div>
  </header>


  <main class="content">
    <div class="welcome-section">
      <p class="back-btn" onclick="history.back()"><i class="bi bi-arrow-left"></i></p>
      <img src="assets/img/profile-icon.png" alt="Profile Icon" width= "120px" class="profile-icon">
    <h2>Selamat datang, <span class="username">User!</span></h2>
    <span>example@gmail.com</span>
    <p class="subtitle"><b>Lanjutkan mengetahui jati dirimu dengan mengikuti kuisioner kami!</b>  
    </p>

    <div class="card-container">
      <div class="card highlight">
        <div class="card-header">
          <img src="assets/img/tesdepresi.png" alt="Icon" class="icon">
          <div>
            <h3>Tes Kesehatan Mental</h3>
            <p>Mulai untuk mengetahui kondisi depresi kamu saat ini!</p>
          </div>
        </div>
        <a href="tesmental.php">
        <button class="btn">+ Mulai kuisioner!</button>
        </a>
      </div>

      <div class="card">
        <div class="card-header">
          <img src="assets/img/tespersonality.png" alt="Icon" class="icon">
          <div>
            <h3>Tes Kepribadian</h3>
            <p>Cari tahu kepribadian kamu melalui tes ini!</p>
          </div>
        </div>
        <a href="teskepribadian.php">
        <button class="btn">+ Mulai kuisioner!</button>
        </a>
      </div>
    </div>

    <div class="history">
      <div class="history-header">
        <h3>Riwayat Hasil Tes</h3>
        <button class="lihat-btn">Lihat semua</button>
      </div>
      <p class="desc">Disini terlihat hasil tes terakhir kali kamu</p>
    </div>
  </main>
</body>
</html>
