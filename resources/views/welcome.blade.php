<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html,
        body {
        background:url({{ URL::asset('images/medical.png')}}) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        /* background-color: #fff; */

        color: #636b6f;
        font-family: 'Nunito',
        sans-serif;
        font-weight: 200;
        /* height: 100vh; */

        /* margin: 0; */

        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        /* .position-ref {
            position: relative;
        } */

        .top-left {
            position: absolute;
            left: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 15px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .vertical-center {
            min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  min-height: 100vh; /* These two lines are counted as one :-)       */

  display: flex;
  align-items: center;
        }

    </style>
</head>

<body>
    <div class="row">
        <div class="container col-md-12">
            @if (Route::has('login'))
            <div class="top-left links">
                @auth
                <a href="{{ url('/home') }}">Home</a> @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a> @endauth
            </div>
            @endif
            <div class="row vertical-center" >
                <div class="col-md-1"></div>
                <div class="col-md-5" style="text-align:center;">
                    <h1 style="font-size:84px"><i class="fas fa-notes-medical fa-sm"></i> eHealth</h1>

                    <h3>Quick and simple way to keep track of all your medical records. Update as needed, email the records to
                        your doctor, and have 24/7 access to your records.</h3>

                </div>
            </div>
        </div>
    </div>
</body>

</html>