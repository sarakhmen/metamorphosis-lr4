<!DOCTYPE html>
<html>
<head>
    <title>Lab4 -> php syntax basics</title>
</head>
<body>

<h1>Case insensitivity:</h1>
<?php


echo "<p>My first PHP script!</p>";
echo "<p>My first PHP script!</p>";
if (true) {
    echo "<p>using IF statement</p>";
}
if (true) {
    echo "<p>using if statement</p>";
}
?>

<h1>Case insensitivity of variables:</h1>
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

<h1>Comments:</h1>
<?php
// This is a single-line comment
# This is also a single-line comment

/*
This is a multiple-lines comment block
*/
?>

<h1>Variables output:</h1>
<?php
$lab = "this lab";
echo "I love $lab!";
?>

<h1>Echo and print usage:</h1>
<?php
echo "<h2>using echo without parenthesis</h2>";
echo("<h2>using echo with parenthesis</h2>");
print "<h2>using print with parenthesis</h2>";
print ("<h2>using print with parenthesis</h2>");
?>

<h1>String function usage:</h1>
<?php
echo "testword length=" . strlen("testword") . "<br>";
echo "count of words:" . str_word_count("Hello world!") . "<br>";
echo "string reversion:". strrev("Hello world!")."<br>";
echo "string replace:".str_replace("a","b", "blade");
?>

<h1>Loops usage:</h1>
<?php
$x = 1;
while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

?>

<h1>Function usage:</h1>
<?php
function writeSomething() {
    echo "something";
}

writeSomething();
?>

<h1>Arrays usage:</h1>
<?php
$cars = array("ВАЗ", "Skoda", "Mazda");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$age = array("Bohdan"=>"19", "Artur"=>"20", "Kirill"=>"18");
echo "Artur is " . $age['Artur'] . " years old.";
?>

<h1>Simple form usage:</h1>
<form action="#" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>
<p1>Welcome <?php echo $_GET["name"]; ?><br></p1>
<p1>Your email address is: <?php echo $_GET["email"]; ?><br></p1>

<h1>Classes usage:</h1>

<?php
require_once "Singleton.php";
require_once "Surgeon.php";
use app\hospital\Surgeon;
use app\singleton\Singleton;
$surgeon = new Surgeon("senior");
$surgeon->treat();
echo "<br>";
$singletonExample = Singleton::getInstance();
$singletonExample->someLogic();


echo "<br>";
?>

</body>
</html>