<?php

// define class
class Dispatcher {
    public function dispatch($message, $recipient) {
        echo "Class ". __CLASS__ . " : ";
        echo "Dispatch the message:  $message to $recipient\n";
    }
}


