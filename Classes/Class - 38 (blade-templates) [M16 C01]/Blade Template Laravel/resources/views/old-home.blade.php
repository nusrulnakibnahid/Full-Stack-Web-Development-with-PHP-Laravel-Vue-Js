<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Comment --}}
    {{-- <h1>Comment</h1> --}}

    {{-- If Else Directives --}}
    {{-- @if ($user === "Admin")
        <h1>Welcome {{ $user }}</h1>
    @else
        <h1>You are Guest</h1>
    @endif --}}

    {{-- @if ($user === "Admin")
        <h1>Welcome {{ $user }}</h1>
    @elseif($user === "Editor")
        <h1>You are {{ $user }}</h1>
    @else
        <h1>You are Guest</h1>
    @endif --}}


    {{-- Switch Directives --}}

    {{-- @switch($user)
        @case('Admin')
            <h1>Welcome {{ $user }}</h1>
            @break
        @case('Editor')
            <h1>You are {{ $user }}</h1>
            @break
        @default
            <h1>You are Guest</h1>
    @endswitch --}}

    {{-- For Loop Directive --}}

    {{-- @for($i = 1; $i<=5; $i++)
        <h1>This post number {{ $i }}</h1>
    @endfor --}}

    {{-- While Loop  & php Directive --}}

    {{-- @php
        $i = 1;
    @endphp --}}

    {{-- @while ($i<=5)
        <h1>This while post number {{ $i }}</h1>
        @php 
            $i++; 
        @endphp
    @endwhile --}}



    {{-- Foreach Loop Directive --}}
    {{-- @if (count($posts) > 0)
        @foreach($posts as $post)
        <h1>{{ $post }}</h1>
        @endforeach
    @else
        <h1>No posts</h1>
    @endif --}}

    {{-- Forelse Directive --}}

    {{-- @forelse($posts as $post)
        <h1>{{ $post }}</h1>
    @empty
        <h1>No posts</h1>
    @endforelse --}}

    <h1>Welcome</h1>

    {{-- isset Directive --}}
    {{-- @isset($page_name)
        <h1>Title {{ $page_name }}</h1>
    @endisset --}}


    {{-- empty directive --}}
    {{-- @empty($cart)
        <p>Your cart is empty!</p>
    @endempty --}}

    {{-- auth & guest directive --}}

    {{-- @auth
        <h1>I am authenticated</h1>
    @endauth --}}


    {{-- @guest
        <h1>I am guest</h1>
    @endguest --}}

    {{-- <ul>
        <li>Home</li>
        @auth
            <li>Logout</li>
        @endauth
        @guest
            <li>Login</li>
            <li>Register</li>
        @endguest
    </ul> --}}

    {{-- Error Directive --}}
    {{-- <form action="" method="GET">
        @csrf
        @method('PUT')
        @method('DELETE')
        <label for=""></label>
        <input type="email" name="firstname">
         @error('firstname')
                <p>{{ $message }}</p>
        @enderror
        <label for=""></label>
        <input type="email" name="email">
           @error('email')
                <p>{{ $message }}</p>
            @enderror
        <button>Submit</button>
    </form> --}}


    {{-- Session Directive --}}
    {{-- @session('message')
        <h1>{{ session('message') }}</h1>
    @endsession --}}
 

   



    
</body>
</html>
