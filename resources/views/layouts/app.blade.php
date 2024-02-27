<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Page Principale</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>IAI LARAVEL</h1>       
    </header>
    <nav>       
        @include("layouts.menu")
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
