<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>MySimple</title>

    @vite('resources/css/app.css')
</head>
<body>
   @if (session('success'))
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
      {{ session('success') }}
    </div>
  @endif

  @if (session('deleted'))
    <div id="flash" class="p-4 text-center bg-red-50 text-red-500 font-bold">
      {{ session('deleted') }}
    </div>
  @endif

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