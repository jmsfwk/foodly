<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">
    <link href="/main.css" rel="stylesheet">
</head>
<body class="container max-w-screen-md mx-auto bg-zinc-200 text-zinc-900">
    <nav class="my-2.5">
        <a href="/" class="font-bold uppercase">Foodly</a>
    </nav>
    <main class="mt-20">
        @yield('content')
    </main>
</body>
</html>
