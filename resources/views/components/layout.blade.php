<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<head>
    <meta charset="utf8">
</head>

<body>
    <header>
        <h1>Prismeo</h1>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="{{ url('/clients') }}">Liste des cliens</a></li>
                <li><a href="#">Test</a></li>
            </ul>
        </nav>
    </header>

    <main>{{ $slot }}</main>

    <footer>
        <p>&copy; 2024 site test</p>
    </footer>
</body>

</html>