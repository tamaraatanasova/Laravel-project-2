<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.header')
    <title>@yield('title', 'Home')</title>
    @include('partials.links')
</head>

<body>
    @include('partials.navbar')

    @include('partials.hero')

    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-6">
                @yield('content')
            </div>
        </div>
    </div>

    @include('partials.footer') 

    @include('partials.scripts')
</body>

</html>
