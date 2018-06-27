<?php
/**
 * Created by PhpStorm.
 * User: icalvay
 */

class CompleteRange {
    function build($number)
    {

        $end = array();
        asort($number);
        $nume_inic = $number[0];
        $nume_end = $number[count($number) - 1];
        for($i = $nume_inic ; $i <= $nume_end ; $i++){
            array_push($end, $i);
        }
        return $end;
    }
}


$completeRange = new CompleteRange();

$numbers = [1, 2, 4, 5];
print_r($numbers);
echo "<br>";
print_r ($completeRange->build($numbers));
echo "<br>";
echo "<br>";
echo "<br>";
$numbers = [2, 4, 9];
print_r($numbers);
echo "<br>";
print_r ($completeRange->build($numbers));
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$numbers = [55, 58, 60];
print_r($numbers);
echo "<br>";
print_r ($completeRange->build($numbers));