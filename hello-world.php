Hello, World! <?php // This is a comment ?>
More text 
<?php
echo 'This is my standard Hell World test using "echo".';
$myString = 'My string has now changed!';

$mySingleQoute = 'This is single qoutes:\n'. $myString;
echo $mySingleQoute;

$myDoubleQouteString = "\n\nThis is a double qoute string:\n$myString";
echo $myDoubleQouteString;