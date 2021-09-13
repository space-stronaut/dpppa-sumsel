@extends('layouts.starter')

@section('content')
<div class="container content-hero">
    <div class="row d-flex">
        <div class="col-lg-6 order-lg-1 order-2">
            <div class="box text-hero">
                <p class="text-lg text-pink fw-bold mb-2">
                    Berita {{ $post->category->name }}
                </p>
                <h1 class="h1-custom">
                    {{ $post->title }}
                </h1>



                <p class="low-emp">
                    {{ $post->created_at }}
                </p>

                </button>
            </div>
        </div>
        <div class="col-lg-6 order-lg-2 order-1">
            <img class="img-fluid img-hero" src="{{ Storage::url($post->image) }}" alt="">
        </div>
    </div>
</div>
<!-- end content -->
</section>

<section class="content-blog mt-5 pt-5" id="bottom">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 blog-read">
            {!!$post->description!!}
        </div>
    </div>
</div>
</section>
@endsection