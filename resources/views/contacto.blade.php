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
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="correo">Correo Electronico:</label>
        <input type="email" id="correo" name="correo"><br><br>

        <label for="message">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="ENA">
</form>
      
</body>
</html>