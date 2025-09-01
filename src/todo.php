<?php
session_start();
require_once "classes/Task.php"; // ← indispensable ici

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
</head>

<body>
    <main class="container">
        <ul>
            gg
        </ul>
    </main>
</body>

</html>