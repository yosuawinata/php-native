<?php

// fetch the printer class (manual)
include 'Printer.php';

// define the variable
$printer = new Printer();
$message = $printer->printMessage("Hi there, this message is fetched from the Printer class!");

// fetch the dispatcher class (manual)
include 'Dispatcher.php';
$dispatcher = new Dispatcher();
$dispatcher->dispatch($message, "John Doe");
