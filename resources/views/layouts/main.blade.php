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
  <main class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-3 box">
          <img src="https://www.theitaliantouch.org/it/wp-content/uploads/2015/03/Otto-e-mezzo-fellini-720x380.jpg" alt="">
        </div>
        <div class="col-3 box">
          <img src="https://www.balarm.it/cache/b/8/e/f/8/b8ef8b4a0ae9abf60a6d644b44230f62851d8643-marlon-brando-il-padrino-jpg-48763-1620804546.jpeg" alt="">
        </div>
        <div class="col-3 box">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8-i5-gWNwWJN2k0ODkdmkV3O8gRYsfZUYrQ&usqp=CAU" alt="">
        </div>
        <div class="col-3 box">
          <img src="https://www.enricopizzuti.it/wp-content/uploads/2019/10/janet-leigh-psycho-scena-doccia.jpg" alt="">
        </div>
      </div>
    </div>
  </main>
  
  @include('partials.footer')


</body>
</html>