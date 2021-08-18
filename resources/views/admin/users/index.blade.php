@extends('layouts.admin')
@section('title', 'Kelola User')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Kelola User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kelola User</li>
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
                        <form action=""  class="d-flex mx-auto search" method="GET">

                            <input type="search" class="form-control" name="cari" placeholder="Search Users ..." value="{{ request('search')  }}" aria-label="search">
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
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Role</th>
                                <th style="width: 200px" colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->nik }}</td>
                                    @if ($user->role === 0)
                                        <td>
                                            <span class="badge badge-success text-uppercase">
                                                Admin
                                            </span>
                                        </td>
                                    @elseif($user->role == 1)
                                        <td>
                                            <span class="badge badge-success text-uppercase">
                                                Newsletter
                                            </span>
                                        </td>
                                    @else
                                        <td>
                                            <span class="badge badge-success text-uppercase">
                                                Masyarakat
                                            </span>
                                        </td>
                                    @endif
                                    @if($user->id !== Auth()->user()->id)
                                        @if ($user->role === 0)
                                            <td class="d-flex">
                                                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="role" value="2">
                                                    <button onclick='return confirm("Are you sure?")' type="submit" class="btn btn-success">Jadikan Masyarakat</i></button>
                                                </form>
                                                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="role" value="1">
                                                    <button onclick='return confirm("Are you sure?")' type="submit" class="btn btn-success ml-3">Jadikan Newsletter</i></button>
                                                </form>
                                            </td>
                                        @elseif($user->role === 1)
                                            <td class="d-flex">
                                                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="role" value="2">
                                                    <button onclick='return confirm("Are you sure?")' type="submit" class="btn btn-success">Jadikan Masyarakat</i></button>
                                                </form>
                                                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="role" value="0">
                                                    <button onclick='return confirm("Are you sure?")' type="submit" class="btn btn-success ml-3">Jadikan Admin</i></button>
                                                </form>
                                            </td>
                                        @else
                                            <td class="d-flex">
                                                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="role" value="0">
                                                    <button onclick='return confirm("Are you sure?")' type="submit" class="btn btn-success">Jadikan Admin</i></button>
                                                </form>
                                                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="role" value="1">
                                                    <button onclick='return confirm("Are you sure?")' type="submit" class="btn btn-success ml-3">Jadikan Newsletter</i></button>
                                                </form>
                                            </td>
                                        @endif
                                    @else
                                        <td>
                                            <button class="btn btn-primary btn-block btn-disabled" disabled>Ini Kamu</button>
                                        </td>
                                    @endif
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
                    
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
