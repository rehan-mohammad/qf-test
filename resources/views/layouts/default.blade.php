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
    <div id="main" class="px-5 py-4">
        @yield('content')
    </div>

    <footer>
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
