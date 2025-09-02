<?php
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

class Task
{
    private string $title;
    private bool $isDone;

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getIsDone()
    {
        return $this->isDone;
    }
    public function setIsDone(bool $isDone)
    {
        $this->isDone = $isDone;
    }

    public function __construct(string $title, bool $isDone = false)
    {
        $this->setTitle($title);
        $this->setIsDone($isDone);
    }

    public function isDone()
    {
        return $this->isDone;
    }

    public function toggle(): void
    {
        $this->isDone = !$this->isDone;
    }

    public function __toString() {}
}
