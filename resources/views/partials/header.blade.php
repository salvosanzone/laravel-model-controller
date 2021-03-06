<header class="d-flex align-items-center">
  <div class="container">
    <div class="menu d-flex justify-content-between align-items-center">
      <div class="left-menu d-flex">
        <div class="logo mx-4">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Amazon_Prime_Video_logo.svg/1280px-Amazon_Prime_Video_logo.svg.png" alt="">
        </div>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (Route::currentRouteName() === 'store') ? 'active' : '' }}" href="{{route('store')}}">Store</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (Route::currentRouteName() === 'canali') ? 'active' : '' }}" href="#">Canali</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (Route::currentRouteName() === 'categorie') ? 'active' : '' }}" href="#">Categorie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (Route::currentRouteName() === 'personale') ? 'active' : '' }}" href="#">Area Personale</a>
          </li>
        </ul>
      </div>
    <div class="right-menu d-flex align-items-center">
      <i class="fas fa-search "></i>
      <div class="user mx-2">
        <i class="fas fa-user "></i>
      </div>
      <h6 class="my-0">Salvatore <i class="fas fa-sort-down"></i></h6>
    </div>
    </div>
  </div>
</header>
