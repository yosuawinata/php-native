<?php

// define variable
$title = "Mr.";
$name = "John Doe";

function yourName($title, $name) {
    return $title. " ".$name;
}

// sample of closure (because this lambda / function has a name)
function youCanDoIt($name) {
    echo "You can do it, $name!\n";
}

// call the function
youCanDoIt(yourName($title, $name));

function yesYouCanDoIt($fullname) {
    echo "Yes, you can do it, $fullname!\n";
}

//sample of anonymous closure (because this lambda / function doens't have a name)
$fullname = function() use ($title, $name) {
    return $title. " ".$name;
};

// call the anonymous function
yesYouCanDoIt($fullname());
