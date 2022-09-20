{{-- redirect user if session is not set --}}
@if(!session()->has('userID'))
    @php
        header("Location: /admin");
        exit();
    @endphp
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ $title }}</title>
    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset('logo2.png') }}" type="image/x-icon">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- datatables css --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
</head>

<body class="sb-nav-fixed">
    {{-- topnavbar --}}
    @include('layouts.admin.topNav')
    <div id="layoutSidenav">
        {{-- sidenavbar --}}
        <div id="layoutSidenav_nav">
            @include('layouts.admin.sideNav')
        </div>
        <div id="layoutSidenav_content">
            {{-- content --}}
            <main>
                @yield('content')
            </main>
            {{-- footer --}}
            @include('layouts.admin.footer')
        </div>
    </div>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    {{-- datatables js --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
