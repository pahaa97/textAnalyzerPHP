<?php

require_once 'config/TextAnalyzer.php';
use Config\TextAnalyzer;

$analyzer = new TextAnalyzer;
$analyzer->setText("основний      елемент ферма гау є пояс верхній і ніжній майже завжди він паралельний проте для великий прогон є приклад полігональний у цей випадок конструкція
ферма значно ускладнюватися і вона втратити одна зі свій перевага простота
виготовлення і монтаж крім той полігональний ферма неможливо");

echo "Text: " . $analyzer->getText() . "<br><br>";
echo "Top Five: <br>" . $analyzer->echoTopFive($analyzer->topFive()) . "<br><br>";
echo "Count words: " . $analyzer->countWords() . "<br>";
echo "Count letters: " . $analyzer->countLetters() . "<br>";
echo "Count letters without spaces: " . $analyzer->countLettersWithoutSpaces() . "<br>";


