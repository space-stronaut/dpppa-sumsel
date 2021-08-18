@extends('layouts.admin')
@section('title', 'Categories')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Gallery</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
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
                        <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Image</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Image</th>
                                <th style="width: 200px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($galleries as $key => $gallery)
                                <tr>
                                    <td>{{ $galleries->firstItem() + $key }}</td>
                                    <td><img src="{{ Storage::url($gallery->image) }}" class="img-fluid" alt=""></td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="btn btn-warning mr-2" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick='return confirm("Are you sure?")' type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">

                            {{ $galleries->links('vendor.pagination.bootstrap-4') }}

                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
