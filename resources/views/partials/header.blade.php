<div class="container">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
               <a class="nav-link {{ (Route::currentRouteName() === 'about') ? 'active' : '' }}" href="{{ route('about') }}">Chi siamo</a>
               <a class="nav-link {{ (Route::currentRouteName() === 'where') ? 'active' : '' }}" href="{{ route('where') }}">Dove siamo</a>
            </div>
         </div>
      </div>
   </nav>
</div>