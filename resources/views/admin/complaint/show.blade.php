@extends('layouts.admin')
@section('title', 'Pengaduan')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Detail Pengaduan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Pengaduan</li>
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
                   <div class="detail">
                       <div class="row">
                           <div class="col-12 col-md-6">
                               <h5>Name: {{ $complaint->author->name }}</h5>
                               <h5>NIK: {{ $complaint->author->nik }}</h5>
                               <h5>Phone: {{ $complaint->author->phone }}</h5>

                           </div>
                           <div class="col-12 col-md-6 ">
                               <h5>Date: {{ Carbon\Carbon::parse($complaint['created_at'])->format('d F Y') }}</h5>
                               @if ($complaint->status === 'diterima')
                                   <h5>Status:
                                       <span class="badge badge-info text-uppercase">
                                                {{$complaint->status}}
                                            </span>
                                   </h5>
                               @elseif($complaint->status == "diproses")
                                   <h5>Status:
                                       <span class="badge badge-warning text-uppercase">
                                                {{$complaint->status}}
                                            </span>
                                   </h5>
                               @else
                                   <h5>Status:
                                       <span class="badge badge-success text-uppercase">
                                                {{$complaint->status}}
                                            </span>
                                   </h5>
                               @endif
                               <div class="d-flex align-items-center">
                                   @if ($complaint->status == "diterima")
                                       <form action="{{ route('admin.confirmation.update', $complaint->id) }}" method="POST">
                                           @method('PUT')
                                           @csrf
                                           <input type="hidden" name="status" value="diproses">
                                           Ubah Status menjadi: <button onclick='return confirm("Are you sure?")' type="submit" class="btn btn-warning">Proses</button>
                                       </form>
                                   @elseif ($complaint->status == "diproses")
                                       <form action="{{ route('admin.confirmation.update', $complaint->id) }}" method="POST">
                                           @method('PUT')
                                           @csrf
                                           <input type="hidden" name="status" value="selesai">
                                           Ubah Status menjadi: <button onclick='return confirm("Are you sure?")' type="submit" class="btn btn-success" >Selesai</button>
                                       </form>

                                   @else

                                   @endif
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
                <!-- /.card -->
                <div class="card p-3">
                   <div class="row">
                       <div class="col-12 col-md-6">
                           <img src="{{ asset('complaints/'.$complaint->image)}}" class="img-fluid" alt="">
                       </div>
                       <div class="col-12 col-md-6">
                           <h5 class="text-center">Keterangan</h5>
                           <div class="desc">
                               <p>{!! $complaint->deskripsi_pengaduan !!}</p>
                           </div>
                       </div>
                   </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

