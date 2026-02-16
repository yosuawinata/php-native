<?php

// with spl_autoload_register, we can register multiple autoload functions,
// and they will be called in the order they were registered until the class is found and loaded.
// This allows for a more flexible and modular approach to autoloading classes,
// as you can have different autoload functions for different namespaces or directories.

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// fetch the printer class (manual)
// since the spl_autoload_register is called, this manual calling (include) can be off first.
// include 'Printer.php';

// define the variable
$printer = new Printer();
$message = $printer->printMessage("Hi there, this message is fetched from the Printer class!");

// fetch the dispatcher class (manual)
// since the spl_autoload_register is called, this manual calling (include) can be off first.
// include 'Dispatcher.php';
$dispatcher = new Dispatcher();
$dispatcher->dispatch($message, "John Doe");
