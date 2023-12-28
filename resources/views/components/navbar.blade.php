<nav class="container-fluid watch navanim" id="nav">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-12 col-md-6 p-0 d-flex justify-content-evenly align-items-center media-col">
      <label class="switch">
        <input type="checkbox" id="darkmode">
        <span class="slider"></span>
    </label>
      <h2 class="brand"><a href="{{route('homepage')}}" class="linkScroll text-white text-decoration-none fw-bold">Presto.it</a></h2>
      <button class="btn-canvas justify-content-end d-md-none align-items-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list icon linkScroll"></i></button>
      <a href="{{route('homepage')}}" class="d-md-block d-none linkScroll text-white text-decoration-none">Home</a>
      <a href="{{route('Products.index')}}" class="d-md-block d-none linkScroll text-white text-decoration-none">{{ __('ui.products') }}</a>
      
      
      {{-- <div class="dropdown nav-item text-white"> --}}
        <a class="btn-category linkScroll text-white text-decoration-none d-md-block d-none" type="submit" data-bs-toggle="dropdown" aria-expanded="false">
          {{ __('ui.Categories') }}
        </a>
        <ul class="dropdown-menu tendina w-100 media-dropdown">
          <div class="d-flex justify-content-evenly ">
            @foreach($categories as $category)
            <li class="media-dropdown link-item borderScroll"><a class="text-decoration-none text-white linkScroll caregory-link"  href="{{route('categoryShow',compact('category'))}}">{{__("ui.$category->name")}}</a></li>
            @endforeach
          </div>
        </ul>
        
        
        {{-- </div> --}}
    </div>
      
      <div class="col-12 col-md-6 d-flex p-0 justify-content-around align-items-center media-user">
       
        <div class="dropdow d-flex justify-content-evenly align-items-center">
       

        <form action="{{route('Products.search')}}" method="GET">
          <div class="searchBar-container active mx-3" id="search-container">
            <i class="bi bi-search search text-white"></i>
            <input type="text" name="searched" class="input input-search" placeholder="{{ __('ui.find') }}">
            <button type="submit" class="btn-search d-none freccetta-cerca"><i class="bi bi-arrow-right "></i></button>
          </div>
        </form>
        @guest
          <button class="profile-btn linkScroll" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
          </button>
          <ul class="dropdown-menu tendina-auth">
            <li class="nav-item login-item">
              <a class="nav-link login" href="{{route('login')}}">{{ __('ui.login') }}</a>
            </li>
            <li class="nav-item register-item">
              <a class="nav-link register" href="{{route('register')}}">{{ __('ui.register') }}</a>
            </li>
          </ul>
        </div>
        @endguest
        
        @auth
        <div class="dropdown">
          <a class="btn-category dropdown-toggle linkScroll text-white text-decoration-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            
            <i class="bi bi-person-circle"></i> {{ __('ui.hi') }}, {{Auth::user()->name}}
            
          </a>
          <ul class="dropdown-menu bg-black text-center">
            @if (Auth::user()->is_revisor)
            <li>
              <a class="link-auth-drop text-decoration-none" href="{{route('revisor.index')}}">
                {{ __('ui.revisorZone') }}
              </a>
              <span class="counter">
                {{App\Models\Product::toBeRevisionedCount()}}
                <span class="visually-hidden">undread messages</span>
              </span>
            </li>
            
            @endif
            <li>
              <a href="{{ route('Products.create') }}" class="link-auth-drop text-decoration-none">{{ __('ui.createAd') }}</a>
            </li>
          </ul>
        </div>
        @endauth
        
        
        
        @auth       
        <div class="dropdown d-flex justify-content-end media-logout p-3">
          <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="Btn ">
              
              <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
              
              <div class="text">{{ __('ui.logout') }}</div>
            </button>
            
          </form>
        </div>
          @endauth

          {{-- INIZIO DIV LINGUE BANDIERINE --}}

        <div class="nav-item dropdown">
          <a class="btn-category ms-5 dropdown-toggle linkScroll text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __('ui.language') }}
          </a>
          <ul class="dropdown-menu mt-3 bg-dark">
            <li class="text-light"><x-_locale lang="it"/>Italiano</li>
            <li class="text-light"><x-_locale lang="en"/>English</li>
            <li class="text-light"><x-_locale lang="es"/>Español</li>
          </ul>
        </div>
        
        {{-- FINE DIV LINGUE BANDIERINE --}}

      </div>        
  </div>
