<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertion sort</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<?php

//function sortArr($unSortList)
//{
//    $sort = [];
//    $sort[0] = $unSortList[0];
//    foreach ($unSortList as $key => $item) {
////        array_unshift($sort, $unSortList[$key]);
//        for ($i = 0; $i <= count($sort); $i++){
//            if (count($sort) > 1 && $sort[$key] > $sort[$key + 1]) {
//                $tempVal = $sort[$key];
//                $sort[$key] = $sort[$key + 1];
//                $sort[$key + 1] = $tempVal;
//            }
//        }
//    }
//    return $sort;
//}
//
//$res = sortArr($unSortList);
//print_r($res);
$unSortList = [3, 15, 59, 2, 23];
function sortArr($unSortList)
{
    $sort[0] = $unSortList[0];
    for ($i = 0; $i < count($unSortList); $i++) {
        for ($j = 0; $j < count($sort); $j++) {
            if (!isset($sort[$j + 1]) && $unSortList[$i] > $sort[$j]) {
                array_push($sort, $unSortList[$i]);
            } else {
                array_unshift($sort, $unSortList[$i]);
            }
            if ($unSortList[$i] > $sort[$j] && $unSortList[$i] < $sort[$j + 1]) {
                array_splice($sort, $j, 0, $unSortList[$i]);
            }
        }
    }
    print_r($unSortList);
    print_r($sort);
}

sortArr($unSortList);
?>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
