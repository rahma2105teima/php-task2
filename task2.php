<?php

// task1
echo "<h1>Task1 :</h1>";
$text = "Learning php is interesting \n i like php";
echo "<div style='white-space: pre;'>$text</div>";

//task2
echo "<h1>Task2 :</h1>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "<h1>Task3 :</h1>";
//task3-strpos()
$text = "I am learning PHP!";
$position = strpos($text, "PHP");

if ($position !== false) {
    echo "The word 'PHP' is found at position: $position";
} else {
    echo "The word 'PHP' is not found.";
}

//task3-explode()

$text = "apple,banana,cherry";
$words = explode(", ", $text);

echo "<pre>";
print_r($words);    

//task3-array_merge()

$array1 = ["red", "blue"];
$array2 = ["green", "yellow"];
$result = array_merge($array1, $array2);

echo "<pre>";
print_r($result);
echo "</pre>";

//task4
echo "<h1>Task4 :</h1>";
$array = [
    1 => 45,
    0 => 12,
    3 => 25,
    2 => 10,
];

$sum = array_sum($array);


$average = $sum / count($array);

arsort($array); 


echo "Original Array: ";
print_r($array);
echo "\nSum: $sum";
echo "\nAverage: $average";


echo "\nSorted Array (Highest to Lowest): ";
print_r($array);

//task5
echo "<h1>Task5 :</h1>";
$mycats = [
    "Loli" => 31,
    "Melo" => 41,
    "Sokar" => 39,
    "Oreo" => 40
];


asort($mycats); 
echo "Ascending Order by Value:\n";
print_r($mycats);


ksort($mycats); 
echo "\nAscending Order by Key:\n";
print_r($mycats);


arsort($mycats); 
echo "\nDescending Order by Value:\n";
print_r($mycats);


krsort($mycats); 
echo "\nDescending Order by Key:\n";
print_r($mycats);
?>
