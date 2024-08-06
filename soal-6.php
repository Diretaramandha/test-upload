<?php
function UrutkanNumber($arr) {
    $n = count($arr);
    
    for ($i = 0; $i < $n; $i++) {

        for ($j = 0; $j < $n - $i - 1; $j++) {

            if ($arr[$j] > $arr[$j + 1]) {

                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    
    return $arr;
}

$numbers = array(64, 34, 25, 12, 22, 11, 90);

$sorted_numbers = UrutkanNumber($numbers);
echo "Array setelah diurutkan:\n";
print_r($sorted_numbers);
?>
