<?php

// Create an indexed array
$indexedArray = array("apple", "banana", "cherry");

// Display the indexed array
echo "Indexed Array: ";
print_r($indexedArray);
echo "<br>";

// Update array element at index 1
$indexedArray[1] = "orange";

// Display the updated indexed array
echo "Updated Array: ";
print_r($indexedArray);
echo "<br>";

// Add an element to the end of the array
$indexedArray[] = "grape";

// Display the array after adding an element
echo "Array after adding an element: ";
print_r($indexedArray);
echo "<br>";

// Remove an element from the array
unset($indexedArray[2]);

// Display the array after removing an element
echo "Array after removing an element: ";
print_r($indexedArray);
echo "<br>";

// Sorting the array
sort($indexedArray);

// Display the sorted array
echo "Sorted Array: ";
print_r($indexedArray);
echo "<br>";

// Creating a multidimensional array
$multiDimensionalArray = array(
    array("apple", "banana", "cherry"),
    array("orange", "grape", "mango"),
    array("pineapple", "strawberry", "kiwi")
);

// Display the multidimensional array
echo "Multidimensional Array: ";
print_r($multiDimensionalArray);
echo "<br>";

// Accessing elements of the multidimensional array
echo "Accessing element from the multidimensional array: " . $multiDimensionalArray[1][2];
echo "<br>";

// Array functions demonstration
$sampleArray = array(5, 3, 8, 2, 7);

// Find the length of the array
echo "Length of the array: " . count($sampleArray);
echo "<br>";

// Find the maximum value in the array
echo "Maximum value in the array: " . max($sampleArray);
echo "<br>";

// Find the minimum value in the array
echo "Minimum value in the array: " . min($sampleArray);
echo "<br>";

// Check if a value exists in the array
$searchValue = 8;
if (in_array($searchValue, $sampleArray)) {
    echo $searchValue . " exists in the array";
} else {
    echo $searchValue . " does not exist in the array";
}
echo "<br>";

// Merge arrays
$mergedArray = array_merge($indexedArray, $sampleArray);

// Display the merged array
echo "Merged Array: ";
print_r($mergedArray);
echo "<br>";

?>
