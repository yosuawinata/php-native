<?php

// call the button class
include 'Button.php';

// create an heritance of the abstract Button class
class MyButton extends Button {
    public function onClick() {
        echo "Button clicked!\n";
    }
}

// call method
$button = new MyButton();
$button->onClick();
