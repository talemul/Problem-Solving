<?php
/**
 * @author Talemul Islam <talemulwi@gmail.com>
 */
/**
 * write a function to search a value in an array and return index or position of array element,
 * if not found return -1.
 * for example, you have given an array like $array=[1,2,3,5,9,11,14,19];
 * $search=11; find the position of 11 in the array.
 * use binary search only.
 */
function binaySearch($array, $value)
{
    // write your code from here
    $position = -1;
    //check the array is empty or not. If the array is empty then, return -1;
    if (count($array) == 0) {
        return $position;
    }
    $low = 0;// declare low as zero which is first index
    $high = count($array) - 1;//declare high which is last index
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);//declare middle and assign average of $low and $high
        if ($array[$mid] == $value) {
            $position = $mid;//found the searching value
            break;
        } elseif ($array[$mid] > $value) {
            $high = $mid - 1;//reassign high, may be the searching value is on left side from the middle.
        } else {
            $low = $mid + 1;////reassign low, may be the searching value is on right side from the middle.
        }
    }
    return $position;
}

$array = [1, 2, 3, 5, 9, 11, 14, 19];
$search = 11;
echo binaySearch($array, $search);
