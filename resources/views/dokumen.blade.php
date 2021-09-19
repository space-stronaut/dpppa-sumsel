@extends('layouts.starter')

@section('content')
<div class="container">
    <h1 class="h1-custom mt-lg">
        Dokumen
    </h1>
    <div class="row mt-gap">
            <table class="thead-dark">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($documents as $document)
                        <tr>
                            <td>{{ $document->nama }}</td>
                            <td>
                                <a href="/download/dokumen/{{$document->id}}" class="btn btn-success mr-2" target="_blank">Download</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Belum Ada Dokumen</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
    </div>
</div>
@endsection