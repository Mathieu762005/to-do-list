<?php
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO TITLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1 class="text-center my-5">Gestionnaire de taches</h1>
    </header>
    <main>
        <div class="container">
            <form method="POST" action="action.php?action=add">
                <input class="form-control form-control-lg" type="text" name="titre" placeholder="entrer un titre" aria-label=".form-control-lg example">
                <button class="btn btn-primary me-md-2 mt-3" type="submit">crée une tache</button>
            </form>
        </div>
        <div class="container">
            <form method="POST" action="todo.php">
                <button class="btn btn-primary me-md-2 mt-3" type="submit">liste des taches</button>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>