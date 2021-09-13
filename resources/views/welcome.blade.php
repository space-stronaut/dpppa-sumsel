@extends('layouts.starter')

@section('content')
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
                    <a href="/posts/{{ $post->slug }}" style="text-decoration: none;">
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

@endsection