<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>
</html>