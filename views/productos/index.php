<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>
    <a href="<?= BASE ?>/productos/crear">Crear producto</a>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
        <?php $productos = $productos ?? []; ?>
        <?php foreach ($productos as $p): ?>
        <tr>
            <td><?= $p["nombre"] ?></td>
            <td><?= $p["precio"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
