<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    @include('layouts.template.style')
</head>
<body>

    @include('layouts.template.header')

    @include('layouts.template.sidebar')

    <main id="main" class="main">
        @yield('content')
    </main>

    @include('layouts.template.footer')

    @include('layouts.template.script')
    
</body>
</html>