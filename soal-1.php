<?php
    function revange($s){
        return $s == strrev($s);
    }

    echo revange("racecar")? 'true' : 'false';
    echo "\n";
    echo revange("hello")? 'true' : 'false';
?>