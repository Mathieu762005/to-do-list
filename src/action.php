<?php
require_once "classes/Task.php";
session_start();

$action = $_GET['action'] ?? null;
$index = $_GET['index'] ?? null;


if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

if ($action === 'add' && isset($_POST['titre'])) {
    $newTask = new task($_POST['titre']);
    $_SESSION['tasks'][] = $newTask;
}

if ($action === 'toggle' && isset($_GET['index'])) {
    $index = $_GET['index'];
    if (isset($_SESSION['tasks'][$index])) {
        $_SESSION['tasks'][$index]->toggle();
    }
}

if ($action === 'delete' && isset($_GET['index'])) {
    $index = $_GET['index'];
    if (isset($_SESSION['tasks'][$index])) {
        unset($_SESSION['tasks'][$index]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']);
    }
}

header("Location: todo.php");
exit;
