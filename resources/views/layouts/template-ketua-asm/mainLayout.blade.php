<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ketua | @yield('title')</title>

    @include('layouts.template-ketua-asm.style')
</head>
<body>

    @include('layouts.template-ketua-asm.header')

    @include('layouts.template-ketua-asm.sidebar')

    <main id="main" class="main">
        @yield('content')
    </main>

    @include('layouts.template-ketua-asm.footer')

    @include('layouts.template-ketua-asm.script')
    
</body>
</html>