<?php


namespace App\Utils;


class ReadingTimeUtil
{
    static public function readingTime($post) {
        $word = str_word_count(strip_tags($post));
        return floor($word / 200);
    }
}
