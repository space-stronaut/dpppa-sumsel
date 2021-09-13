@extends('layouts.starter')

@section('content')
<div class="container">
    <h1 class="h1-custom mt-lg">
        Baca Berita Seputar DPPPA
    </h1>
    <div class="row mt-gap">
        @foreach ($posts as $post)
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
        @endforeach
    </div>
</div>
@endsection