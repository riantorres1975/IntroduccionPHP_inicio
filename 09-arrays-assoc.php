<?php include 'includes/header.php';
// Create an array
$person = [
    'name' => 'Juan',
    'surname' => 'Perez',
    'country' => 'Mexico',
    'profession' => 'Developer'
];

// Print the array
echo "<pre>";
var_dump($person);
echo "</pre>";

// Print the array length
echo count($person);
echo "<br>";

// Print a specific element
echo $person['name'];
echo "<br>";

// Add an element to the array
$person['phone'] = '1234567890';
echo "<pre>";
var_dump($person);

// Delete an element from the array
unset($person['name']);
echo "<pre>";
var_dump($person);

// Check if an element exists in the array
echo array_key_exists('phone', $person) ? 'The key exists' : 'The key does not exist';
echo "<br>";

// Check if an element exists in the array
echo isset($person['phone']) ? 'The key exists' : 'The key does not exist';
echo "<br>";

// Print the keys of the array
echo "<pre>";
var_dump(array_keys($person));
echo "</pre>";

// Print the values of the array
echo "<pre>";
var_dump(array_values($person));
echo "</pre>";

// Sort the array by values
asort($person);
echo "<pre>";
var_dump($person);
echo "</pre>";

// Sort the array by keys
ksort($person);
echo "<pre>";
var_dump($person);
echo "</pre>";

// Two-dimensional array
$clients = [
    [
        'name' => 'Juan',
        'balance' => 200
    ],
    [
        'name' => 'Pedro',
        'balance' => 100
    ]
];

echo "<pre>";
var_dump($clients);
echo "</pre>";

// Print a specific element
echo $clients[1]['name'];
echo "<br>";

// Add an element to the array
$clients[2] = [
    'name' => 'Karen',
    'balance' => 300
];
echo "<pre>";
var_dump($clients);
echo "</pre>";

// Delete an element from the array
unset($clients[1]);
echo "<pre>";
var_dump($clients);
echo "</pre>";




include 'includes/footer.php';