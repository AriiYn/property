<style>
   .alert {
    padding: 20px;
    margin: 15px 0;
    border-radius: 5px;
    font-family: Arial, sans-serif;
    position: relative;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
    }

    .alert-success {
        background-color: #d4edda;
        border-left: 6px solid #28a745;
        color: #155724;
    }

    .alert-icon {
        font-size: 20px;
        margin-right: 15px;
        color: #28a745;
    }

    .alert-message {
        flex: 1;
        font-size: 16px;
        margin: 0;
        text-align: center;
    }

    .alert:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        transform: translateY(-2px);
    }

    /* Optional close button for the alert */
    .alert .close-btn {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        font-size: 18px;
        color: #155724;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .alert .close-btn:hover {
        color: #0b2e13;
    }
</style>
@extends('app.layoute')
    @section('content')

    <div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_1.jpg')">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Property</h1>

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
                  Property
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

        @if(session('success'))
          <div class="alert alert-success">
                <p class="alert-message">{{ session('success') }}</p>
            </div>
        @endif

    <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6 text-center mx-auto">
            <h2 class="font-weight-bold text-primary heading">
              Semua Property
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
              @if($perumahan->isEmpty())
                  <p>Tidak ada hasil untuk pencarian "{{ request('search') }}"</p>
              @else
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
                @endif
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

    <div class="section section-properties">
        <div class="container">
            <div class="row">
                @foreach($perumahan as $property)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="{{ route('property.single', $property->id_perumahan) }}" class="img">
                            <img src="{{ asset('storage/'.$property->img_rumah) }}" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="price mb-2">
                                <span>${{ number_format($property->harga_rumah) }}</span>
                            </div>
                            <div> 
                                <span class="d-block mb-2 text-black-50">{{ $property->detailunit->Ruang_tamu }}</span>
                                <span class="city d-block mb-3">Blok | {{ $property->blok->blok ?? 'No Block' }}</span>

                                <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span style="color: black;" class="caption">{{ $property->detailunit->kamar_tidur }} beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span style="color: black;" class="caption">{{ $property->detailunit->kamar_mandi }} baths</span>
                                    </span>
                                </div>
                                <a href="{{ route('property.single', $property->id_perumahan) }}" class="btn btn-primary py-2 px-3">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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