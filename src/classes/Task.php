<?php
if(!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

class task
{
    private string $title;
    private bool $isDone;

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle( $title)
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

    public function isDone(bool $isDone, $title) {
        $this->getisDone($isDone);
        $this->getTitle($title);
    }

    public function toggle() {
        $this->isDone = !$this->isDone;
    }

    public function __toString() {

    }
}
