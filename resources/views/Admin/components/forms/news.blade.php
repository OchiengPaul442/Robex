<form @if (Request::is('news/*/edit')) action="{{ route('news.update', $data->id) }}" @else action="{{ route('news.store') }}" @endif class="mt-4 mb-3" enctype="multipart/form-data" method="POST">
    @csrf
    @if (Request::is('news/*/edit'))
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
        <label for="title" class="form-label">News Title</label>
        <input type="text" class="form-control" name="newstitle" id="title" placeholder=""
            @if (Request::is('news/*/edit')) value="{{ $data->newstitle }}" @endif>
        @error('newstitle')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="authorname" class="form-label">Authors Name</label>
        <input type="text" class="form-control" name="author" id="authorname" placeholder=""
            @if (Request::is('news/*/edit')) value="{{ $data->authorsname }}" @endif>
        @error('author')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="briefdescription" class="form-label">Brief Description</label>
        <textarea class="form-control" id="briefdescription" name="briefdescription" style="height:150px;max-height: 200px">
            @if (Request::is('news/*/edit')) {{$data->briefdescription}} @endif
        </textarea>
        @error('briefdescription')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="newsarticle" class="form-label">News Content</label>
        <textarea class="form-control" id="newsarticle" name="newsarticle" style="height:150px;max-height: 400px">
            @if (Request::is('news/*/edit')) {{$data->newsarticle}} @endif
        </textarea>
        @error('newsarticle')
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
    @if (Request::is('news/*/edit'))
        <button type="submit" class="btn btn-success">Update Data</button>
    @else
        <button type="submit" class="btn btn-primary">Upload Data</button>
    @endif
</form>
