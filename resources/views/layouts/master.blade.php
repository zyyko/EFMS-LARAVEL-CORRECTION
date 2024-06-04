<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Add CSS styles here if needed */
        .container {
            display: flex;
        }

        main {
            flex-grow: 1;
        }
    </style>
</head>

<body>
    <header>
        @yield('header')
    </header>

    <div class="container">
        <main>
            @yield('contenu')
        </main>

        <aside>
            @yield('aside')
        </aside>
    </div>
</body>

</html>
