<?php
$s = 60;
$cost_cars = [15, 6, 3, 8, 19, 17, 8];
$number_cars = count($cost_cars);
$result = $s;


// while($result > 0){

for($i = 0; $i < $number_cars; $i++){
    echo "cost_cars[$i] = ", $cost_cars[$i], "\n";

    if($result > $cost_cars[$i]){
        $result -= $cost_cars[$i];


        echo $result,"\n";
        echo $i, "= i", "\n";
    }
}
