<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anggota | @yield('title')</title>

    @include('layouts.template-anggota.style')
</head>
<body>

    @include('layouts.template-anggota.header')

    @include('layouts.template-anggota.sidebar')

    <main id="main" class="main">
        @yield('content')
    </main>

    @include('layouts.template-anggota.footer')

    @include('layouts.template-anggota.script')
    
</body>
</html>