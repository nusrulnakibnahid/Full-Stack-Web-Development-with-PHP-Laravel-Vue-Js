<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My APP | @yield('title', 'Default Page')</title>
    <link rel="stylesheet" href="style.css">
    @yield('styles')
</head>
<body>
   
    <ul>
        <li>home</li>
        <li>about</li>
    </ul>

    @yield('content')
   
    <script src="script.js"></script>
   
</body>
</html>
