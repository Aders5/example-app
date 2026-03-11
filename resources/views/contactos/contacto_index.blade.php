<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
</head>
<body>
    <h1>Lista de Contactos</h1>
    <p>
        <a href ="{{ route('contactos.create') }}">Añadir un nuevo contacto </a>
    </p>
    <ul>
        @foreach ($contactos as $contacto )
        <li>
            Nombre: <a href="{{ route('contactos.show', $contacto) }}">{{ $contacto->nombre }}</a> |Correo: {{ $contacto->correo }} |Mensaje: {{ $contacto->mensaje }}
        </li>
        @endforeach
    </ul>
</body>
</html>