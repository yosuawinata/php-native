<?php

// call the button class
include 'Button.php';

// create an heritance of the abstract Button class
class MyButton extends Button {
    public function onClick() {
        echo "Button clicked!\n";
        sleep(5);
        echo "Button action completed!\n";
    }
}

// usage of abstract class usually for dependency injection,
// where we can inject the MyButton class into another class that depends on the Button class,
// without needing to know the specific implementation of the MyButton class.
// This allows for more flexibility and modularity in our code,
// as we can easily swap out different implementations of the Button class,
// without affecting the rest of our codebase.

// call method
$button = new MyButton();
$button->onClick();
