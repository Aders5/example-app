<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto Encontrado</title>
</head>
<body>
    <h1>Contacto Encontrado</h1>
    <ul>
        <li>
            <strong>Nombre:</strong> {{ $contacto->nombre }} | 
            <strong>Correo:</strong> {{ $contacto->correo }} | 
            <strong>Mensaje:</strong> {{ $contacto->mensaje }}
        </li>
    </ul>
    <p>
        <a href="{{ route('contactos.edit', $contacto) }}">Editar</a>
        <form action="{{ route('contactos.destroy', $contacto) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </p>
</body>
</html>