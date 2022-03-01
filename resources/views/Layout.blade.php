<!doctype html>
<html>
<head>
    @include('Head')
</head>

<body>
<div class="container">

    <header class="row">
        @include('Header')
    </header>

    <div id="main" class="row">
        @yield('content')
    </div>

    <footer class="row">
        @include('Footer')
    </footer>

</div>
</body>
</html>
