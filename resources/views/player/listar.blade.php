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
    <a href="{{ route('player.create') }}">registrar jugador</a>
    <br>
    <br>
    <br>
    <table class="table" >
        <td>
            <h4>Id
        </td>
        <td>
            <h4>codigo
        </td>
        <td>
            <h4>nombre
        </td>
        <td>
            <h4>fecha de nacimiento
        </td>
        <td>
            <h4>posicion
        </td>
        <td></td>
        <td></td>
        <td></td>
        @foreach ($players as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td>{{ $player->codigo }}</td>
                <td>{{ $player->nombre }}</td>
                <td>{{ $player->fecha_nac}}</td>
                <td>{{ $player->posicion }} </td>
                <td><a href="{{ route('player.show', $player->id) }}">Mostrar</a></td>
                <td><a href="{{ route('player.edit', $player->id) }}">Editar</a></td>
                <td>
                    <form action="{{ route('player.destroy', $player->id) }}" method="POST">
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