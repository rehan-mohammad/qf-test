<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="w-100">
    <header>
        @include('includes.header')
    </header>
    <div id="main">
        @yield('content')
    </div>

    <footer>
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
