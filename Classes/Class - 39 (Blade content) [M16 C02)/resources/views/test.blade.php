<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
 <h1 class="test">Hello</h1>

 <img src="assets/img/user2-160x160.jpg" alt="">

 <img src="{{ asset('storage/img2.jpg') }}" alt="">

@includeIf('components.testComponent')
</body>
</html>
