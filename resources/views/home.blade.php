@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-around">
        <div class="col-md-8">
            @livewire('post-index')
        </div>
        <div class="col-md-8 p-fixed top-0">
            @livewire('post-create')
        </div>
    </div>
</div>
@endsection
