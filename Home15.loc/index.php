<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertion sort</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<?php


//function sortArr ($arr) {
//    for($i=0; $i<count($arr); $i++){
//        for($j=$i+1; $j<count($arr); $j++){
//            if($arr[$i]>$arr[$j]){
//                $temp = $arr[$j];
//                $arr[$j] = $arr[$i];
//                $arr[$i] = $temp;
//            }
//        }
//    }
//    print_r($arr);
//}
//sortArr($arr);

$arr = [15, 3, 59, 2, 23];
function sortArr($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }
    print_r($arr);
}

sortArr($arr);


?>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
