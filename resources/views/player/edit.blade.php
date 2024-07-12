<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

<h1>Actualizar jugadores</h1>
<br>
<form action="{{ route('player.update', $player) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label>
        Codigo:
        <br>
        <input type="text" name="codigo" value="{{ old('codigo', $player->codigo) }}">
    </label>
    <br>
    <label>
        Nombre
        <br>
        <input type="text" name="nombre" value="{{ old('nombre', $player->nombre) }}">
    </label><br>
    <label>
        Fecha nacimiento
        <br>
        <input type="text" name="fecha_nac" value="{{ old('fecha_nac', $player->fecha_nac) }}">
    </label><br>
    <label>
        Posicion
        <br>
        <input type="text" name="posicion" value="{{ old('posicion', $player->posicion) }}">
    </label>

    <br>
    <br>

    <button type="submit">Actualizar</button>

    </center>
</form>
</body>
</html>