<form
    @if (Request::is('service/*/edit')) action="{{ route('service.update', $service->id) }}" @else action="{{ route('service.store') }}" @endif
    class="mt-4 mb-3" enctype="multipart/form-data" method="POST">
    @csrf
    @if (Request::is('service/*/edit'))
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
        <label for="name" class="form-label">Service name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder=""
            @if (Request::is('service/*/edit')) value="{{ $service->name }}" @endif>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Brief Description</label>
        <textarea class="form-control" id="description" name="description" style="height:150px;max-height: 200px">
            @if (Request::is('service/*/edit'))
{{ $service->description }}
@endif
        </textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="details" class="form-label">Details</label>
        <textarea class="form-control" id="details" name="details" style="height:150px;max-height: 200px">
            @if (Request::is('service/*/edit'))
{{ $service->details }}
@endif
        </textarea>
        @error('details')
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
    @if (Request::is('service/*/edit'))
        <button type="submit" class="btn btn-success">Update Data</button>
    @else
        <button type="submit" class="btn btn-primary">Upload Data</button>
    @endif
</form>
