@include('layouts.partials.head')

<nav class="navbar-custom">
  <div class="container">
    <div class="text-center navigation-links">
      <p> 
          <a href="{{ route('add.info.form.view') }}" class="nav-link @if(Route::currentRouteName()=='add.info.form.view') active-nav @endif"> Add Information</a>
          <span>&nbsp;|&nbsp;</span> 
          <a href="{{ route('ajax-pagination') }}" class="nav-link @if(Route::currentRouteName()=='ajax-pagination') active-nav @endif">Listing Page</a>
      </p>
    </div>
  </div>
</nav>
