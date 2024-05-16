<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show products</title>
    @vite(['resources/css/show.css'])

</head>
<body>
    <h1>Producto {{ $producto->id }}</h1>
    <p>Nombre: {{ $producto->nombre }}</p>
    <p>Precio: {{ $producto->precio }}</p>
    <p>Marca: {{ $producto->marca }}</p>
    <p>Categoria: @foreach ($producto->tipos as $tipo)
                    {{$tipo->nombre}}<br>
                @endforeach</p> 

    <a href="/producto">Regresar</a>

</body>
</html>