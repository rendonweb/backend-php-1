<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Persona</h2>
        <form action="/edit?id=<?php echo $person['id']; ?>" method="POST">
            <div class="mb-3">
                <label for="first_name" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $person['first_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $person['last_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Edad</label>
                <input type="number" class="form-control" id="age" name="age" value="<?php echo $person['age']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="date_of_entry" class="form-label">Fecha de Ingreso</label>
                <input type="date" class="form-control" id="date_of_entry" name="date_of_entry" value="<?php echo $person['date_of_entry']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="comments" class="form-label">Comentarios</label>
                <textarea class="form-control" id="comments" name="comments"><?php echo $person['comments']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
