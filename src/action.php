<?php
require_once "classes/Task.php";
session_start();

$action = $_GET['action'] ?? null;


if ($_GET['action'] === 'add' && isset($_POST['titre'])) {
    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }
}

if ($action === 'add' && isset($_POST['index'])) {
    $newTask = new task($_POST['index']);
    $_SESSION['tasks'][] = $newTask;
}

if ($action === 'toggle' && isset($_GET['index'])) {
    $index = (int) $_GET['index'];
    if (isset($_SESSION['tasks'][$index])) {
        $_SESSION['tasks'][$index]->toggle();
    }
}

if ($action === 'delete' && isset($_GET['index'])) {
    $index = (int) $_GET['index'];
    if (isset($_SESSION['tasks'][$index])) {
        unset($_SESSION['tasks'][$index]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']);
    }
}
header("Location: todo.php");
exit;
