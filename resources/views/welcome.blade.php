<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySimple</title>

    @vite('resources/css/app.css')
    
</head>
<body class="container"> 
    <h1>Welcome!</h1>
    <p>MySimple to keep your code in simplicity</p>

    <a href="/catalog" class="btn mt-4 inline-block">
        keep it simple.
    </a>
</body>
</html>