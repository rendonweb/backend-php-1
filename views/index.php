<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Personas</h2>
        <a href="/create" class="btn btn-success mb-3">Agregar Nueva Persona</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Fecha de Ingreso</th>
                    <th>Comentarios</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($people as $person): ?>
                <tr>
                    <td><?php echo $person['first_name']; ?></td>
                    <td><?php echo $person['last_name']; ?></td>
                    <td><?php echo $person['age']; ?></td>
                    <td><?php echo $person['date_of_entry']; ?></td>
                    <td><?php echo $person['comments']; ?></td>
                    <td>
                        <a href="/edit?id=<?php echo $person['id']; ?>" class="btn btn-primary">Editar</a>
                        <a href="/delete?id=<?php echo $person['id']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
