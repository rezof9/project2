@extends('main')

@section('section')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- Pastikan di layout `main` sudah ada jQuery, pagepiling.css, pagepiling.js, dan Bootstrap -->

<div class="pagepiling">
  <!-- Section 1 -->
  <div class="section pp-scrollable text-white" style="position:relative; height:100vh;">
    <!-- Background Image -->
    <div class="section-bg"
         style="
           background-image: url('{{ asset('assets/images/bg/bg1.jpg') }}');
           background-size: cover;
           background-position: center;
           position: absolute;
           top: 0; left: 0;
           width: 100%;
           height: 100vh;
           z-index: -1;
         ">
    </div>

    <!-- Navbar -->
    <header class="navbar navbar-2 navbar-white boxed" style="position:relative; z-index:999;">
      <div class="navbar-bg"></div>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>

      <style>
       /* HEADER */
.header-container {
    position: absolute;
    top: 20px;
    left: 0;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 5%;
    z-index: 50;
}

.logo img {
    max-width: 120px; /* Ukuran logo */
    height: auto;
}

.contact {
    font-size: 18px;
    font-weight: bold;
    color: #fff;
}

.social-icons {
    display: flex;
    gap: 10px;
}

.social-icons i {
    font-size: 18px;
    color: #fff;
}

/* Teks utama */
.vertical-centred {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100vh;
}

.subtitle-top {
    font-size: 20px;
    color: #fff;
    margin-bottom: 10px;
}

.display-2 {
    font-size: 60px;
    font-weight: bold;
    color: #fff;
    line-height: 1.2;
}

.text-primary {
    color: #e00000; /* Warna merah */
}

/* Garis bawah merah */
.underline {
    width: 80px;
    height: 4px;
    background-color: #e00000;
    margin-top: 10px;
}

        </style>
<style>
    .logo-container {
    display: flex;
    align-items: center;
}

.logo-container img {
    max-width: 60px; /* Sesuaikan ukuran */
    height: auto;
    margin-right: -5px; /* Mengurangi jarak agar terlihat menyatu */
}
.logo-container img {
    mix-blend-mode: multiply;
}

    </style>
      <div class="header-container">
        <div class="logo-container">
            <img src="{{ asset('assets/images/logo/mulyagiri.png') }}" alt="Logo Mulyagiri">
            {{-- <img src="{{ asset('assets/images/brand-white.png') }}" alt="Logo Mulyagiri"> --}}
        </div>
        <div class="contact">
            <span>CALL US: <strong>(+62) 812 3456 7890</strong></span>
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/share/1KvmkkL8MC/?mibextid=wwXIfr" target="_blank">
            <i class="fa-brands fa-facebook fa-2x"></i>
            </a>
            <a href="https://www.instagram.com/mulyagiri.dev" target="_blank">
                <i class="fa-brands fa-instagram fa-2x"></i>
            </a>
        </div>
    </div>
    <style>
        .vertical-centred {
    transform: translateY(-50px); /* Angka bisa diubah sesuai kebutuhan */
}
        </style>
    <div class="scroll-wrap">
        <div class="scrollable-content">
            <div class="vertical-centred text-left">
                <div class="container">
                    <p class="subtitle-top">Welcome To<br>PT Mulyagiri</p>
                    <h1 class="display-2">
                        BUILDING THE FUTURE WITH <span style="color: #e00000;" class="text-uppercase">EXCELLENCE</span>
                    </h1>
                    <div class="underline"></div>
                </div>
            </div>

        </div>
    </div>

</div> <!-- /.pagepiling -->

<script>
  $(document).ready(function(){
    // Inisialisasi pagepiling
    $('.pagepiling').pagepiling({
      direction: 'vertical',
      verticalCentered: true,
      sectionsColor: [],
      scrollingSpeed: 700,
      navigation: {
        'position': 'right',
      },
    });
  });
</script>
@endsection
