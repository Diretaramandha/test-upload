<?php 

    function fibonnaci($n){
        $before = [];
        $a = 0;
        $b = 1;

        for ($i=1; $i <= $n; $i++) { 
            $before[] = $a;
            $after = $a + $b;
            $a = $b;
            $b = $after;
        }

        return $before;
    }

    $hasil = fibonnaci(5);

    echo  implode(",", $hasil);
?>