<?php

$translit = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z',
    'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r',
    'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
    'ы' => 'y', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];

function transliterate($string) {
    global $translit;
    $string = mb_strtolower($string);
    return strtr($string, $translit);
}

echo transliterate("Пример текста для транслитерации");

?>
