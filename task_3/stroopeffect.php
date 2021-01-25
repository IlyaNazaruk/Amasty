<?php
//Реализовать Тест Струпа
//- на экран вывести сообщение 5 строк по 5 слов в каждом
//- цвета|слова - red, blue, green, yellow, lime, magenta, black, gold, gray, tomato
//- цвет и слово не должны совпадать
//(например слово lime может быть окрашено в любой из цветов кроме lime), выбор цвета - случайный

$count = 5;
for ($i = 0; $i < $count; $i++)
{
    for ($j = 0; $j < $count; $j++)
    {
        $colors = ["red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato"];
        $num_clr = array_rand($colors, 1);
        $color = $colors[$num_clr];
        $num_txt = array_rand($colors, 1);
        $text = $colors[$num_txt];
        do {
            if ($num_clr == $num_txt){
                $num_txt = array_rand($colors, 1);
                $text = $colors[$num_txt];
            }
        } while ($num_clr == $num_txt);
        echo "<span style=\"color: $color\">$text </span>";
    }
    echo '' . '<br>';
}

