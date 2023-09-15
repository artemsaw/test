<?php
	ini_set('max_execution_time', '10000'); //команда устанавливает максимальное время выполнения скрипта PHP в секундах

    set_time_limit(0); //команда снимает ограничение на время выполнения скрипта

    //Рекомендовано использовать обе команды вместе.


    ini_set('memory_limit', '2048M'); //команда устанавливает лимит оперативной памяти (в мегабайтах), выделяемой на скрипт

    ignore_user_abort(true); //Следущая команда делает так, чтобы даже если в браузере оборвут скрипт, он продолжался дальше


    preg_match('#регулярка#', $str, $match);
    //С помощью регулярок мы будем получать содержимое нужных нам тегов и атрибутов HTML страницы. В этом нам поможет функция preg_match

    preg_match('#регулярка#s', $str, $match);
    //Для того, чтобы регулярки корректно работали на HTML страницах, имеющих переносы строк, необходимо всегда использовать модификатор s

    preg_match('#регулярка#su', $str, $match);
    //Для того, чтобы регулярки корректно парсили русские буквы, необходимо поставить модификатор u

    preg_replace('#регулярка#', '', $str);
    //Также с помощью регулярок мы будем очищать тексты от лишних тегов и символов. В этом нам поможет функция preg_replace


    
    require_once '../vendor/autoload.php';

$text = '
<p>
	text1
</p>
<p>
	text2
</p>
<p>
	text3
</p>
';

$url = 'https://st-system.ru/catalog/gidroizolyatsiya/rulonnaya_krovlya_bitumnaya/';

$document_url = new \DiDom\Document($url, true, 'windows-1251');

$document_text = new \DiDom\Document($text); 

//var_dump($document->first('img')->attr('src')); - первый тег img и его аттрибут (ссылка)
//var_dump($document->first('a')->innerHtml()); - первый тег a и его html
//var_dump($document->first('.name')->innerHTML()); - первый класс name и его html
//var_dump($document->first('#block')->first('.elem')->text()); получение текста ребенка элемента

$elem = $document_text ->find('p');

foreach($elem as $key){
    echo $key->text() . "<br>";
}

//логика проста, получаем массив, перебирает элементы, к которым применяем методы

$name_of_elem = $document_url->find('.name a');

$my_domen = "https://st-system.ru";

$item_text_and_url_arr = array();

for ($i = 0; $i < count($name_of_elem); $i++){
    for ($j = 0; $j < 2; $j++){
        $item_text_and_url_arr[$i]['text'] = $name_of_elem[$i]->text(); 
        $item_text_and_url_arr[$i]['href'] = $name_of_elem[$i]->attr('href');
        
    }
}

$item_name = $item_text_and_url_arr[1]['text'];
$item_href = $item_text_and_url_arr[1]['href'];




?>


<div class="item"><?= $item_name ?></div>
<div class="item"><?= $item_href ?></div>