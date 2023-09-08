<?php

    // $file_1 = (int)file_get_contents('1.txt');
    // $file_2 = (int)file_get_contents('2.txt');
    // $file_3 = $file_2 + $file_1;

    // file_put_contents('3.txt', $file_3);

    if (file_exists('dir1/1.txt')){
        file_get_contents($_SERVER['DOCUMENT_ROOT'] . '\dir1\1.txt');
    } else {
        echo "Файла нет!" . "<br>";
    }

    echo __FILE__ . "<br>";

    echo "Переименовывание и перемещение файлов в PHP" . "<br>";

    //rename($a, $b); //$a строе имя (путь), $b новое имя (путь)

    echo "Копирование файлов в PHP" . "<br>";

    //copy($a, $b); $a что копируем, $b куда копируем

    echo "Удаление файлов в PHP" . "<br>";
  
    //unlink('text.txt'); 'text.txt'- путь к файлу

    echo "Определение размера файлов в PHP" . "<br>";

    echo filesize('ucopy.txt') . "kb" . "<br>";

    echo "Проверка существования файлов в PHP" . "<br>";

    if(!file_exists('text.ru')) {
        echo "Файла нет!" . "<br>";
    } else {
        echo "Файл есть!" . "<br>";
    }

    echo "Создание папок в PHP" . "<br>";

    if (file_exists('Новая папка')) {
        echo "Папка есть!" . "<br>";
    } else {
        mkdir('Новая папка');             //Создание папок в PHP
    }

    echo "Удаление папок в PHP" . "<br>";

    if (file_exists('newfolder')) {
        rmdir('newfolder');             //Удаление папок в PHP
        echo "Папка удалена" . "<br>";
    } else {
        echo "Папки нет" . "<br>";
    }

    echo "Переименование папок в PHP" . "<br>";

    if(file_exists('Новая папка')){
        rename('Новая папка', "NewFolder"); //Переименование (перемещение папок rename('old', 'dir/new');) папок в PHP
        echo "Папка переименована" . "<br>";
    } else {
        echo "Папки нет" . "<br>";
    }

    echo "Чтение содержимого папки в PHP" . "<br>";

    // удаление папок с именами ".." и ".". 
    
    $scanDirectory = array_diff(scandir('dir1/dir2/dir3'), ['..', '.']);  

    foreach($scanDirectory as $key){
        echo file_get_contents('dir1/dir2/dir3/' . $key). "<br>";
    }


    echo "Отличаем папку от файла в PHP" . "<br>";

    $scanDir1 = array_diff(scandir('dir1'), ['..', '.']);

    foreach($scanDir1 as $key){
        $somePath = $key;

        if (is_file(__DIR__ . '/dir1/' . $key)){             //Некий путь к папке
            echo $key . ' - это файл' . "<br>";
            echo "содержимое файла $key: - " . file_get_contents(__DIR__ . '/dir1/' . $key) . "<br>";
        } elseif (is_dir(__DIR__ . '/dir1/' . $key)){
            echo $key . ' - это папка' . "<br>";
            echo "содержимое папки $key: это ",
            var_dump(array_diff(scandir(__DIR__ . '/dir1/' . $key), ['..', '.'])) . "<br>";
        } else {
            echo $key;
        }
    }

    echo "Отличаем папку от файла в PHP" . "<br>";

    
?>