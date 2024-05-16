<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product-Create</title>
    @vite(['resources/css/create.css'])
</head>
<body>
    <h1>Crear nuevo producto</h1>
    <form action="/producto" method="POST" id="formulario">
        @csrf

        <div class="iform">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </div>

        <div class="iform">
            <label for="precio">Precio</label>
            <input type="text" name="precio" id="precio">
        </div>

        <div class="iform">
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca">
        </div>

        <div class="iform">
            <select name="tipos[]" id="tipos" multiple>
                <option value="" disabled selected>Selecciona una categoria</option>
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
                <label for="tipos">Categorias</label>
            </select>
        </div>

        <input class="iset" type="submit" name="action" value="Enviar">

    </form>

    <a href="/producto">Regresar</a>
</body>
</html>