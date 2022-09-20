<form
    @if (Request::is('testimonial/*/edit')) action="{{ route('testimonial.update', $data->id) }}" @else action="{{ route('testimonial.store') }}" @endif
    class="mt-4 mb-3" enctype="multipart/form-data" method="POST">
    @csrf
    @if (Request::is('testimonial/*/edit'))
        @method('PUT')
    @else
        @method('POST')
    @endif
    {{-- display success message --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('fail'))
        <div class="alert alert-danger">
            {{ session('fail') }}
        </div>
    @endif
    <div class="mb-3">
        <label for="name" class="form-label">Customer name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder=""
            @if (Request::is('testimonial/*/edit')) value="{{ $data->customername }}" @endif>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="occupation" class="form-label">Customer occupation</label>
        <input type="text" class="form-control" name="occupation" id="occupation" placeholder=""
            @if (Request::is('testimonial/*/edit')) value="{{ $data->occupation }}" @endif>
        @error('occupation')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="comments" class="form-label">Comments</label>
        <textarea class="form-control" id="comments" name="comments" style="height:150px;max-height: 200px">
            @if (Request::is('testimonial/*/edit'))
{{ $data->comments }}
@endif
        </textarea>
        @error('comments')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <div class="input-group mb-3">
            <input type="file" class="form-control" name="image" id="newsimage">
            <label class="input-group-text" for="newsimage">Upload</label>
        </div>
        @error('image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    @if (Request::is('testimonial/*/edit'))
        <button type="submit" class="btn btn-success">Update Data</button>
    @else
        <button type="submit" class="btn btn-primary">Upload Data</button>
    @endif
</form>
