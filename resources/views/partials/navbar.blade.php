
<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('post') ? 'active' : '' }}" href="/post">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link ms-auto" href="/login">
             <span data-feather="log-in"></span> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
