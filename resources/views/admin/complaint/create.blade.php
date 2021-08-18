@extends('layouts.admin')
@section('title', 'Buat Pengaduan')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Pengaduan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tambah Pengaduan</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.complaints.index') }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.complaints.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" name="user_id" class="form-control" required placeholder="Author" value="{{ Auth::user()->name }}" readonly>
                                <input type="hidden" name="user_id" class="form-control" required placeholder="Author" value="{{ Auth::user()->id }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" required placeholder="Title" value="{{ old('title') }}">
                            </div>

                            <div class="form-group">
                                <label for="title">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control" required placeholder="Title" value="{{ old('title') }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" id="summernote" name="deskripsi_pengaduan" class="form-control" required placeholder="Description" value="{{ old('description') }}" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Category</label>
                                <select name="complaints_category_id" class="form-control" required>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="images">Image</label>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>

                        </div>

                        <input type="hidden" name="status" value="diterima">
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@push('addon-script')
    <script>
        $(function () {
            // Summernote
            $('#summernote').summernote({
                height: 150
            });
            bsCustomFileInput.init();
        });
    </script>
@endpush
