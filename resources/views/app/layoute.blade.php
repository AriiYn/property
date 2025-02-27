<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Untree.co" />
        <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

        <meta name="description" content="" />
        <meta name="keywords" content="bootstrap, bootstrap5" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>

        <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css')}}" />

        <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/css/slider.css')}}" />

        <title>
        Property &mdash; Green Bintaro Indah
        </title>
    </head>
    <style>
        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            border-radius: 50%;
            padding: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 9999; /* Menambahkan z-index agar tombol di atas elemen lain */
        }

        /* Gambar di dalam tombol WhatsApp */
        .whatsapp-btn img {
            width: 40px;
            height: 40px;
        }

        /* Hover effect */
        .whatsapp-btn:hover {
            background-color: #1EBE56;
            transform: scale(1.1);
        }

        /* Responsif: ukuran tombol menyesuaikan layar yang lebih kecil */
        @media (max-width: 768px) {
            .whatsapp-btn {
                width: 60px;
                height: 60px;
                bottom: 10px;
                right: 10px;
            }

            .whatsapp-btn img {
                width: 30px;
                height: 30px;
            }
        }

        @media (max-width: 480px) {
            .whatsapp-btn {
                width: 50px;
                height: 50px;
                bottom: 8px;
                right: 8px;
            }

            .whatsapp-btn img {
                width: 25px;
                height: 25px;
            }
        }

        .video-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <body>
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <nav class="site-nav">
            <div class="container">
                <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <a href="{{ route('user.dashboard')}}" class="logo m-0 float-start">Green Bintaro Indah</a>
                    <ul
                    class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
                    >
                    <li><a href="{{ route('user.dashboard')}}">Home</a></li>
                    <li><a href="{{ route('user.property')}}">Property</a></li>
                    <li><a href="{{ route('user.about')}}">Denah Dan Fasilitas</a></li>
                    <li><a href="{{ route('user.kontak')}}">Kontak</a></li>
                    <li><a href="{{ route('login.form') }}">Login</a></li>
                    </ul>

                    <a
                    href="#"
                    class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                    data-toggle="collapse"
                    data-target="#main-navbar"
                    >
                    <span></span>
                    </a>
                </div>
                </div>
            </div>
        </nav>

        <!-- Begin Page Content -->
        <div>
            @yield('content')
        </div>
        <!-- End of Page Content -->
        
        <!-- Tombol WhatsApp -->
        <a href="https://wa.me/628176523347?text=Halo%20saya%20tertarik%20dengan%20property%20Green%20Bintaro%20Indah%20%20Anda!" target="_blank" class="whatsapp-btn">
        <i><img src="{{ asset('images/WA.png') }}" alt="Image" width="50px" height="50px" /></i> <!-- Icon WhatsApp -->
        </a>
            
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/tiny-slider.js')}}"></script>
        <script src="{{ asset('assets/js/aos.js')}}"></script>
        <script src="{{ asset('assets/js/navbar.js')}}"></script>
        <script src="{{ asset('assets/js/counter.js')}}"></script>
        <script src="{{ asset('assets/js/custom.js')}}"></script>
        <script src="{{ asset('assets/js/slider.js')}}"></script>
    </body>
</html>