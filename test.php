<?php


// BEGIN (write your solution here)
function sumDouble($first, $last)
{
	$result = 0;
    for ($i = $first; $i <= $last; $i += 2){
    	$result = $i ** 2;
        
    }
    echo $result;
}
sumDouble(3, 9);
// END
