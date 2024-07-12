<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>

    <h1>Lista de jugadores:</h1>
    <br>
    <a href="{{ route('team.create') }}">registrar jugador</a>
    <br>
    <br>
    <br>
    <table class="table" >
        <td>
            <h4>Id
        </td>
        <td>
            <h4>Codigo
        </td>
        <td>
            <h4>Nombre
        </td>
        <td>
            <h4>Ciudad
        </td>
        <td>
            <h4>Estadio
        </td>
        <td>
            <h4>Aforo
        </td>
        <td>
            <h4>Año
        </td>
        <td></td>
        <td></td>
        <td></td>
        @foreach ($teams as $team)
            <tr>
                <td>{{ $team->id }}</td>
                <td>{{ $team->codigo }}</td>
                <td>{{ $team->nombre }}</td>
                <td>{{ $team->ciudad}}</td>
                <td>{{ $team->estadio}}</td>
                <td>{{ $team->aforo}}</td>
                <td>{{ $team->año}}</td>
                <td><a href="{{ route('team.show', $team->id) }}">Mostrar</a></td>
                <td><a href="{{ route('team.edit', $team->id) }}">Editar</a></td>
                <td>
                    <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    </center>

</body>
</html>