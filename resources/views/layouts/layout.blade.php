<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
        <title>document</title>        
    </head>
    <body>
      <div class="container">
        <header>
          @yield('header')
        </header>
  
        <main class="container">
          @yield('content')
        </main>
  
        <footer>
          @yield('footer')
        </footer>
      </div>

        
    </body>
</html>