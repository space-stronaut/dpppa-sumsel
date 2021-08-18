@extends('layouts.admin')
@section('title', 'Berita')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Berita</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Berita</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add News</a>
                        <form action=""  class="d-flex mx-auto search" method="GET">

                            <input type="search" class="form-control" name="search" placeholder="Search news ..." value="{{ request('search')  }}" aria-label="search">
                            <button  class="btn btn-outline-info" type="submit">
                                Search
                            </button>
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th style="width: 200px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($posts as $key => $post)
                                <tr>
                                    <td>{{ $posts->firstItem() + $key }}</td>
                                    <td>{{ $post->author->name }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{!! Str::limit($post->description, 100) !!}</td>
                                    <td>{{ Carbon\Carbon::parse($post['created_at'])->format('d/m/Y') }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.posts.show', $post->slug) }}" class="btn btn-info mr-2" data-toggle="tooltip" data-placement="left" title="Show"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('admin.posts.edit', $post->slug) }}" class="btn btn-warning mr-2" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.posts.destroy', $post->slug) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick='return confirm("Are you sure?")' type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">

                            {{ $posts    ->links('vendor.pagination.bootstrap-4') }}

                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
