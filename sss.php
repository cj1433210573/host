<?php
nm(1,13);
function nm($n,$m){
    $z = range($n,$m);
    echo substr_count(join($z),'1');
}
