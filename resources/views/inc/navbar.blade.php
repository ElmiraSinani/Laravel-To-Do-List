<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel Todo') }}
            </a>
        </div>

        <ul class="nav navbar-nav">
          <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
          <li class="{{Request::is('todo/create') ? 'active' : ''}}"><a href="/todo/create">Create Todo</a></li>
        </ul>
    </div>
</nav>