</nav>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <button type="button" class="close-canvas" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
        @guest
        <a class="media-link login" href="{{route('login')}}"><i class="bi bi-person-circle"></i> Accedi</a>
        @endguest
        
        @auth
        <div class="nomeUtente">
          <p class="media-link m-0"><i class="bi bi-person-circle"></i> Salve, {{Auth::user()->name}}</p>
        </div>
        @endauth
        
      </div>
      <div class="offcanvas-body offCanv d-flex flex-column align-items-end">
        
        <a href="{{route('homepage')}}" class="media-link">Home</a>  
        <a href="{{route('Products.index')}}" class="media-link">Annunci</a>
        <button class="media-link media-category-btn-canvas justify-content-end d-md-none align-items-start p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight">Categorie</button>
        <div class="nav-item dropdown">
          <a class="media-link btn-category ms-5 dropdown-toggle linkScroll text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __('ui.language') }}
          </a>
          <ul class="dropdown-menu mt-3 bg-dark">
            <li class="text-light media-link"><x-_locale lang="it"/>Italiano</li>
            <li class="text-light media-link"><x-_locale lang="en"/>English</li>
            <li class="text-light media-link"><x-_locale lang="es"/>Español</li>
          </ul>
        </div>
        <a class="link-auth-drop media-link text-decoration-none" href="{{route('revisor.index')}}">
          Zona revisore
        
        <span class="counter">
          {{App\Models\Product::toBeRevisionedCount()}}
          <span class="visually-hidden">undread messages</span>
        </span>
      </a>
        <a href="{{ route('Products.create') }}" class="link-auth-drop media-link text-decoration-none">Crea annuncio</a>
      </div>
      @auth  
      <div class="container-fluid">
        <div class="row">  
          <div class="col-12 d-flex flex-column align-items-end justify-content-evenly footer-canvas">
            <form class="d-flex" action="{{route('Products.search')}}" method="GET"> 
              <input class="media-form-search p-1 text-white" name="searched" type="search" placeholder="search" aria-label="search">
              <button type="submit" class="media-search"><i class="bi bi-search text-white"></i></button>
            </form>
            <form class=" d-flex justify-content-end" action="{{route('logout')}}" method="post">
              @csrf
              <button type="submit" class="media-logout-btn d-flex">
                
                <div class="media-text-logout me-3">Logout</div>
                
                <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                
                
              </button>
              
            </form>
          </div>
        </div>
      </div>
      @endauth
    </div>
    
    
    <div class="offcanvas offcanvas-end canvas-category" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <button type="button" class="close-canvas" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
        @guest
        <a class="media-link login" href="{{route('login')}}"><i class="bi bi-person-circle"></i> Accedi</a>
        @endguest
        
        @auth
        <div class="nomeUtente">
          <p class="media-link m-0"><i class="bi bi-person-circle"></i>Salve, {{Auth::user()->name}}</p>
        </div>
        @endauth
      </div>
      <div class="offcanvas-body offCanv d-flex flex-column align-items-end justify-content-evenly">  
        <h3 class="media-title-canvas my-5">Tutte le nostre categorie</h3>
        @foreach($categories as $category)
        <a class="media-link mb-1"  href="{{route('categoryShow',compact('category'))}}">{{($category->name)}}</a>
        @endforeach
      </div>
    </div>
    
    