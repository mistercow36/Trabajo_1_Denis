<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<header class="h-15vh bg-emerald-300 flex flex-row justify-between">
    <img src="{{asset("images/logo.jpg")}}" alt="logo">
    <h1>Prueba de laravel</h1>
    @auth
        Bienvenido, {{auth()->user()->name}}
        <form action="logout" method="POST">
            <input type="submit" value="Cerrar sesión">
        </form>
    @endauth
        @guest
            <div>
                <form action="login" method="POST">
                    @method('POST')
                    @csrf
                    <input type="text" name="email" placeholder="Correo electronico" id="">
                    <input type="password" name="password" placeholder="Contraseña" id="">
                </form>
                <a href="login">Iniciar sesión</a>
                <a href="register">Registrarse</a>

            </div>
        @endguest
    </header>
    <nav class="bg-emerald-500 flex flex-row justify-start">
        <a class="w-1/12 bg-gray-800 text-white" href="alumnos">Alumnos</a>
    </nav>
    <main>
        @yield('contenido')
    </main>
    <footer class="h-15vh bg-black" style="color: white; height: 50px">
        @copyrigth pero copia lo que quieras...
    </footer>
</header>
</body>
</html>
