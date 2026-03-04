<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
</head>
<body>
    <h1>Lista de Contactos</h1>
    <ul>
        @foreach ($contactos as $contacto )
        <li>
            <strong>Nombre:</strong> {{ $contacto->nombre }} | 
            <strong>Correo:</strong> {{ $contacto->correo }} | 
            <strong>Mensaje:</strong> {{ $contacto->mensaje }}
        </li>
        @endforeach
    </ul>
</body>
</html>