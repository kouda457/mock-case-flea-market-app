<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">coachtech</h1>
        </div>
    </header>

    <body>
        @yield('content')
    </body>
</body>

</html>
