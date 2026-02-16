<?php

// sample of lambda / function (because this lambda / function has a name)
function yourName() {
    return "John Doe";
}

function youCanDoIt($name) {
    echo "You can do it, $name!\n";
}

// call the lambda / function
youCanDoIt(yourName());


// sample of anonymous lambda / function (because this lambda / function doens't have a name)
$fullname = function() {
    return "John Doe";
};

function yesYouCanDoIt($fullname) {
    echo "Yes, you can do it, $fullname!\n";
}

yesYouCanDoIt($fullname());
