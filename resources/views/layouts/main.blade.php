<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-9/css/all.min.css" integrity="sha512-X8jR8oYnEmXhGB43u+qxt0mQezR37NUxHhtukvD4bzeWDthOz0mvNOYOzPCMZ7VB0mG607nrkd+kakmSmbffyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>
<body>

  @include('partials.header')

  @yield('content')
  <main>
    fdfd
  </main>
  
  @include('partials.footer')


</body>
</html>