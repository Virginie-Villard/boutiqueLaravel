<!doctype html>
<html>
<head>
    @include('Layouts.Layouts.Head')
</head>

<body>
<div class="container">

    <header class="row">
        @include('Layouts.Layouts.Header')
    </header>

    <div id="main" class="row">
        @yield('content')
    </div>

    <footer class="row">
        @include('Layouts.Layouts.Footer')
    </footer>

</div>
</body>
</html>
