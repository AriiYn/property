  <style>
        .promo-banner {
            position: relative;
            height: 570px;
            background-size: cover; /* Membuat gambar menyesuaikan lebar dan tinggi banner */
            background-position: center; /* Posisi gambar berada di tengah */
            background-repeat: no-repeat; /* Agar gambar tidak mengulang */
        }

        @media (max-width: 768px) {
            .promo-banner {
                height: 400px; /* Sesuaikan ketinggian untuk layar lebih kecil */
            }

        }

        @media (max-width: 576px) {
            .promo-banner {
                height: 300px; /* Ketinggian lebih kecil untuk layar ekstra kecil */
            }
        }

        /* Animasi fadeIn */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* CSS untuk mengatur ukuran teks responsif */
        .responsive-text h4 {
            font-size: 1.5rem; /* Ukuran untuk h4 */
        }
        .responsive-text h2 {
            font-size: 2.5rem; /* Ukuran untuk h2 */
        }
        
        /* Menggunakan media query untuk ukuran teks pada layar yang lebih kecil */
        @media (max-width: 768px) {
            .responsive-text h4 {
                font-size: 1.25rem; /* Ukuran lebih kecil untuk h4 */
            }
            .responsive-text h2 {
                font-size: 2rem; /* Ukuran lebih kecil untuk h2 */
            }
        }
        
        @media (max-width: 576px) {
            .responsive-text h4 {
                font-size: 1rem; /* Ukuran paling kecil untuk h4 */
            }
            .responsive-text h2 {
                font-size: 1.5rem; /* Ukuran paling kecil untuk h2 */
            }
        }
    </style>
