<header>
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/post/create">Create New Post</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            <a class="nav-link" href="/about">About</a>
            
            @if(!auth()->check())
            <a href="/login" class="nav-link ml-auto">Login</a>
            <a href="/register" class="nav-link ml">Register</a>
            @endif

            @if(auth()->check())
              <a class="nav-link dropdown-toggle ml-auto" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ ucfirst(Auth::user()->name) }}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/logout">Logout</a>
              </div>
            @endif
          
          </nav>
        </div>
      </div>

      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">The Bootstrap Blog</h1>
          <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
      </div>
    </header>