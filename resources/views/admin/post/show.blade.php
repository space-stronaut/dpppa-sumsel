@extends('layouts.admin')
@section('title', 'Create Category')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Detail Berita</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Berita</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card p-3">
                    <img src="{{ Storage::url($post->image) }}" class="img-fluid" alt="">
                    <article>
                        <div class="content mt-4">
                            <h1 class="text-center">{{ $post->title }}</h1>
                            <div class="text-muted d-flex justify-content-between">
                                <h5>{{ Carbon\Carbon::parse($post['created_at'])->format('d F Y') }}</h5>
                                <h5 >Ditulis Oleh: {{ $post->author->name }}</h5>
                            </div>
                            <p>{!! $post->description !!}</p>
                        </div>
                    </article>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

