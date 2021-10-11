<?php


$main_array = ['vasya', 'pupkin', 'apple', 23, 41, 55, 1, 2, false];

//
foreach ($main_array as $item) {
    if (is_bool($item) && $item === true) {
        throw new Exception('$main_array has boolean value true');
    }
}

//Убедиться что во входящих параметрах есть булевского значение true (если оно
//было введено)
$has_true = false;
foreach ($argv as $item) {
    if (is_bool(boolval($item)) && boolval($item) === true) {
        $has_true = true;
        break;
    }
}

if (!$has_true) {
    throw new Exception('not true value in input data');
}

//Объединить массив и входящие параметры
$merget_array = array_merge($main_array, $argv);

//Определить каких данных нету в $main_array но они есть во входящих
//параметрах

$array_diff = array_diff($main_array, $argv);

//Определить какие данные есть в $main_array и во входящих параметрах

$array_intersept = array_uintersect($main_array, $argv, 'strcasecmp');


//Все строковые значения в $main_array перевести в верхний регистр символов

foreach ($main_array as $key => $value) {
    if (is_string($value)) {
        $main_array[$key] = strtoupper($value);
    }
}



//Получить массив чисел из входящих параметров если были введены цифры
$digitals_input_array = array_filter(
        $argv,
        function ($k) {
            return is_numeric($k);
        }
);



//Отсортировать $main_array таким образом чтобы цифры стали первыми
//элементами массива

usort($main_array,function ($a,$b){
    if(is_numeric($b)){
        return 1;
    }else{
        return 0;
    }
});

print_r($main_array);
