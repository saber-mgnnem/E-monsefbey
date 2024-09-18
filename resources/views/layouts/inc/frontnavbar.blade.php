<nav class="fixed-top navbar navbar-expand-lg navbar-dark  bg-dark nav text-bg-dark   " >
  <div class="container  ">
    <a class="navbar-brand title" href="{{ url('/') }}">
        <img src="{{ asset('assets/images/logoW.png') }}"  class="card-img-nav">
    </a>

    <div class=" d-flex mt-1 p-1 bg-primary-subtle rounded-3 search-input">
        <x-eva-search-outline class=" icons"/>

        <input type="text" placeholder="Recherche par titre" class="form-control bg-primary-subtle border-0 "/>
        <button class="btn">recherche</button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Accueille</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu">
              @foreach($category as $cate)
                <li><a class="dropdown-item" href="{{url('category/product'.$cate->id)}}">{{$cate->name}}</a></li>
              @endforeach
            </ul>
          </li>
        @if(Auth::check())
        <li class="nav-item">
          <a class="nav-link" href="{{url('category')}}">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('cart')}}">Panier
            <span class="badge badge-pill bg-primary cart-count">0</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('wishlist')}}">Liste de souhaits
          <span class="badge badge-pill bg-success wishlist-count">0</span>

          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('my-order')}}">Mes commandes</a>
        </li>
        @endif

      @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>

    </div>
  </div>
</nav>
<style>
    .search-input {
        position: relative;
        margin-left: 100px
    }
    .search-input .icons {
        width: 20px;
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: rgb(196, 94, 46);
    }
    .search-input input {
        padding-left: 30px;
    }
    .btn{
        border-color:#FFF;
        margin: 0 10px;
        color: #fff;
    }
    .btn:hover{
        border-color:rgb(196, 94, 46);
        color: rgb(196, 94, 46);
    }
    .card-img-nav{
        width: 110px;
        height: 40px;
    }
    .nav-link:hover{
        color: rgb(196, 94, 46)
    }
</style>
