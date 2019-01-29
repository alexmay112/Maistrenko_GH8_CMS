<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertion sort</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<?php

$arr = [3, 15, 59, 2, 23];

function sortArr ($arr) {
    for($i=0; $i<count($arr); $i++){
        for($j=$i+1; $j<count($arr); $j++){
            if($arr[$i]>$arr[$j]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }
    print_r($arr);
}

sortArr($arr)










//function sortArr($unSortList)
//{
//    $sort[0] = $unSortList[0];
//    for ($i = 1; $i < count($unSortList); $i++) {
//        for ($j = 1; $unSortList[$i] > $sort[$j] && $unSortList[$i] < $sort[$j + 1]; $j++) {
//
//
//            if (!isset($sort[$j + 1]) && $unSortList[$i] > $sort[$j]) {
//                $sort[] = $unSortList[$i];
//            } elseif (!isset($sort[$j + 1]) && $unSortList[$i] < $sort[$j]) {
//                array_unshift($sort, $unSortList[$i]);
//            } elseif ($unSortList[$i] > $sort[$j] && $unSortList[$i] < $sort[$j + 1]) {
//                array_splice($sort, $j, 0, $unSortList[$i]);
//            } else {
//                array_splice($sort, $j - 1, 0, $unSortList[$i]);
//            }
//        }
//    }
//    print_r($unSortList);
//    print_r($sort);
//}
//
//sortArr($unSortList);

?>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
