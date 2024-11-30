<?php 
$text = "my name is md rajib hossain";
echo ucwords($text);
echo"<br>";

$sentence = 'there is a new student in the class';
echo ucfirst($sentence);
echo'<br>';

echo strtolower($sentence);
echo '<br>';
echo strtoupper($sentence);

echo '<br>';

$multiline = 'i am a student of isdb.i am exploring php.i want to be a php developer';
$lines = explode('.', $multiline);
foreach ($lines as $line) {
    $line = ucfirst($line);
   

};

?>