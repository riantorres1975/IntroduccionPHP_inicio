<?php include 'includes/header.php';
# isset() and empty()
// isset() checks if a variable is set
// empty() checks if a variable is empty
// Both return a boolean value
// isset() returns true if the variable is set and is not NULL
// empty() returns true if the variable is empty
// An empty variable is one that does not have a value
// An empty variable is one that has a value of NULL, 0, 0.0, '', false, array()
// isset() returns false if the variable is set and is NULL

// Create an array
$person = [
    'name' => 'Juan',
    'surname' => 'Perez',
    'country' => 'Mexico',
    'profession' => 'Developer'
];

//empty()
echo empty($person) ? 'The array is empty' : 'The array is not empty';
echo "<br>";

//isset()
echo isset($person) ? 'The array is set' : 'The array is not set';



include 'includes/footer.php';