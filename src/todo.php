<?php
require_once "classes/Task.php";
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
    <title>Liste des taches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1 class="h1 text-center py-5" style="font-size: 60px;">Liste des taches</h1>
    </header>
    <main class="containerMain mx-auto p-3 rounded-4">
        <ul style="list-style-type: none;">
            <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
                <li class="liste d-flex justify-content-between align-items-center ps-3 py-2 mb-2 rounded-3">
                    <a href="action.php?action=toggle&index=<?= $index ?>">
                        <button class="validé btn<?= $task->isDone() ? 'btn text-white btn-success terminee' : '' ?>">Validé</button>
                    </a>
                    <div class="titreCenter text-start">
                        <span class="text-start text-white"><?= $task->getTitle() ?></span>
                    </div>
                    <a href="action.php?action=delete&index=<?= $index ?>" class="btn" title="Supprimer">
                        <i class="ib bi bi-trash-fill fs-4"></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

    </main>
    <footer>
        <div class="container text-center my-3">
            <a class="btn btn-danger fw-bold fs-4" href="index.php"><i class="bi bi-x-lg"></i> Retour</a>
        </div>
    </footer>
</body>

</html>