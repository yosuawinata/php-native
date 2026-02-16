<?php

// define variable
$minPoint = 80;
$dataPoints = [
    ["name" => "John Doe", "point" => 90],
    ["name" => "Jane Smith", "point" => 75],
    ["name" => "Bob Johnson", "point" => 85],
    ["name" => "Alice Williams", "point" => 95],
    ["name" => "Charlie Brown", "point" => 70],
];

array_walk($dataPoints, function(&$data) use ($minPoint) {
    echo "Name : ". $data["name"] . "\n";
    echo "Point : ". $data["point"] . "\n";
    echo "Status : ". ($data["point"] >= $minPoint ? "Passed" : "Failed") . "\n";
});
