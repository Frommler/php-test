<?php
$array = array('12', 3.15, "string", true); //massive
echo $array[1]; //show 2nd el of massive
$array[1] = "string"; //change type of element
$array[2] = 5; //change type of element

for ($i = 0; $i < count($array); $i++) {// $i do count elements of massive 
  echo "element of massive with index $i = ".$array[$i]."<br />";
}


$list = array ("age" => 12, "name" => "Alex", "schoolBoy" => true); //associative massive
$list ["age"] = 10;
$summA = 0;

echo getAverage (array ("first" => 12, "sec" => 45, "third" => 23, "forth" => 55));

function getAverage ($array) { 
  foreach ($array as $kay => $value) {//$kay of elements of massive
    $summA += $value;
  }
  return $summA / count ($array);
}

$array1 = array (array(12, 5.5, "str", true),array("str1", "str2"),array(25, 44, 71)); //Multi massive
  echo $array1 [0][0] // show  1st element of 1st massive


  //forms

  