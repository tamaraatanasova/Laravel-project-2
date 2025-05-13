<div class="hero_section">
    <h1 class=" {{ request()->is('post') ? 'text-start  display-5' : '' }} display-2">@yield('h1', '')</h1>
    <h3 class=" {{ request()->is('post') ? 'text-start' : '' }}">@yield('h3', '')</h3>
    <p class=" {{ request()->is('post') ? 'text-start' : '' }}">@yield('p', '')</p>
</div>
