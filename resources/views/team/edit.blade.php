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
<form action="{{ route('team.update', $team) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label>
        Codigo
        <br>
        <input type="text" name="codigo" value="{{ old('codigo', $team->codigo) }}">
    </label>
    <br>
    <label>
        Nombre
        <br>
        <input type="text" name="nombre" value="{{ old('nombre', $team->nombre) }}">
    </label><br>
    <label>
        Ciudad
        <br>
        <input type="text" name="ciudad" value="{{ old('ciudad', $team->ciudad) }}">
    </label><br>
    <label>
        Estadio
        <br>
        <input type="text" name="estadio" value="{{ old('estadio', $team->estadio) }}">
    </label>
    <br>
    <label>
        Aforo
        <br>
        <input type="text" name="aforo" value="{{ old('aforo', $team->aforo) }}">
    </label>
    <br>
    <label>
        Año
        <br>
        <input type="text" name="año" value="{{ old('año', $team->año) }}">
    </label>

    <br>
    <br>

    <button type="submit">Actualizar</button>

    </center>
</form>
</body>
</html>