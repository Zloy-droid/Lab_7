<?php

$regions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Скопин', 'Касимов', 'Михайлов'],
    'Тверская область' => ['Тверь', 'Ржев', 'Кимры', 'Бежецк'],
    'Воронежская область' => ['Воронеж', 'Россошь', 'Борисоглебск', 'Острогожск']
];

foreach ($regions as $region => $cities) {
    echo $region . ': ' . implode(', ', $cities) . '<br>';
}

?>
