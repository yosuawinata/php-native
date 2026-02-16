<?php

// in this example, we try to implement abstract class from the Button.php file,
// but since the Button class is abstract, we cannot instantiate it directly.

// call the Button class
include 'Button.php';

$button = new Button(); // this will cause an error since we cannot instantiate an abstract class
$button->onClick(); // this will also cause an error since we cannot call a method on an abstract class
