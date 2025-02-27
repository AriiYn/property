<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table tr {
    border-bottom: 1px solid #ddd;
}

table td {
    padding: 10px;
    vertical-align: top;
    color: #333;
}

table td:first-child {
    font-weight: bold;
    color: #006f42;
}
</style>
@extends('app.layoute')

@section('content')
<div
  class="hero page-inner overlay"
  style="background-image: url('{{ asset('images/hero_bg_3.jpg') }}')"
>
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center mt-5">
        <h1 class="heading" data-aos="fade-up">
          {{ $property->blok->name ?? 'Property Address' }}
        </h1>

        <nav
          aria-label="breadcrumb"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <ol class="breadcrumb text-center justify-content-center">
            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">
              <a href="{{ route('user.property') }}">Properties</a>
            </li>
            <li
              class="breadcrumb-item active text-white-50"
              aria-current="page"
            >
              {{ $property->blok->name ?? 'Property Address' }}
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7">
        <div class="img-property-slide-wrap">
          <div class="img-property-slide-wrap">
            <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('storage/' . $property->img_rumah) }}" class="d-block w-100" alt="Image">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('storage/' . $property->img_denah) }}" class="d-block w-100" alt="Denah">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('storage/' . $property->interior->img_interior1 ?? '' ) }}" class="d-block w-100" alt="Interior 1">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('storage/' . $property->interior->img_interior2 ?? '' ) }}" class="d-block w-100" alt="Interior 2">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('storage/' . $property->interior->img_interior3 ?? '' ) }}" class="d-block w-100" alt="Interior 3">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('storage/' . $property->interior->img_interior4 ?? '') }}" class="d-block w-100" alt="Interior 4">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('storage/' . $property->interior->img_interior5 ?? '' ) }}" class="d-block w-100" alt="Interior 5">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('storage/' . $property->interior->img_interior6 ?? '' ) }}" class="d-block w-100" alt="Interior 5">
                </div>
              </div>
              <!-- Tombol navigasi slider di bawah -->
              <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <h2 class="heading text-primary">Blok | {{ $property->blok->blok ?? 'Property Blok' }}</h2>
        <h4 class="meta">Rp. {{ number_format($property->harga_rumah) }}</h4><br>
        <p style="color: #333;">{{ $property->detailunit->description ?? 'Tidak Ada Description.' }}</p>

        <div class="specs d-flex mb-3">
            <span class="d-block d-flex align-items-center me-3">
                <span class="icon-bed me-2"></span>
                <span class="caption" style="color: #333;">{{ $property->detailunit->kamar_tidur ?? 'N/A' }} beds</span>
            </span>
        </div>
        <div class="specs d-flex mb-3">
            <span class="d-block d-flex align-items-center me-3">
                <span class="icon-bath me-2"></span>
                <span class="caption" style="color: #333;">{{ $property->detailunit->kamar_mandi ?? 'N/A' }} baths</span>
            </span>
        </div>
        <div class="specs d-flex mb-3">
            <span class="d-block d-flex align-items-center me-3">
                <span class="icon-free_breakfast me-2"></span>
                <span class="caption" style="color: #333;">{{ $property->detailunit->balkon ?? 'N/A' }} balcony</span>
            </span>
        </div>
        <div class="specs d-flex mb-3">
            <span class="d-block d-flex align-items-center me-3">
                <span class="icon-car me-2"></span>
                <span class="caption" style="color: #333;">{{ $property->detailunit->carport ?? 'N/A' }} carport</span>
            </span>
        </div>
        <div class="specs d-flex mb-3">
            <span class="d-block d-flex align-items-center me-3">
                <span class="icon-kitchen me-2"></span>
                <span class="caption" style="color: #333;">{{ $property->detailunit->dapur ?? 'N/A' }} kitchen</span>
            </span>
        </div>
        <div class="specs d-flex mb-3">
            <span class="d-block d-flex align-items-center me-3">
                <span class="icon-smoking_rooms me-2"></span>
                <span class="caption" style="color: #333;">{{ $property->detailunit->ruang_tamu ?? 'N/A' }} sitting room</span>
            </span>
        </div>
        <div class="specs d-flex mb-3">
            <span class="d-block d-flex align-items-center me-3">
                <span class="icon-building me-2"></span>
                <span class="caption" style="color: #333;">{{ $property->detailunit->luas_tanah ?? 'N/A' }} Luas Tanah</span>
            </span>
        </div>
        <div class="specs d-flex mb-3">
          <span class="d-block d-flex align-items-center">
            <span class="icon-building me-2"></span>
            <span class="caption" style="color: #333;">{{ $property->detailunit->luas_bangunan ?? 'N/A' }} Luas Bangunan</span>
          </span>
        </div>
        <div class="specs d-flex mb-3">
          <span class="d-block d-flex align-items-center">
            <span class="icon-home me-2"></span>
            <span class="caption" style="color: #333;">Type : {{ $property->interior->type ?? 'N/A' }}</span>
          </span>
        </div>
        <div class="d-block  p-5">
            <div class=" text-lg-end">
                <p>
                <a href="https://wa.me/6285782837367?text=Halo%20saya%20tertarik%20dengan%20property%20Green%20Bintaro%20Indah%20%20Anda!%20DI%20Blok%20|%20{{$property->blok->blok}}%20dengan%20harga%20Rp.%20{{number_format($property->harga_rumah)}}" target="_blank" class="btn btn-primary text-white">Pesan</a> |
                <a type="button" data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-primary text-white">Question</a>
                </p>
            </div>
        </div>
        <div class="specs d-flex mb-3">
            <span class="d-block d-flex align-items-center me-3">
                <span class="caption" style="color: #333;">Note : jika pesan tidak terkirim maka kembali dan dicoba lagi, Tanpa menghapus halaman whatsapp.</span>
            </span>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 style="color: #006f42;">SPESIFIKASI BANGUNAN :</h2>
              <table>
                  <tr>
                      <td>Pondasi</td>
                      <td>: Bor Pail, Beton Struktur</td>
                  </tr>
                  <tr>
                      <td>Dinding</td>
                      <td>: Hebel, Plester & Aci</td>
                  </tr>
                  <tr>
                      <td>Finishing</td>
                      <td>: Dinding Dalam Cat Vinylex, Dinding Luar Cat Mowilex</td>
                  </tr>
                  <tr>
                      <td>Lantai</td>
                      <td>: Granite Tile 60x60</td>
                  </tr>
                  <tr>
                      <td>Dinding KM/WC</td>
                      <td>: 30x60</td>
                  </tr>
                  <tr>
                      <td>Kusen</td>
                      <td>: Alumunium</td>
                  </tr>
                  <tr>
                      <td>Pintu Utama</td>
                      <td>: Kayu Solid</td>
                  </tr>
                  <tr>
                      <td>Pintu Dalam</td>
                      <td>: Double Triplek Finish HPL</td>
                  </tr>
                  <tr>
                      <td>Plafond</td>
                      <td>: GYPSUM Rangka HOLLOW</td>
                  </tr>
                  <tr>
                      <td>Sanitary</td>
                      <td>: Closed Duduk</td>
                  </tr>
                  <tr>
                      <td>Atap</td>
                      <td>: Rangka Baja Ringan & Genteng Beton</td>
                  </tr>
                  <tr>
                      <td>Listrik</td>
                      <td>: PLN 2200 WATT</td>
                  </tr>
                  <tr>
                      <td>Fasilitas</td>
                      <td>: POMPA JET PUMP, TORN AIR, PENDORONG</td>
                  </tr>
              </table>
          </div>
          <!-- /.col-lg-4 -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Kirim Pertanyan Anda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form inside modal -->
        <form action="{{ route('property.store') }}" method="POST">
                <div class="row">
                    @csrf
                    <div class="col-12 mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Enter Name">
                    </div>

                    <div class="col-12 mb-3">
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
