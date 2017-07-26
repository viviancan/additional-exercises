
<?php

//Can you find the needle in the haystack?
// Write a function findNeedle() that takes an array full of junk but containing one "needle"

// After your function finds the needle it should return a message (as a string) that says: "found the needle at position " plus the index it found the needle

$testArray = ['3', '123124234', null, 'needle', 'world', 'hay'];


function findNeedle($haystack)
{

$location = array_search("needle", $haystack);

return "found the needle at position " . $location;

}


findNeedle($testArray);























