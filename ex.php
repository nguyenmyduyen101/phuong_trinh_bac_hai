<?php
$a=(int) readline("nhap a:");
$b=(int) readline("nhap b:");
$c=(int) readline("nhap c:");
function ptbac2($a,$b,$c){
    $delta = $b*$b - 4*$a*$c;
    if ($delta > 0) {
        echo "phuong trinh co 2 nghiem phan biet";
    } elseif ($delta == 0) {
        echo "phuong trinh co nghiem kep";
    } else {
        echo "phuong trinh vo nghiem";
    }
}
echo ptbac2($a,$b,$c);
?>
