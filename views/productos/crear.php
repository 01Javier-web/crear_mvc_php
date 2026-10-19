<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear producto</title>
</head>
<body>
    <form action="<?= BASE ?>/productos" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre">

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" placeholder="Ingrese el precio">

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
