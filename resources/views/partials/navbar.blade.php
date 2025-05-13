<nav class="navbar navbar-expand-lg fixed-top bg-dark bg-opacity-50">
  <div class="container">
    <a class="navbar-brand text-white" href="/">Blog</a>
    <button class="navbar-toggler text-gray" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-gray {{ request()->is('/') ? 'active text-white' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray {{ request()->is('about') ? 'active text-white' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray {{ request()->is('post') ? 'active text-white' : '' }}" href="/post">Sample Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray {{ request()->is('contact') ? 'active text-white' : '' }}" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
