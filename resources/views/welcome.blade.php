<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tweety</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
                font-weight: 200;
                color: #636b6f;
                background: #fff;
            }

            .content {
              width: 100%;
              height: 100vh;
              display: flex;
              justify-content: center;
              align-items: center;
              text-align: center
            }

            .title {
              font-size: 84px;
            }

            .links > a {
              color: #636b6f;
              padding: 0 25px;
              font-size: 13px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
            }
        </style>
    </head>
    <body>
      <div class="content">
        <div class="container">
          <div class="title">
            Tweety
          </div>
          <div class="links">
            @auth
              <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
              <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endauth
          </div>
        </div>
      </div>
    </body>
</html>
