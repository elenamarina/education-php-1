<!Doctype html>
        <html>
<meta charset="utf-8">
<title>Домашнее задание 1</title>
<h1> 2 Примеры из методички</h1>
    <?php
    echo "Hello, World!";
    ?>


    <?php
    $name="GeekBrains user";
    echo "Hello, $name!";
    ?>

    <?php
    $int10=42;
    $int2=0b101010;
    $int8=052;
    $int16=0x2A;
    echo "Десятиричная система $int10";
    echo "Двоичная система $int2";
    echo "Восьмеричная система $int8";
    echo "Шестнадцатеричная система $int16";
    ?>

    <?php
    $precise1=1.5;
    $precise2=1.5e4;
    $precise3=6E-8;
    echo "$precise1 | $precise2 | $precise3";
    ?>

    <?php
    $a=1;
    echo "a";
    echo 'a';
    ?>

    <?php
    $a='Hello';
    $b='world';
    $c=$a. $b;
    echo $c;
    ?>

<h1>3 работа с кодом</h1>
    <?php
    $a=5;
    $b=05;

    var_dump($a==Sb); //true, так как оператор сравнения по значению
    var_dump((int)'012345'); //Переменная типа integer представляет целое число, ноль туда не входит
    var_dump((float)123.0===(int)123.0); //false, так как сравнение не только по значению, но и по типу
    var_dump((int)0===(int)'hello,world'); // true, так как сравнение по типу
    ?>
        </html>

