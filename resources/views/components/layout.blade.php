<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="flex bg-black text-white justify-between py-4 px-4 ">
        <h1>Blog</h1>
        <div class="flex gap-2">
            @guest
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            @endguest
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endauth
        </div>
    </header>
    <div>
        {{ $slot }}
    </div>
</body>
</html>