<?php

namespace Config;

class TextAnalyzer
{
    private $text;

    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        if(is_string($text)) {
            $this->text = preg_replace('/\s+/', ' ',
                str_replace(array("\r\n", "\r", "\n", "\t"), ' ', $text));
            return true;
        }
        return false;
    }

    public function topFive()
    {
        $arr = array_count_values(explode(' ', $this->text));
        ksort($arr);
        arsort($arr);
        $arr = array_slice($arr, 0, 5);
        return $arr;
    }

    function echoTopFive($array, $glue = '<br>', $symbol = ' - ') {
        return implode($glue, array_map(
                function($k, $v) use($symbol) {
                    return $k . $symbol . $v;
                },
                array_keys($array),
                array_values($array)
            )
        );
    }

    public function countWords()
    {
        return count(explode(' ', $this->text));
    }

    public function countLetters()
    {
        return strlen($this->text);
    }

    public function countLettersWithoutSpaces()
    {
        return strlen(str_replace(' ','', $this->text));
    }
}
