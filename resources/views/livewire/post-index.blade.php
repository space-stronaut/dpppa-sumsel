@if (session()->has('success'))
    <div class="mb-5">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@endif

@forelse ($posts as $post)
<div class="card mb-5">
    <div class="card-header">{{ $post->author->name }}</div>

    <div class="card-body">
        <h1>{{ $post->title }}</h1>
        <img src="{{ url('storage/complaints/'.$post->image) }}" class="img-fluid" alt="">

        {{ Carbon\Carbon::parse($post['created_at'])->format('d/m/Y') }}
    </div>
</div>    
@empty
<div class="card">
    <div class="card-header">
        Belum Ada Pengaduan
    </div>
</div>
@endforelse
