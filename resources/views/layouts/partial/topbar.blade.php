<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="javascript:;">Dashboard</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/" target="_blank" title="My website" alt="My website">
              <i class="material-icons">web</i>
            </a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }} "
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();" title="Exit from app" alt="Exit from app">
              <i class="material-icons">exit_to_app</i>
              </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </li>
         
        </ul>
      </div>
    </div>
  </nav>