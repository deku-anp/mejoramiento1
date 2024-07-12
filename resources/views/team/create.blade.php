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
        <br>
        <form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <label>
                Codigo
                <br>
                <input type="text" name="codigo">
            </label>
            <br>
            <label>
                Nombre
                <br>
                <input type="text" name="nombre">
            </label>
            <br>
            <label>
                Ciudad
                <br>
                <input type="text" name="ciudad">
            </label>
            <br>
            <label>
                Estadio
                <br>
                <input type="text" name="estadio">
            </label>
            <br>
            <label>
                Aforo
                <br>
                <input type="text" name="aforo">
            </label>
            <br>
            <label>
                Año
                <br>
                <input type="text" name="año">
            </label>
            <br>
            <br>
            <button type="submit">Crear</button>
        </form>
    </center>
</body>
</html>