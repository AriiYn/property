<style>
    .alert {
    position: fixed;
    top: -100px;
    left: 50%;
    transform: translateX(-50%);
    width: 300px;
    padding: 15px;
    background-color: #4CAF50; /* Hijau untuk success */
    color: white;
    text-align: center;
    font-size: 16px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    opacity: 0;
    transition: all 0.5s ease;
    z-index: 9999;
}

.alert.active {
    top: 20px;
    opacity: 1;
}

.alert-message {
    margin: 0;
    padding: 0;
}

/* Efek animasi */
@keyframes slideDown {
    0% {
        top: -100px;
        opacity: 0;
    }
    100% {
        top: 20px;
        opacity: 1;
    }
}

.alert.active {
    animation: slideDown 0.5s ease forwards;
}

/* Menambahkan animasi hilang otomatis setelah beberapa detik */
@keyframes fadeOut {
    0% {
        top: 20px;
        opacity: 1;
    }
    100% {
        top: -100px;
        opacity: 0;
    }
}

/* Menyembunyikan alert setelah 3 detik */
.alert.active {
    animation: slideDown 0.5s ease forwards, fadeOut 0.5s ease 3s forwards;
}

        /* Container untuk membuat map responsive */
        .map-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
        }

        /* Gaya iframe agar responsive */
        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

</style>
@extends('app.layoute')
    @section('content')
    
    <div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_1.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Kontak</h1>

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
                  Kontak
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

        @if(session('success'))
            <div class="alert alert-success active">
                <p class="alert-message">{{ session('success') }}</p>
            </div>
        @endif

    <div class="section">
      <div class="container">
        <div class="row">
          @foreach($contacts as $kontak)
          <div
            class="col-lg-4 mb-5 mb-lg-0"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="contact-info">
              <div class="address mt-2">
                <i class="icon-room"></i>
                <h4 class="mb-2">Location:</h4>
                <p style="color: black;">
                  {{ $kontak->alamat }}<br />
                </p>
              </div>

              <div class="open-hours mt-4">
                <i class="icon-clock-o"></i>
                <h4 class="mb-2">Open Hours:</h4>
                <p style="color: black;">
                  Sunday-Friday:<br />
                  11:00 AM - 23:00 PM
                </p>
              </div>

              <div class="email mt-4">
                <i class="icon-envelope"></i>
                <h4 class="mb-2">Email:</h4>
                <p style="color: black;">{{ $kontak->email }}</p>
              </div>

              <div class="phone mt-4">
                <i class="icon-phone"></i>
                <h4 class="mb-2">Call:</h4>
                <p style="color: black;">{{ $kontak->no_tlp }}</p>
              </div>
            </div>
          @endforeach
        </div>
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <form action="{{ route('questkontak.store') }}" method="POST">
                <div class="row">
                    @csrf
                    <div class="col-6 mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Enter Name">
                    </div>

                    <div class="col-6 mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                    </div>

                    <div class="col-12 mb-3">
                        <input type="text" name="no_tlp" class="form-control" placeholder="Enter NO TLP">
                    </div>

                    <div class="col-12 mb-3">
                        <textarea name="text" class="form-control" cols="30" rows="7" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Send Message" class="btn btn-primary"/>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.untree_co-section -->

      <div class="container">
        <div class="row">
          <div class="map-container">
              <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.87760375810663!2d106.73208821564909!3d-6.25824278547897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1001ece79b5%3A0xfe19ca4a4f66b67c!2sGreen%20Bintaro%20Indah%2C%20Nomor%206!5e0!3m2!1sid!2sid!4v1728612053637!5m2!1sid!2sid"
                  allowfullscreen="" 
                  loading="lazy">
              </iframe>
          </div>
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