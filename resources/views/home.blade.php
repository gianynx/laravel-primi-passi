<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-primi-passi</title>
</head>

<body>
    <header>
        <h1>{{ $titleH1 }}</h1>
        <h2>{{ $titleH2 }}</h2>
        <ul>
            <li>
                <a href="{{ route('prologue') }}">{{ $prologueTitle }}</a>
            </li>
            <li>
                <a href="{{ route('start') }}">{{ $gettingStartedTitle }}</a>
            </li>
            <li>
                <a href="{{ route('installation') }}">{{ $installationTitle }}</a>
            </li>
        </ul>
    </header>
    <main>
        <h3>{{ $titleH3 }}</h3>
        <img src="img/laravel_logo.jpeg" alt="laravel_logo" style="height: 20rem">
    </main>
    <footer>
        <span>{{ $footerSpan }}</span>
    </footer>
</body>

</html>
