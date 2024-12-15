<?php

$translit = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z',
    'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r',
    'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
    'ы' => 'y', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];

function transliterate_and_replace_spaces($string) {
    global $translit;
    $string = mb_strtolower($string);
    $string = strtr($string, $translit);
    $string = str_replace(' ', '_', $string);
    return $string;
}

echo transliterate_and_replace_spaces("Пример текста для транслитерации");

?>
