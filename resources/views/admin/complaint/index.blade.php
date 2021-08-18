@extends('layouts.admin')
@section('title', 'Pengaduan')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pengaduan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pengaduan</li>
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
                        <a href="{{ route('admin.complaints.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Pengaduan</a>
                        <form action=""  class="d-flex mx-auto search" method="GET">

                            <input type="search" class="form-control" name="cari" placeholder="Search pengaduan ..." value="{{ request('search')  }}" aria-label="search">
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
                                <th>Status</th>
                                <th>Lokasi</th>
                                <th>Date</th>
                                <th style="width: 200px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($complaints as $complaint)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $complaint->author->name }}</td>
                                    <td>{{ $complaint->title }}</td>
                                    <td>{!! Str::limit($complaint->deskripsi_pengaduan, 100) !!}</td>
                                    @if ($complaint->status === 'diterima')
                                        <td>
                                            <span class="badge badge-info text-uppercase">
                                                {{$complaint->status}}
                                            </span>
                                        </td>
                                    @elseif($complaint->status == "diproses")
                                        <td>
                                            <span class="badge badge-warning text-uppercase">
                                                {{$complaint->status}}
                                            </span>
                                        </td>
                                    @else
                                        <td>
                                            <span class="badge badge-success text-uppercase">
                                                {{$complaint->status}}
                                            </span>
                                        </td>
                                    @endif
                                    <td>{{$complaint->lokasi}}</td>
                                    <td>{{ Carbon\Carbon::parse($complaint['created_at'])->format('d M y') }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.complaints.show', $complaint->id) }}" class="btn btn-info mr-2" data-toggle="tooltip" data-placement="left" title="Show"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('admin.complaints.edit', $complaint->id) }}" class="btn btn-warning mr-2" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.complaints.destroy', $complaint->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick='return confirm("Are you sure?")' type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">

                            {{ $complaints->links('vendor.pagination.bootstrap-4') }}

                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
