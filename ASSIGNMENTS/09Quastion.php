<?php


// 1) Declaring Arrays of All Types in PHP
PHP allows you to declare arrays without specifying the type of elements, meaning arrays can contain elements of any data type (strings, integers, floats, booleans, objects, or even other arrays). Here are a few examples:


--> Indexed Array:
An indexed array is a collection of elements where each element is identified by a numeric index starting from 0.

// Indexed array declaration
$colors = array('Red', 'Green', 'Blue');


-->Associative Array:
An associative array uses named keys that you assign to them.

// Associative array declaration
$person = array(
    'name' => 'John Doe',
    'age' => 30,
    'city' => 'New York'
);


--> Multidimensional Array:
A multidimensional array contains one or more arrays nested inside it.

// Multidimensional array declaration
$employees = array(
    array('name' => 'Alice', 'age' => 25),
    array('name' => 'Bob', 'age' => 28),
    array('name' => 'Charlie', 'age' => 32)
);


--> Mixed Type Array:
Arrays in PHP can also contain elements of different types.

// Mixed type array declaration
$mixedArray = array('Apple', 123, 3.14, true);



// 2) Convert a JSON String to Array in PHP
PHP provides built-in functions to easily convert JSON strings to arrays and vice versa.

Example: Convert JSON String to Array

Assume you have a JSON string like this:
$jsonString = '{"name": "John", "age": 30, "city": "New York"}';

You can convert this JSON string into a PHP associative array using the json_decode function:

// JSON string
$jsonString = '{"name": "John", "age": 30, "city": "New York"}';

// Convert JSON string to PHP array
$arrayFromJson = json_decode($jsonString, true);

// Output the array
print_r($arrayFromJson);

Explanation:
json_decode Function: This function in PHP is used to decode a JSON string into a PHP variable. The second parameter true is used to specify that the result should be an associative array (true) or an object (false, default).
Output: After decoding the JSON string using json_decode, $arrayFromJson will contain the associative array representation of the JSON data.

Output:
Array
(
    [name] => John
    [age] => 30
    [city] => New York
)


Summary:
PHP arrays can hold elements of any data type and can be indexed, associative, multidimensional, or contain mixed types.
json_decode is used to convert a JSON string into a PHP array (true as the second parameter ensures associative array).
json_encode can be used to convert PHP arrays back into JSON strings.
These features make PHP versatile for handling various data structures and formats, including JSON data interchange.

?>