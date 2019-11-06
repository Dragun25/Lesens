<?php

    require_once("utils.php");

    /**
     * Function receives an array with integer numbers,
     * should return its sum. It is not alowed to use built-in php functions.
     *
     * Функция получает на вход массив чисел, должна вернуть сумму этих чисел.
     * Не использовать встроенные функции суммирования php.
     *
     * @param array $arr
     * @return integer
     */

    function my_sum($arr) {
        $summ = (int)'';
        foreach ($arr as $value) {
            $summ +=$value;
        }
        return $summ;
        //...wite your code here
    }


    /**
     * Function receives a long string with many words.
     * It should return the same string, but words,
     * larger then 6 symbols, should be changed, symbols
     * after the sixth one should be replaced by symbol *
     *
     * Функция получает на вход длинную строку с множеством слов.
     * Она должна вернуть ту же строку, но в словах, которые длиннее 6 символов,
     * функция должна вместо всех символов после шестого поставить одну звездочку.
     * Пример: Из слова 'verwijdering' должно получиться 'verwij*'
     *
     * @param string $shortMe
     * @return string
     */
    function shortener($shortMe) {
        //...wite your code here
        $arr_mas = explode(' ', $shortMe);
        foreach ($arr_mas as $key => $test){
            if ((int)iconv_strlen($test) > 6){
                $a = substr($test, 0, 6) . '*';
                $test = $a;
            }
            $exit[] = $test;
        }
        $kkk = implode(' ', $exit);

       return $kkk;
    }

    /**
     * Function receives an array of strings.
     * Please return number of strings, which
     * length is at least 2 symbols and first character
     * is equal to the last character
     *
     * Функция получает на вход массив строк. Вернуть надо количество строк,
     * которые не короче двух символов и у которых первый и последний
     * символ совпадают.
     *
     * @param array $arr
     * @return number
     */
    function compare_ends($arr) {
        //...wite your code here
        $str_sum = 0;
        foreach ($arr as $perebor){
            if (iconv_strlen($perebor) >=2 && $perebor{0} == $perebor{(iconv_strlen($perebor)-1)}){
                $str_sum +=1;
            }
        }
        return $str_sum;
    }



    /**
     * Function receives a string, should return this string reversed.
     *
     * Функция получает на вход строку, должна вернуть ее перевернутой.
     *
     * @param string $str
     * @return string
     */
    function reverse_string($str) {
        //...write your code here
        $miror = strrev($str);
//        $shot = (int)iconv_strlen($str);
//        $miror = '';
//        $mas_shot = explode( '//', $str);
//        for ($i = $shot; $i > 0; $i--){
//            $miror .= $mas_shot[($i-1)];
//        }
        return $miror;
    }

test_shortener();

test_compare_ends();

test_my_sum();

test_reverse_string();