@extends('app.layoute')
    @section('content')
    
    <div class="hero">
      <div class="hero-slide">
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_10.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_2.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_3.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_5.jpg')"
        ></div>
      </div>

      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up">
              Temukan Rumah Impian Anda Disini!
            </h1>
            <form
                action="{{ route('user.property') }}"
                method="GET"
                class="narrow-w form-search d-flex align-items-stretch mb-3"
                data-aos="fade-up"
                data-aos-delay="200"
            >
                <input
                    type="text"
                    name="search"
                    class="form-control px-4"
                    placeholder="Cari Berdasarkan Blok A Sampai I"
                    value="{{ request('search') }}"
                />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            <h2 class="font-weight-bold text-primary heading">
              Property Tersedia
            </h2>
          </div>
          <div class="col-lg-6 text-lg-end">
            <p>
              <a href="{{ route('user.property') }}" class="btn btn-primary text-white py-3 px-4">View all properties</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
                @foreach($perumahan as $property)
                  <div class="property-item">
                      <a href="{{ route('property.single', ['id' => $property->id_perumahan]) }}" class="img">
                          <img src="{{ asset('storage/' . $property->img_rumah) }}" alt="Image" class="img-fluid" />
                      </a>

                      <div class="property-content">
                          <div class="price mb-2">
                                  <span>Rp. {{ number_format($property->harga_rumah) }}</span>
                              </a>
                          </div>
                          <div>
                              <span class="city d-block mb-3">Blok | {{ $property->blok->blok ?? 'Tidak Ada' }}</span>

                              <div class="specs d-flex mb-4">
                                  <span class="d-block d-flex align-items-center me-3">
                                      <span class="icon-bed me-2"></span>
                                      <span style="color: black;" class="caption">{{ $property->detailUnit->kamar_tidur }} beds</span>
                                  </span>
                                  <span class="d-block d-flex align-items-center">
                                      <span class="icon-bath me-2"></span>
                                      <span style="color: black;" class="caption">{{ $property->detailUnit->kamar_mandi }} baths</span>
                                  </span>
                              </div>

                              <a href="{{ route('property.single', ['id' => $property->id_perumahan]) }}" class="btn btn-primary py-2 px-3">Lihat Detail</a>
                          </div>
                      </div>
                  </div>
                  <!-- .item -->
                  @endforeach
                </div>
              
                <div
                id="property-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation"
              >
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="property"
                  tabindex="-1"
                  >Prev</span
                >
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="property"
                  tabindex="-1"
                  >Next</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-4 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-5">
            <h2 class="font-weight-bold heading text-primary mb-4">
              Mari temukan rumah yang cocok untuk Anda
            </h2>
            <p style="color: black;">
              Rumah 2 lantai modern minimalis di bintaro DP 0% Harga nya mulai dari 1,2M Aja. Yuk buruan dapetin rumah impian kamu sekarang di Green Bintaro Indah!
            </p>
          </div>
        </div>
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
            <div class="img-about dots">
              <img src="images/hero_bg_1.jpg" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <div class="container">
                <div class="row">
                  <div class="col-lg-18">
                    <div class="widget">
                      <h3>Lokasi Strategis Dekat Dengan :</h3><br>
                      <h6>
                      <ul class="">
                        <li><a>DRIVING GOLF BINTARO</a></li>
                        <li><a>KAMPUS STAN</a></li>
                        <li><a>PINTU TOL PONDOK AREN</a></li>
                        <li><a>STASIUN KERETA PONDOK RANJI</a></li>
                        <li><a>SEKOLAH AL AZHAR BINTARO</a></li>
                        <li><a>SEKOLAH PEMBANGUNAN JAYA</a></li>
                        <li><a>SEKOLAH RICCI II</a></li>
                        <li><a>SEKOLAH GLOBAL JAYA</a></li>
                        <li><a>RUMAH SAKIT PREMIERE BINTARO</a></li>
                        <li><a>RUMAH SAKIT PONDOK INDAH BINTARO</a></li>
                        <li><a>RUMAH SAKIT MITRA KELUARGA BINTARO</a></li>
                        <li><a>MALL BINTARO EXCHANGE</a></li>
                        <li><a>MALL BINTARO PLAZA</a></li>
                        <li><a>PASAR SEGAR CEGER</a></li>
                        <li><a>PASAR MODERN BTC</a></li>
                        <li><a>HARMONI SWALAYAN</a></li>
                      </ul>
                      </h6>
                    </div>
                    <!-- /.widget -->
                  </div>
                  <!-- /.col-lg-4 -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-12 text-center mx-auto responsive-text">
            <h4 style="color: #ffc107;">PROMO</h4>
            <h3 style="color: #198754;" class="font-weight-bold text-primary heading">
              Jangan Lewatkan Promo Menarik Untuk Anda!
            </h3>
          </div>
        </div>
        <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">
            @foreach($promotions as $promo)
              <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <a href="#" class="promo-banner">
                  <img src="{{ asset('storage/' . $promo->banner) }}" class="d-block w-100 img-fluid" alt="Promo Image">
                </a>
              </div>
            @endforeach
          </div>

          <!-- Carousel controls (tombol prev dan next) -->
          <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

        <div class="section">
          <div class="container">
            <div class="row">
              <div class="col-md-12" data-aos="fade-up" data-aos-delay="0">
                <div class="video-container">
                  <iframe src="https://www.youtube.com/embed/RY760Fi4_5M?autoplay=1&loop=1&playlist=RY760Fi4_5M" 
                          title="YouTube video player" frameborder="0" 
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                          allowfullscreen>
                  </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>

    <div class="section">
      <div class="row justify-content-center footer-cta" data-aos="fade-up">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4">Jadilah bagian dari real estate kami</h2>
          <p>
            <a href="{{ route('user.property')}}" class="btn btn-primary text-white py-3 px-4" >Cari Property Anda Sekarang!</a>
          </p>
        </div>
        <!-- /.col-lg-7 -->
      </div>
      <!-- /.row -->
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var carouselItems = document.querySelectorAll('#promoCarousel .carousel-item');
        var prevButton = document.querySelector('#promoCarousel .carousel-control-prev');
        var nextButton = document.querySelector('#promoCarousel .carousel-control-next');

        // Cek apakah jumlah slide lebih dari 1
        if (carouselItems.length <= 1) {
            // Jika hanya ada 1 slide, sembunyikan tombol prev dan next
            prevButton.style.display = 'none';
            nextButton.style.display = 'none';
        }
    });
</script>
