<!Doctype html>
    <html>
<meta charset="UTF-8">
<title>Марина Елена, домашняя работа 2</title>
<h1>Задание 1</h1>

<?php
$a=6;
$b=3;

if ($a>=0 and $b>=0) {
    echo $a-$b;
} elseif ($a<0 and $b<0) {
    echo $a*$b;
} else {
    echo $a+$b;
}
?>


<h1>Задание 3</h1>

<?php
function sum($x,$y){
    return ($x+$y);
}
$sum=sum(5,2);
    echo $sum;

function multiplication($x,$y){
    return ($x*$y);
}
$mult=multiplication(2,4);
    echo $mult;

function subtraction($x,$y){
    return ($x - $y);
}
$subt=subtraction(6,3);
    echo $subt;

function division($x,$y){
    return ($x/$y);
}
$div=division(8,4);
    echo $div;

?>

<h1>Задание 4</h1>
<?php
function matchOperation($arg1,$arg2,$operation)
{
    switch ($operation) {
        case 'summa';
            return sum($arg1, $arg2);
        case 'multiplication';
            return multiplication($arg1, $arg2);
        case 'subtraction';
            return subtraction($arg1, $arg2);
        case 'division';
            return division($arg1, $arg2);
        default:
            return false;
    }
}

?>
<h1>Задание 6</h1> //рекурсия возведение числа в степень
<?php
function power($val,$pow){
    if ($pow==1){
        return $val;
    }
    $pow--;
    return $val*$pow($val,$pow);
}
echo power(2,5);
?>

<h1>Задание 7</h1>
<?php
function currentTime ($value, $suff1, $suff2, $suff3){
    $string = '';
    if ($value>20) {
        $value %= 10;
    }if($value>1 and $value<5){
        $string = $suff1;
    }elseif ($value == 1 and $value>20){
        $string = $suff2;
    }else{
        $string = $suff3;
    }
    return $string;
}
$time = time();
$hour = date('H',$time);
$minute = date('i',$time);
$val = 15;
echo $val, " ", currentTime($val, "часа", "час", "часов") . "<br>";
echo $val, " ", currentTime($val, "минуты", "минута", "минут") . "<br>";
?>

</html>