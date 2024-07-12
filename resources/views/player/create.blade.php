<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Crear Formulario</h1>
        <form action="{{route('player.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <label>
                Codigo:
                <br>
                <input type="text" name="codigo">
            </label>
            <br>
            <label>
                Nombre:
                <br>
                <input type="text" name="nombre">
            </label>
            <br>
            <label>
                Fecha de nacimiento:
                <br>
                <input type="text" name="fecha_nac">
            </label>
            <br>
            <label>
                Posicion:
                <br>
                <input type="text" name="posicion">
            </label>
            <br>
            <br>
            <button type="submit">Crear</button>
        </form>
    </center>
</body>
</html>