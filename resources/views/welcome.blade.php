<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <title>DPPPA Sumsel </title>
  </head>

  <body>
    <section class="hero-section">
      <!-- Navbar -->
      <nav class="nav-custom">
        <div class="container navbar-content">
          <div class="nav-logo">
            <img src="{{ asset('img/logo/logo.png') }}" alt="" class="img-fluid" />
          </div>
          <div class="gap-r-sm"></div>
          <div class="nav-links-custom" id="navbar">
            <div class="nav-a-links">
              <a class="a-link-nav" href="/">Beranda</a>
              <div class="dropdown">
                <a class="a-link-nav" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Profil
                  <img src="{{ asset('img/icon/arrow.svg') }}" alt="" />
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="a-link-nav" href="/blog-sejarah.html">Sejarah</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="a-link-nav" href="blog-visimisi.html">Visi dan Misi</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="a-link-nav" href="blog-strukturorganisasi.html">Struktur
                      Organisasi</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <a class="a-link-nav" href="pimpinan.html">Pimpinan dan Pegawai</a>
                  </li>
                </ul>
              </div>
              <div class="dropdown">
                <a class="a-link-nav" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Tugas dan Fungsi
                  <img src="{{ asset('img/icon/arrow.svg') }}" alt="" />
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="a-link-nav" href="#">Kepala Dinas</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="a-link-nav" href="#">Sekertariat</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="a-link-nav" href="#">Bidang Pengarusutamaan Gender dan Pemberdayaan
                      Perempuan</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="a-link-nav" href="#">Bidang Tumbuh Kembang Anak</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="a-link-nav" href="#">Bidang Data dan Informasi Gender dan Anak</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="a-link-nav" href="#">Bidang Perlindungan Perempuan dan Anak</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="a-link-nav" href="#">UPTD P2TP2A</a>
                  </li>

                </ul>
              </div>
              <a href="/pelayanan.html" class="a-link-nav">Layanan</a>
              <a href="/artikel.html" class="a-link-nav">Berita</a>
            </div>
            <div class="nav-cta">
                <a href="/login" class="button-primary">
                    <img src="{{ asset('img/icon/plus.svg') }}" class="mr-4" alt="" />
                <div class="gap-r-xs"></div> Buat Pengaduan
                </a>
            </div>
          </div>
          <div class="nav-toggle d-lg-none d-block" id="toggleNav">
            <img src="{{ asset('img/icon/toggle.svg') }}" alt="">
          </div>
        </div>
      </nav>
      <!-- end Navbar -->

      <!-- content -->
      <div class="container content-hero">
        <div class="row d-flex">
          <div class="col-lg-6 order-lg-1 order-2">
            <div class="box text-hero">
              <h1 class="h1-custom">
                Perempuan Berdaya, Anak Terlindungi<br>
                Indonesia Maju
              </h1>
              <p class="low-emp">
                Website resmi Dinas Pemberdayaan Perempuan dan
                Perlindungan Anak Sumatera Selatan. Sumber informasi
                resmi dan tempat pengaduan online.
              </p>
              <button class="button-primary"> Eksplor Website
              </button>
            </div>
          </div>
          <div class="col-lg-6 order-lg-2 order-1">
            <img class="img-fluid img-hero" src="{{ asset('img/main/hero-section.png') }}" alt="">
          </div>
        </div>
      </div>
      <!-- end content -->
    </section>

    <section class="features">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <h2 class="h2-custom">
              Kami Sebagai Pusat
              Pemberdayaan Perempuan
              dan Perlindungan Anak
            </h2>
            <p class="low-emp">Tugas kami adalah dalam bidang pemberdayaan
              perempuan dan perlindungan anak</p>
            <a href="" class="button-link">Tugas kami <img src="{{ asset('img/icon/right-arrow.svg') }}" alt=""></a>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="row">
              <div class="col-lg-4 mt-lg-0 mt-3">
                <div class="card-feature">
                  <div class="box">
                    <img src="{{ asset('img/icon/leader.svg') }}" alt="">
                  </div>
                  <div class="box mt-4">
                    <h6 class="h6-custom">
                      Tugas <br>
                      Pertama
                    </h6>
                    <p class="low-emp-sm">
                      Lorem ipsum dolor
                      sit amet, consectetur
                      adipiscing elit
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mt-lg-0 mt-3">
                <div class="card-feature">
                  <div class="box">
                    <img src="{{ asset('img/icon/leader.svg') }}" alt="">
                  </div>
                  <div class="box mt-4">
                    <h6 class="h6-custom">
                      Tugas <br>
                      Pertama
                    </h6>
                    <p class="low-emp-sm">
                      Lorem ipsum dolor
                      sit amet, consectetur
                      adipiscing elit
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mt-lg-0 mt-3">
                <div class="card-feature">
                  <div class="box">
                    <img src="{{ asset('img/icon/leader.svg') }}" alt="">
                  </div>
                  <div class="box mt-4">
                    <h6 class="h6-custom">
                      Tugas <br>
                      Pertama
                    </h6>
                    <p class="low-emp-sm">
                      Lorem ipsum dolor
                      sit amet, consectetur
                      adipiscing elit
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="greeting">
      <div class="container h-100">
        <div class="row h-100 d-flex align-items-center">
          <div class="col-lg-6 order-lg-1 order-2 mt-4 mt-lg-0">
            <div class="box">
              <h2 class="h2-custom">
                Sambutan dari Ketua DPPPA
                Sumsel
              </h2>
              <p class="low-emp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porttitor, felis in
                consequat mollis, ex sem dapibus lectus, ut mollis odio sapien at lorem.
                Nulla nec dolor turpis. Morbi tempor vitae nunc nec convallis. Etiam faucibus
                sit amet massa sit amet ultricies. Aliquam et dictum turpis, in sodales metus.</p>
              <a href="" class="button-link">Lihat profil ketua <img src="{{ asset('img/icon/right-arrow.svg') }}" alt=""></a>
            </div>
          </div>
          <div class="col-lg-6 order-lg-2 order-1">
            <div class="d-flex w-100 justify-content-end">
              <img class="img-fluid" src="{{ asset('img/main/sambutan.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="information">
      <div class="container h-100">
        <div class="row h-100 d-flex align-items-center">
          <div class="col-lg-6 ">
            <div class="box">
              <img class="img-fluid" src="{{ asset('img/main/kids.png') }}" alt="">
            </div>
          </div>
          <div class="col-lg-6  mt-4 mt-lg-0">
            <div class="box">
              <h2 class="h2-custom">
                Apa itu Dinas Pemberdayaan
                Perempuan dan Perlindungan
                Anak?
              </h2>
              <p class="low-emp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porttitor, felis in
                consequat mollis, ex sem dapibus lectus, ut mollis odio sapien at lorem.
                Nulla nec dolor turpis. Morbi tempor vitae nunc nec convallis. Etiam faucibus
                sit amet massa sit amet ultricies. Aliquam et dictum turpis, in sodales metus.</p>
              <a href="" class="button-link">Baca lebih lengkap <img src="{{ asset('img/icon/right-arrow.svg') }}" alt=""></a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="blogs">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="h2-custom">
              Dapatkan Kabar Terbaru
            </h2>
          </div>
        </div>
        <div class="row mt-gap">

                @forelse($posts as $post)
                <div class="col-lg-3">
                    <div class="box-blog">
                      <div class="tn-blog">
                        <img src="{{ Storage::url($post->image) }}" class="img-fluid" alt="">
                      </div>
                      <div class="desc-blog">
                        <div class="d-flex justify-content-between align-items-center my-16">
                          <p class="low-emp-sm text-pink fw-bold mb-0">
                            {{ $post->category->name }}
                          </p>
                          <p class="low-emp-sm mb-0">
                            {{ $post->created_at }}
                          </p>
                        </div>
                        <a href="/blog-template.html" style="text-decoration: none;">
                          <h6 class="h6-custom title-blog">
                            {{$post->title}}
                          </h6>
                        </a>
                        <p class="low-emp-100">
                            {!! Str::limit($post->description, 100) !!}
                        </p>
                      </div>
                    </div>
                  </div>
                @empty
                  <h2>
                      Belum Ada Berita
                  </h2>
                @endforelse
        </div>
      </div>
    </section>
    <footer class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5">

          <div class="row">
            <div class="col-1">
              <img src="{{ asset('img/icon/map-pin.svg') }}" alt="">
            </div>

            <div class="col">
              <p class="low-emp-100 text-pink" style="font-weight: 600;">
                Jl. Ade Irma Suryani Nasution No. 1254 Palembang
                Provinsi Sumatera Selatan Kode Pos 30129
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <img src="{{ asset('img/icon/phone.svg')}}" alt="">
            </div>

            <div class="col">
              <p class="low-emp-100 text-pink" style="font-weight: 600;">
                (0711) 314004
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <img src="{{ asset('img/icon/mail.svg') }}" alt="">
            </div>

            <div class="col">
              <p class="low-emp-100 text-pink" style="font-weight: 600;">
                dp3asumsel@gmail.com
              </p>
            </div>
          </div>

        </div>
        <div class="col-lg-4 d-flex justify-content-end">
          <div class="d-flex">
            <a href="" style="text-decoration: none;"><img src="{{ asset('img/icon/fb.svg') }}" alt=""></a>
            <div class="gap-r-xs"></div>
            <a href="" style="text-decoration: none;"><img src="{{ asset('img/icon/ig.svg') }}" alt=""></a>
            <div class="gap-r-xs"></div>
            <a href="" style="text-decoration: none;"><img src="{{ asset('img/icon/twitter.svg') }}" alt=""></a>
            <div class="gap-r-xs"></div>
          </div>
        </div>
      </div>
      <div class="row my-5">
        <div class="col d-flex justify-content-center">

          <p class="low-emp text-blue fw-bold text-center">
            © DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK 2021
          </p>

        </div>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <script>
      document.getElementById("toggleNav").addEventListener("click", function () {
        const navbar = document.getElementById("navbar");
        navbar.classList.toggle("nav-active");
      })

    </script>
    <!-- Option 1: Bootstrap Bundle with Popper
    <script src="{{ asset('bootstrap/bootstrap.js"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
      integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
  </body>

</html>
