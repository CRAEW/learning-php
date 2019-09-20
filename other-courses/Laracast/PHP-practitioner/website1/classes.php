<?php

// Think about what you want to build and spot the nouns
// Find important components of application
// Class is single form of these components
// Create classes for these nouns
// ex.Todo, Comment, User

class Tasks {

    public $description;
    public $completed = false;

    // Constructor function place to declare what the class depends on
    public function __construct($description)
    {
        // automatically triggered on instantiation
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }


    public function isComplete()
    {
        return $this->completed;
    }

}