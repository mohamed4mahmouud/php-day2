<?php 
$str = "hello \n world";
echo nl2br($str);
echo"<br>";
#print_r(array_keys($_SERVER));
foreach($_SERVER as $key=>$value){
    echo "$key : $value <br>";
};

$arr = array(12,45,10,25);
$sum = array_sum($arr);
$avg = $sum / count($arr);
echo "sum of array = $sum <br>";
echo "avg of array = $avg <br>";
rsort($arr);



$myArr = array("Sara"=>31, "john"=>41, "Walaa"=>39, "Ramy"=>40);

 asort($myArr); //sort by value ascending
// foreach($myArr as $key=>$value){
//     echo"$value <br>";
// }

 ksort($myArr); //sort by key ascending
// foreach($myArr as $key=>$value){
//     echo"$key <br>";
// }


 arsort($myArr); //sort descending by value
//  foreach($myArr as $key=>$value){
//     echo"$value <br>";
// }


 krsort($myArr); //sort descending by value

?>