<div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="{{ route('post') }}">Create Post</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>
          @if(Auth::check())
          <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
          <a class="nav-link" href="{{ route('logout') }}">logout</a>
            @if(Auth::user()->admin())
              <a class="nav-link" href="#">Admin</a>
            @endif
          @endif
        </nav>
      </div>
    </div>