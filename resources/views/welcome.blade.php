<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo-black.png') }}" type="image/x-icon">
    <style>
        .hero-text a {
            text-decoration: none;
            color: #ffff;
        }

        body,
        html {
            height: 100%;
        }

        /* The hero image */
        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url("../img/construct.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        /* Place text in the middle of the image */
        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .hero-text h1 {
            font-size: 55px;
            font-weight: 513;
        }

        .hero-text p {
            font-size: 19px;
        }

        .hero-text img{
            width: 580px;
            /* height: 100px; */
        }

        @media (max-width: 767px) {
            .hero-text img{
                width: 300px;
            }
        }
    </style>
    <title>welcome page</title>
</head>

<body style="background: #219dbc7a">
    <div class="hero-image">
        <div class="hero-text">
            <h1>Welcome to</h1>
            <img src="{{ asset('img/Group.png') }}" alt="">
            <p>Your Best stop for all your Engineering needs.</p>
            <a href="{{ route('index') }}">
                <button type="button" style="background: #FB8500" class="fs-2 btn btn-lg">Visit Us</button>
            </a>
        </div>
    </div>
</body>

</html>
