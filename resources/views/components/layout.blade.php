<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>MySimple</title>

    @vite('resources/css/app.css')
</head>
<body>
    
    <header>
        <nav>
            <h1> MySimple</h1>
            <a href="{{ route('catalog.index')}}"> Code List</a>
            <a href="{{ route('codes.add')}}"> Add New Code </a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>