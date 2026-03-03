<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="recibe-form" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"><br><br>

        <label for="correo">Correo Electronico:</label>
        <input type="email" id="correo" name="correo" value="{{ old('correo') }}"><br><br>

        <label for="message">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50"> {{ old('mensaje') }} </textarea><br><br>

        <input type="submit" value="Enviar">
</form>
      
</body>
</html>