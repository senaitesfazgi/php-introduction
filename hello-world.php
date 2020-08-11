Hello, World! <?php // This is a comment ?>
More text 
<?php
echo 'This is my standard Hell World test using "echo".';
$myString = 'My string has now changed!';

$mySingleQoute = 'This is single qoutes:\n'. $myString;
echo $mySingleQoute;

$myDoubleQouteString = "\n\nThis is a double qoute string:\n$myString";
echo $myDoubleQouteString;


$myArray = [1, 2, 3, 4, 'test', false, null]; // Array ( can be created using the [] or array().
$myArray1 = array(
    1, 2, 3, 4, 'test', false, null  
);
echo $myArray[0];
echo $myArray1[0];

$myObject  = new stdClass();
$myObject ->name = "Bob";
$myObject->age = "36";
$myObject ->hobbies = ["programming", "skydiving"];
echo "\nHello, my name is {$myObject->name} and my age is {$myObject->age} and I like doing some: ";

foreach ($myObject->hobbies as $hobby){
    echo "\n -  $hobby";
}