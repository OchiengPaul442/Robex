@extends('layouts.admin.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
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
        {{-- overview tabs --}}
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body fs-5 text-black">Projects</div>
                    <h2 class="d-flex justify-content-end p-2">{{ $projectsCount }}</h2>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white">
                            <x-carbon-chevron-right style="width: 20px" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body fs-5 text-black">Articles</div>
                    <h2 class="d-flex justify-content-end p-2">
                        {{ $newsCount }}</h2>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white">
                            <x-carbon-chevron-right style="width: 20px" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body fs-5 text-black">Client Messages</div>
                    <h2 class="d-flex justify-content-end p-2">{{ $messagesCount }}</h2>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white">
                            <x-carbon-chevron-right style="width: 20px" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body fs-5 text-black">Testimonials</div>
                    <h2 class="d-flex justify-content-end p-2">{{ $testimonialsCount }}</h2>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white">
                            <x-carbon-chevron-right style="width: 20px" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- tables section showing data --}}
        {{-- projects --}}
        <div class="card mb-4">
            <div class="card-header">
                <x-carbon-column-dependency style="width: 20px;margin-right:10px" />
                Projects DataTable
            </div>
            <div class="card-body">
                <table id="projectsTable">
                    <thead>
                        <tr>
                            <th>Project name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Project name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        {{-- display all projects --}}
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->projectname }}</td>
                                <td>
                                    {{ Str::limit($project->description, 40) }}
                                </td>
                                <td>{{ $project->status }}</td>
                                <td>
                                    {{ Str::limit($project->image, 40) }}
                                </td>
                                <td>
                                    <a href="{{ route('projects.edit', $project->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- news section --}}
        <div class="card mb-4">
            <div class="card-header">
                <x-carbon-column-dependency style="width: 20px;margin-right:10px" />
                News DataTable
            </div>
            <div class="card-body">
                <table id="newsTable">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Article</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Article</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        {{-- display --}}
                        @foreach ($news as $new)
                            <tr>
                                <td>{{ $new->newstitle }}</td>
                                <td>{{ $new->authorsname }}</td>
                                <td>
                                    {{ Str::limit($new->briefdescription, 40) }}
                                </td>
                                <td>
                                    {{ Str::limit($new->newsarticle, 40) }}
                                </td>
                                <td>
                                    <a href="{{ route('news.edit', $new->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('news.destroy', $new->id) }}" method="POST"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- testimonials section --}}
        <div class="card mb-4">
            <div class="card-header">
                <x-carbon-column-dependency style="width: 20px;margin-right:10px" />
                Testimonials DataTable
            </div>
            <div class="card-body">
                <table id="testimonialsTable">
                    <thead>
                        <tr>
                            <th>Customer name</th>
                            <th>Occupation</th>
                            <th>Comments</th>
                            <th>Profile picture</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Customer name</th>
                            <th>Occupation</th>
                            <th>Comments</th>
                            <th>Profile picture</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        {{-- display --}}
                        @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>{{ $testimonial->customername }}</td>
                                <td>{{ $testimonial->occupation }}</td>
                                <td>
                                    {{ Str::limit($testimonial->comments, 40) }}
                                </td>
                                <td>
                                    {{ Str::limit($testimonial->profileimage, 40) }}
                                </td>
                                <td>
                                    <a href="{{ route('testimonial.edit', $testimonial->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
