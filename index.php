<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Biodata Website</title>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="70">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#dashboard">DASHBOARD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#profil">PROFIL</a></li>
            <li class="nav-item"><a class="nav-link" href="#galeri">GALERI</a></li>
            <li class="nav-item"><a class="nav-link" href="#achievment">ACHIEVMENT</a></li>
            <li class="nav-item"><a class="nav-link" href="#komentar">FORM KOMENTAR</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="dashboard" class="hero-section d-flex align-items-center">
      <div class="container text-center text-white">
        <h1 class="display-4 font-weight-bold mb-3">Halo, Saya Reza Pramustyo</h1>
        <p class="lead mb-4">Mahasiswa Teknik Informatika | Calon Web Developer | Ahli Kripto</p>
        <a href="#profil" class="btn btn-outline-light btn-lg">Mari Kenalan Lebih Dekat</a>
      </div>
    </section>

    <section id="profil" class="container my-5">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="font-weight-bold">PROFIL SAYA</h2>
          <p class="text-muted">Sedikit Cerita Tentang Siapa Saya, Apa Yang Saya Lakukan Dan Apa Yang Saya Kejar</p>
          <hr class="w-25 mx-auto">
        </div>
        <div class="row align-items-center">
          <div class="col-md-4 text-center mb-4 mb-md-0">
            <img src="img/profile1.png" alt="Foto Reza" class="profile-img shadow">
          </div>
          <div class="col-md-8">
            <p>Saya mahasiswa <strong>Teknik Informatika</strong> di <strong>Universitas Nusantara PGRI Kediri</strong> yang sedang berproses agar bisa menjadi seorang pengembang web profesional. Saya tertarik pada bidang front-end development dan saya juga aktif berorganisasi untuk mengasah soft skill dan jiwa kepemimpinan.</p>
            <div class="row mt-4">
              <div class="col-sm-6 mb-2"><strong> Nama :</strong> Reza Pramustyo</div>
              <div class="col-sm-6 mb-2"><strong> Hobi :</strong> Bermain Game, Basket</div>
              <div class="col-sm-6 mb-2"><strong> NPM :</strong> 2313020147</div>
              <div class="col-sm-6 mb-2"><strong> Keahlian :</strong> Web Dev Dasar</div>
              <div class="col-sm-6 mb-2"><strong> Kelas :</strong> 2D</div>
              <div class="col-sm-6 mb-2"><strong> Pengalaman :</strong> Juara Atswa Nesa</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="galeri" class="container my-5">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="font-weight-bold">GALERI</h2>
          <p class="text-muted">Berikut Adalah Beberapa Momen Yang Saya Abadikan</p>
        </div>
        <div id="galeriCarousel" class="carousel slide" data-ride="carousel" data-interval="1500">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="d-flex justify-content-center">
                <img class="d-block img-fluid rounded shadow" src="img/thumbs/1.jpg" alt="Karya 1" style="max-height:350px;">
              </div>
              <div class="text-center mt-3"><h5>Talkshow UKM KEN</h5></div>
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <img class="d-block img-fluid rounded shadow" src="img/thumbs/2.jpg" alt="Karya 2" style="max-height:350px;">
              </div>
              <div class="text-center mt-3"><h5>Watch Party MPL</h5></div>
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <img class="d-block img-fluid rounded shadow" src="img/thumbs/3.jpg" alt="Karya 3" style="max-height:350px;">
              </div>
              <div class="text-center mt-3"><h5>Foto Bersama Pengurus UKM KEN</h5></div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#galeriCarousel" role="button" data-slide="prev">
            <span class="fas fa-chevron-left custom-arrow"></span>
          </a>
          <a class="carousel-control-next" href="#galeriCarousel" role="button" data-slide="next">
            <span class="fas fa-chevron-right custom-arrow"></span>
          </a>
        </div>
      </div>
    </section>

    <section id="achievment" class="container my-5">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="font-weight-bold">ACHIEVMENT</h2>
          <p class="text-muted">Sedikit Jejak Prestasi Yang Pernah Saya Ukir</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5 text-center mb-4">
            <div class="achievment-card">
              <img src="img/achievment1.jpg" alt="Juara 3 M6 MLBB Tournament" class="img-fluid rounded mb-3">
              <h5>Juara 3 Event M6 MLBB Tournament</h5>
            </div>
          </div>
          <div class="col-md-5 text-center mb-4">
            <div class="achievment-card">
              <img src="img/achievment2.jpg" alt="Wakil Ketua Umum UKM KEN" class="img-fluid rounded mb-3">
              <h5>Wakil Ketua Umum UKM KEN</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="komentar" class="container my-5">
      <div class="text-center mb-4"><h2 class="font-weight-bold">FORM KOMENTAR</h2></div>
      <form id="formKomentar">
        <div class="form-group">
          <label for="nama">Nama Lengkap :</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" required>
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda" required>
        </div>
        <div class="form-group">
          <label for="pesan">Masukan & Saran :</label>
          <textarea class="form-control" id="pesan" name="pesan" rows="3" placeholder="Segala Masukan Dan Saran Yang Membangun Akan Saya Terima Dengan Sepenuh Hati. Terima Kasih" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>
    </section>

    <footer class="bg-dark text-white text-center py-3 mt-5">
      <div class="container">
        <small>&copy; 2025 Reza Pramustyo. All Rights Reserved.</small>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script>
      const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
      const navBrand = document.querySelector('.navbar-brand');
      window.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('section[id]');
        let scrollPos = window.scrollY + 80;
        let onDashboard = false;
        sections.forEach(sec => {
          if (scrollPos >= sec.offsetTop && scrollPos < sec.offsetTop + sec.offsetHeight) {
            if (sec.id === 'dashboard') {
              onDashboard = true;
            } else {
              navLinks.forEach(l => {
                l.classList.remove('active');
                if (l.getAttribute('href') === '#' + sec.id) {
                  l.classList.add('active');
                }
              });
            }
          }
        });
        if (onDashboard) {
          navLinks.forEach(l => l.classList.remove('active'));
          navBrand.classList.add('active-brand');
        } else {
          navBrand.classList.remove('active-brand');
        }
      });

      document.getElementById('formKomentar').addEventListener('submit', function(e){
        e.preventDefault();
        const formData = new FormData(this);
        fetch('simpan_komentar.php', {
          method: 'POST',
          body: formData
        })
        .then(res => res.text())
        .then(data => {
          alert('✅ Komentar Anda Telah Berhasil Dikirim.');
          this.reset();
          document.getElementById('komentar').scrollIntoView({behavior:'smooth'});
        })
        .catch(err => console.error(err));
      });
    </script>
  </body>
</html>
