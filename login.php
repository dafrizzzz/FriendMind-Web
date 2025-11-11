<?php
      include "service/database.php";

      $register_messaage = "";


      if(isset($_POST['login'] )) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE
        email='$email' AND password='$password'";

        $result = $db->query($sql);
        if($result->num_rows > 0) {
          echo"DATANYA ADA";

          header("location: starter.php");
          $_SESSION['login_success'] = true;
          exit;
        }else {
          $register_messaage = "AKUN TIDAK DITEMUKAN";

        }
      }
?>

<?php
session_start();

$loginSuccess = isset($_SESSION['login_success']) ? $_SESSION['login_success'] : false;
{unset($_SESSION['login_success']); } // Hapus agar tidak muncul lagi
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FriendMind - Login</title>
    <link rel="stylesheet" href="assets/css/login.css" />
    <script>
    var loginSuccess = <?php echo json_encode($loginSuccess); ?>;
    <script src="assets/js/login.js"></script>

  </head>
  <body>
    <div class="login-container">
      <div class="login-card">
        <div class="logo">
          <a href="starter.php">
        <img
          src="assets/img/LOGO FRIENDMIND.png" alt="FriendMind"
          width="250px"
          class="logo d-flex align-items-center me-auto"
        />
      </a href>
        </div>

        <h1>Selamat datang !</h1>
        <p class="subtitle">Login untuk melanjutkan assesmentmu</p>
        <h6 class="subtitle"><?= $register_messaage ?></h6>

        <form id="loginForm" action="login.php" method="POST"> 
          <div class="input-group">
            <label for="email">Email</label>
            <input
              type="email" name="email"
              id="email"
              placeholder="Masukkan email"
              required
            />
          </div>

          <div class="input-group">
            <label for="password">Password</label>
            <div class="password-wrapper">
              <input
                type="password" name="password"
                id="password"
                placeholder="Masukkan password"
                required
              />
              <button
                type="button"
                id="togglePassword"
                aria-label="Lihat password"
              >
                <img
                  id="eyeIcon"
                  src="https://img.icons8.com/ios-glyphs/20/9ca3af/visible.png"
                  alt="toggle password"
                />
              </button>
            </div>
          </div>

          <button
            type="submit" name="login"
            class="btn-signin"
            
          >
            Sign In
          </button>

          <div class="links">
            <p>Belum mempunyai akun? <a href="register.php">Daftar</a></p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
