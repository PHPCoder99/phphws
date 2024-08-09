<?php
$letters = array(
    "а" => "a",
    "б" => "b",
    "в" => "v",
    "г" => "g",
    "д" => "d",
    "е" => "ye",
    "ё" => "yo",
    "ж" => "zh",
    "з" => "z",
    "и" => "i",
    "й" => "y",
    "к" => "k",
    "л" => "l",
    "м" => "m",
    "н" => "n",
    "о" => "o",
    "п" => "p",
    "р" => "r",
    "с" => "s",
    "т" => "t",
    "у" => "u",
    "ф" => "f",
    "х" => "h",
    "ц" => "ts",
    "ч" => "ch",
    "ш" => "sh",
    "щ" => "sh",
    "ь" => "'",
    "ы" => "ue",
    "ъ" => "'",
    "э" => "e",
    "ю" => "yu",
    "я" => "ya"
);

function transliterate($russian){
    global $letters;
    $english = "";
    $russianArr = mb_str_split($russian);
    foreach ($russianArr as $letter) {
        $english .= isset($letters[$letter]) ? $letters[$letter] : $letter;
    }
    return $english;
}

var_dump(transliterate("привет!"));
