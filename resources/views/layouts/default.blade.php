<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css?v=5">
</head>
<body>
    @include('layouts._header')

    <div class="container">
        <div class="col-md-offset-1 co-md-10">
            @include('shared._messages')
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>

    <script src="/js/app.js?v=20180809"></script>
</body>
</html>