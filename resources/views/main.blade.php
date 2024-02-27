<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Page Principale</title>
    <style>
        *{
    margin: 0;
    padding: 0;
}
body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
}

header {
    background-color: #12372A;
    padding: 20px;
    text-align: center;
    align-items: center;
    justify-content: center;
    color: #fff;
    width: 100%;
    height: 70px;
    position: fixed;
    z-index: 2;
    top: 0;
}
header h1:hover{

}

nav {
    width: 150px; 
    background-color: #436850;
    padding: 5px;
    position: fixed;
    left: 0;
    z-index: 1;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

nav li {
    margin-bottom: 10px;
}

nav a {
    text-decoration: none;
    color: #fff;
    display: block;
    padding: 20px;
    border-radius: 10px;
    transition: background-color 0.3s;
}

nav a:hover {
    background-color: #ADBC9F;
}

main {   
    border: 2px solid black;

    margin-left: 160px;
    margin-top: 110px;
    height: 100vh;
    flex: 1;
    padding: 20px;
    position: fixed;
    z-index: 0;
}

    </style>
</head>
<body>
    <header>
        

        <h1>IAI LARAVEL</h1>
        

    </header>
    <nav>
        
        <ul>
            <li><a href="{{ route('page1') }}">Page 1</a></li>
            <li><a href="{{ route('page2') }}">Page 2</a></li>
            <li><a href="{{ route('page3') }}">Page3</a></li>
           
        </ul>
    </nav>
    <main>
        <!-- Zone réservée pour le contenu dynamique -->
        @yield('content')
    </main>
</body>
</html>
