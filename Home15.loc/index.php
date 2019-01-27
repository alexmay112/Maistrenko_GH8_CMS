<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertion sort</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<?php
$unSortList = [3, 15, 59, 2, 23, 45, 7, 18, 2, 10, 33, 17];
function sortArr($unSortList)
{
    $sort = [];
    $sort[0] = $unSortList[0];
    foreach ($unSortList as $key => $item) {
//        array_unshift($sort, $unSortList[$key]);
        for ($i = 0; $i <= count($sort); $i++){
            if (count($sort) > 1 && $sort[$key] > $sort[$key + 1]) {
                $tempVal = $sort[$key];
                $sort[$key] = $sort[$key + 1];
                $sort[$key + 1] = $tempVal;
            }
        }
    }
    return $sort;
}

$res = sortArr($unSortList);
print_r($res);

//function sortArr($unSortList)
//{
//    $sort = [];
//    $i = 0;
//    for ($i = 0; $i < count($unSortList); $i++) {
//    array_unshift($sort, $unSortList[$i]);
//    if (count($sort) > 1) {
//
//    }
//        for ($j = 0; $j < count($sort); $j++) {
//            if ($unSortList[$i] > $sort[$j]) {
//                $oneHalf = array_splice($sort, $j);
//                $oneHalf[] = $unSortList[$i];
//                $twoHalf = array_slice($sort, $j);
//                $sort = array_merge($oneHalf, $twoHalf);
//            }
//        }
//    }
//    print_r($unSortList);
//    print_r($sort);
//}
//

?>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
