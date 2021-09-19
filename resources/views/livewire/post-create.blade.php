<div class="card position-fixed" style="width: 40rem">
    <div class="card-header">
        Buat Pengaduan
    </div>
    <div class="card-body">
        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" wire:model="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea wire:model="deskripsi_pengaduan" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Complaint Category</label>
                <select wire:model="complaints_category_id" id="" class="form-control">
                <option value="" selected>Choose..</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Location</label>
                <input type="text" class="form-control" wire:model="lokasi">
            </div>
            <div class="form-group">
                <label for="">Image <small class="text-danger">*Optional</small></label>
                <input type="file" wire:model="image" class="form-control" id="">
                @error('image')
                    <div class="invalid-feedback" role="alert">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
            </div>
        </form>
    </div>
</div>
