<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sliding Sign In Sign Up Page</title>
  <link rel="stylesheet" href="<?php echo base_url().'/assets/css/login.css'?>">
</head>
<body>
<!-- partial:index.partial.html -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">

<div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="#">
                <h2>BUAT AKUN BARU</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="far fa-envelope"></i></i></a>
                </div>
                <span>Gunakan Email untuk mendaftarkan</span>
                <input type="text" placeholder="Username" />
                <input type="text" placeholder="Nomor Telepon" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>DAFTAR</button>
            </form>
        </div>
        <div class="form-container sign-up-container">
            <form action="#">
                <h2>MASUK</h2>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="far fa-envelope"></i></a>
                </div>
                <span>Gunakan akun untuk Masuk</span>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <a href="#">Lupa Password ?</a>
                <button>Masuk</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Hello, Friend!</h1>
                    <p>Daftarkan dirimu untuk terus melakukan perjalanan bersama kami.</p>
                    <button class="ghost" id="signIn">Daftar</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Selamat Datang</h1>
                    <p>Untuk teteap terkoneksi dengan kami silahkan masuk dengan akun anda</p>
                    <button class="ghost" id="signUp">Masuk</button>
                </div>
            </div>
        </div>
    </div>

<!--<div class="footer">
<b> Follow me on </b>
    <div class="icons">
        <a href="https://github.com/" target="_blank" class="social"><i class="fab fa-github"></i></a>
        <a href="https://www.instagram.com/" target="_blank" class="social"><i class="fab fa-instagram"></i></a>
        <a href="https://medium.com/" target="_blank" class="social"><i class="fab fa-medium"></i></a>
        <a href="https://twitter.com/" target="_blank" class="social"><i class="fab fa-twitter-square"></i></a>
        <a href="https://linkedin.com/" target="_blank" class="social"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>-->
<!-- partial -->
  <script  src="<?php echo base_url(); ?>assets/js/login.js"></script>

</body>
</html>