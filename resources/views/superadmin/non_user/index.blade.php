
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 80vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            letter-spacing: 40px;
        }

        .role_title {
            font-size: 45px;
            letter-spacing: 10px;
            font-weight: bolder;
        }

        .auth_title {
            font-size: 25px;
            letter-spacing: 10px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">


        <div class="content">




            <div class="role_title m-b-md">
                Hello,<strong>{{ Auth::user()->name }}</strong> <br>
                You Are
            </div>



            <div class="title m-b-md">
                @if (Auth::user()->role_id == 1)
                Super Admin
                @endif
                @if (Auth::user()->role_id == 2)
                Admin
                @endif
                @if (Auth::user()->role_id == 3)
                Agent
                @endif
                @if (Auth::user()->role_id == 4)
                Non Verfied
                @endif
            </div>









        </div>
    </div>
</body>

</html>
