<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FriendMind - Dashboard Admin</title>
    <style>
      /* Gaya dasar agar mirip dengan gambar - Anda perlu melengkapi ini dengan CSS yang sebenarnya */
      body {
        font-family: "poppins", sans-serif;
        margin: 0;
        background-color : #e8fff3;
      }
      .wrapper {
        display: flex;
        min-height: 100vh;
      }
      .sidebar {
        width: 250px;
        background-color: #169a64;
        color: white;
        padding-top: 20px;
      }
      .sidebar a {
        color: #bdc3c7;
        text-decoration: none;
        padding: 10px 20px;
        display: block;
      }
      .sidebar a:hover,
      .sidebar .active {
        background-color: #1cb87a;
        color: white;
      }
      .header {
        background-color: white;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        color: white;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .main-content {
        flex-grow: 1;
        padding: 20px;
      }
      .user-info {
        padding: 10px 20px;
        border-bottom: 1px solid #34495e;
        margin-bottom: 15px;
      }
      .card-row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 20px;
      }
      .card {
        flex: 1 1 200px;
        padding: 20px;
        color: white;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }
      .card h2 {
        margin: 0 0 10px 0;
        font-size: 40px;
      }
      .card p {
        margin: 0;
        font-size: 14px;
      }
      .card-info {
        font-size: 12px;
        margin-top: 10px;
        opacity: 0.8;
      }
      /* Warna kartu disesuaikan dengan gambar */
      .bg-blue {
        background-color: #3498db;
      }
      .bg-green {
        background-color: #2ecc71;
      }
      .bg-orange {
        background-color: #f39c12;
      }
      .bg-red {
        background-color: #e74c3c;
      }
      .logout-btn {
  background-color: #fff;
  color: #333;
  border: 1px solid #ccc;
  border-radius: 8px;
  padding: 8px 15px;
  cursor: pointer;
  font-weight: 500;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.logout-btn:hover {
  background-color: #1cb87a;
  color: white;
  border: none;
}
.logo-section {
  display: flex;
  align-items: center;
  gap: 10px;
}

.logo {
  width: 250px;
}
    </style>
  </head>
<?php include 'includes/header_admin.html'; ?>
<div class="wrapper">
  <body>
<?php include 'includes/sidebar_admin.php'; ?>

      <div class="main-content">
        <hr />

        <div class="card-row">
          <div class="card bg-blue">
            <h2>1.5K</h2>
            <p>Kunjungan Situs Harian</p>
            <div class="card-info">
              Lebih info <span style="float: right">📈</span>
            </div>
          </div>

          <div class="card bg-green">
            <h2>35K</h2>
            <p>Kunjungan Situs Bulanan</p>
            <div class="card-info">
              Lebih info <span style="float: right">📊</span>
            </div>
          </div>

          <div class="card bg-orange">
            <h2>8</h2>
            <p>Kuisioner Aktif</p>
            <div class="card-info">
              Lebih info <span style="float: right">📝</span>
            </div>
          </div>

          <div class="card bg-red">
            <h2>10.2K</h2>
            <p>Total Riwayat Pengguna</p>
            <div class="card-info">
              Lebih info <span style="float: right">👤</span>
            </div>
          </div>
        </div>

        <div class="activity-section">
          <h3>Detail Dashboard Aktivitas</h3>
          <p>
            Di sini akan ditampilkan grafik atau tabel detail mengenai statistik
            trafik, misalnya perbandingan bulan ke bulan atau jam sibuk.
          </p>
          <div
            style="
              background-color: white;
              padding: 20px;
              height: 300px;
              border-radius: 5px;
              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            "
          >
            [Placeholder untuk Grafik Statistik Kunjungan]
          </div>
        </div>
      </div>
    </div>
</div>
  </body>
</html>
