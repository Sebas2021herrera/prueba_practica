<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<body>
    <h2>Crear una nueva cuenta</h2>
    <form action="procesar_registro.php" method="post">
        <label for="username">Usuario:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="passwordr">Repita Contraseña:</label><br>
        <input type="password" id="passwordr" name="passwordr" required><br><br>


        
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
