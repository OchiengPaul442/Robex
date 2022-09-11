<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* center in middle of page */
        .cont_ {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            z-index: 9999;
        }
        .cont_ a{
            text-decoration: none;
            color: #ffff;
        }
    </style>
    <title>welcome page</title>
</head>

<body style="background: #219dbc7a">
    <div class="cont_ d-flex flex-column text-center">
        <h1 class="fw-bold">Welcome to Robex-co</h1>
        <a href="{{ route('main1') }}">
            <button type="button" style="background: #FB8500" class="btn btn-lg">Press to continue</button>
        </a>
    </div>
</body>

</html>
