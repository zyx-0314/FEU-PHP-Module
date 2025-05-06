<?php
// XXX Variable
$price = 350;
$dicount = 10;

// XXX Display out
echo "hi <br>";
echo $price;

// XXX Math Equations
echo "<br>";
echo $price - $price / (100 / $dicount);

// XXX Conditional
echo "<br>";
$old = true;
$citizen = false;

if ($old && $citizen) {
    echo "Certified";
} else {
    echo "Not Certified";
}

// XXX Ternary
echo "<br>";
echo (($old && $citizen) ? "" : "Not ") . "Certified";

// XXX Looping
$ten = 10;
for ($i = 0; $i < $ten; $i++) {
    echo "Hi ka " . $i . "<br>";
}

// XXX Array / Loop of For Each
echo "<br>";
$arrayTo = ["a", "b", "c"];

foreach ($arrayTo as $key => $value) {
    echo "Key: " . $key . " - Value: " . $value . "<br>";
}

// XXX Data Structure
echo "<br>";
$objectDaw = (object) [
    "name" => "Iana",
    "age" => "25",
];

foreach ($objectDaw as $key => $value) {
    echo "Key:" . $key . " Value: " . $value . "<br>";
}

echo "<h1>" . $objectDaw->name . "</h1>";
?>

<a href="./week1/pages/applyToHtml/index.php">Click mo to para lumipat sa next demo</a>