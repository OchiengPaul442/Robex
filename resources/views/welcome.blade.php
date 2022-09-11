<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-text a{
            text-decoration: none;
            color: #ffff;
        }

        body,
        html {
            height: 100%;
        }

        /* The hero image */
        .hero-image {
            /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{ asset('img/construct.jpg') }});

            /* Set a specific height */
            height: 100%;

            /* Position and center the image to scale nicely on all screens */
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
    </style>
    <title>welcome page</title>
</head>

<body style="background: #219dbc7a">
    <div class="hero-image">
        <div class="hero-text">
            <h1>Welcome to Robex</h1>
            <p>Your Best stop for all your Engineering needs.</p>
            <a href="{{ route('main1') }}">
                <button type="button" style="background: #FB8500" class="btn btn-lg">Visit Us</button>
            </a>
        </div>
    </div>
</body>

</html>
