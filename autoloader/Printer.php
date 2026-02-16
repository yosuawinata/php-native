<?php

// define class

class Printer {
    public function printMessage($message) {
        echo "Class ". __CLASS__ . " : ";
        echo "Print the message:  $message\n";
        return "Message $message\n";
    }
}
