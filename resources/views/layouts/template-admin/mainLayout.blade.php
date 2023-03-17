<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('layouts.template-admin.style')
</head>
<body>

    @include('layouts.template-admin.header')

    @include('layouts.template-admin.sidebar')

    <main id="main" class="main">
        @yield('content')
    </main>

    @include('layouts.template-admin.footer')

    @include('layouts.template-admin.script')
    
</body>
</html>