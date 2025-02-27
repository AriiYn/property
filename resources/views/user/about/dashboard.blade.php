<style>
.location-wrapper {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.location {
    width: 45%;
}

.location img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.location p {
    margin-top: 10px;
    font-size: 18px;
    font-weight: bold;
    color: #006f42;
}

@media (max-width: 768px) {
    .location-wrapper {
        flex-direction: column;
    }

    .location {
        width: 80%;
        margin-bottom: 20px;
    }
}

.responsive img {
    max-width: 100%;  /* Gambar akan menyesuaikan dengan lebar kontainer */
    height: auto;     /* Menjaga aspek rasio gambar */
    display: block;   /* Menghilangkan jarak bawah default pada gambar inline */
    margin: 0 auto;   /* Agar gambar tetap berada di tengah */
}

/* Agar kontainer gambar menyesuaikan ukuran layar */
.responsive {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

/* Responsive untuk ukuran layar lebih kecil */
@media (max-width: 768px) {
    .responsive img {
        max-width: 100%;
        height: auto;
    }
}
</style>
@extends('app.layoute')
    @section('content')
    <div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_3.jpg')">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Denah Dan Fasilitas</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  Denah Dan Fasilitas
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row text-left mb-5">
          <div class="col-12">
            <h2 class="font-weight-bold heading text-primary mb-4">Kenapa Green Bintaro Indah?</h2>
          </div>
          <div class="col-lg-6">
            <p style="color: black; font-size: 16px;">
              Karena perumahan siap HUNI dengan konsep ramah lingkungan dan memiliki standarisasi 
              keamanan yang terjamin untuk keluarga anda. Dengan luas area 2 ha lebih terdiri 
              dari 150 unit tahap 1 dan tahap 2, dengan fasilitas yang lengkap, serta jalan 
              yang luas disetiap blok dan kavlingnya.
            </p>
            <p style="color: black; font-size: 16px;">
              Dibangun oleh developer yang sudah pengalaman di bidang property yaitu 
              PT.TATA GRIYA JAYA. Sudah lebih dari 4 tahun bergerak di bidang Property 
              khususnya perumahan. Dengan pengalaman tersebut developer memberikan Bangunan 
              rumah yang terjamin dan berkualitas.
            </p>
          </div>
          <div class="col-lg-6">
            <div class="col-12">
              <h2>Fasilitas Cluster :</h2><br>
            </div>
            <h6>
              <ul>
                <li><a style="color: black;">MUSHOLLA</a></li>
                <li><a style="color: black;">SEQURITY 24 JAM</a></li>
                <li><a style="color: black;">CCTV</a></li>
                <li><a style="color: black;">TANDON AIR</a></li>
                <li><a style="color: black;">TAMAN BERMAIN</a></li>
              </ul>
            </h6>
          </div>
        </div>
      </div>
    </div>

    <div class="section pt-0">
      <div class="container">
        <div class="location-wrapper">
            <div class="location">
                <img src="images/hero_bg_14.jpg" alt="Stasiun Bogor">
                <p>Mempunyai Security 24 JAM</p>
            </div>
            <div class="location">
                <img src="images/hero_bg_13.jpg" alt="Gerbang Tol BOR Yasmin">
                <p>Mempunyai Tempat Bermain Anak</p>
            </div>
        </div>
      </div>
    </div>

    <div class="section pt-0">
      <div class="container">
        <div class="location-wrapper">
            <div class="location">
                <img src="images/hero_bg_12.jpg" alt="Stasiun Bogor">
                <p>Mempunyai Tempat Beribadah MUSHOLLA</p>
            </div>
            <div class="location">
                <img src="images/hero_bg_11.jpg" alt="Gerbang Tol BOR Yasmin">
                <p>Mempunyai Lapangan Volley atau Badminton</p>
            </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-12 text-center mx-auto responsive-text">
            <h3 style="color: #198754;" class="font-weight-bold text-primary heading">
              Type Dan Denah
            </h3>
          </div>
        </div>
        <div class="location-wrapper">
            <div class="location">
                <img src="images/tipe.jpg" alt="Stasiun Bogor">
            </div>
            <div class="location">
                <img src="images/tipe2.jpg" alt="Gerbang Tol BOR Yasmin">
            </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="responsive">
        <a href="{{ url('images/Siteplan.pdf') }}" target="_blank">
          <img src="images/denahcolour.jpg" alt="SIte Plan">
        </a>
      </div>
    </div>

    <div class="site-footer">
      <div class="container">
        <div class="row">
        <div class="col-lg-4">
            @foreach($contacts as $kontak)
            <div class="widget">
              <h3>Contact</h3>
              <address>{{ $kontak->alamat }}</address>
              <ul class="list-unstyled links">
                <li><a>{{ $kontak->no_tlp }}</a></li>
                <li>  
                  <a href="mailto:">{{ $kontak->email }}</a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
            @endforeach
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Links</h3>
              <ul class="list-unstyled links">
                <li><a href="{{ route('user.about') }}">About</a></li>
                <li><a href="{{ route('user.kontak') }}">Contact</a></li>
              </ul>

              @foreach($contacts as $kontak)
              <ul class="list-unstyled social">
                <li>
                  <a href="{{ $kontak->instagram }}" target="_blank" ><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="{{ $kontak->facebook }}" target="_blank" ><span class="icon-facebook"></span></a>
                </li>
              </ul>
              @endforeach
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <div class="row mt-5">
          <div class="col-12 text-center">
            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . All Rights Reserved. &mdash; Designed with love by
              <a href="#">Green Bintaro Indah</a>
            </p>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

@endsection