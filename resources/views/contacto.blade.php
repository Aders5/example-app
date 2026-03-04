<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>


    <form action="recibe-form" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="correo">Correo Electronico:</label>
        <input type="email" id="correo" name="correo" value="{{ old('correo') }}">
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50"> {{ old('mensaje') }} </textarea>
        @error('mensaje')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <input type="submit" value="Enviar">
</form>
      
</body>
</html>