<!-- el layout va a tener la estructura base que tenga en las demas paginas -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos</title>
</head>
<body>
    <!-- en blade todas las funciones las vamos a llamar mediante el arroba -->
    @yield('contenido')
    <!-- con la linea de arriba, llamamos a todos los campos que hayan con el nombre de "contenido" en el proyecto-->
    <!-- usado para no usar tantas lineas de programacion con el codigo repetitivo -->
</body>
</html>
