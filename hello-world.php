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

for ($iterator = 0; $iterator < 2; $iterator ++)
{
    echo "\n -  {$myObject->hobbies[$iterator]}";            
}

$myArrayLength = count($myArray);
echo "\n\n The varibale 
myArray contains {$myArrayLength} items";

//While loop example
?>While loop: <?php
$myI = 10;

while ($myI >= -35){
    echo "\n While loop current vlaue  = $myI";
    $myI -= 5;//Same as typing ...
              //$myI = $myI - 5;
}

echo "\n\n Arrays again....\n\n";
echo 'The first item in $mySecondArray is '. $myArray[0];
echo "\n\nInstead of indexed arrays, we can also use associative arrays.\n That is to 
say: arrays with key-value pairs!\n\n";
$myAssociativeArray = array(
    'name' => 'bob',
    'age' => 41,
    'Hobbies' => ["swimming", 'golf']//Indexed arrays have index nubers and values.
);
echo "{$myAssociativeArray['name']} is {$myAssociativeArray['age']}.";
echo "\nHis second hobby is: {$myAssociativeArray['Hobbies'][1]}";

// foreach in associative array
foreach ($myAssociativeArray as $myKey => $myValue){
    if (!is_array($myValue)){
        echo "\n\nThe Associate value in {$myKey} is {$myValue} and his hobbies are";
    }
    else{
        foreach($myValue as $hobbies){
            echo "\n {$hobbies}";
        }
    }

}

