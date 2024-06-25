<?php

error_reporting(0);

require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/functions.php';

if(isset($_GET['preset']))
{
    if($_GET['preset'] == 1)
    {
       $site = 'https://ru.wikipedia.org/wiki/%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8';
    }

    if($_GET['preset'] == 2)
    {
        $site = 'https://www.gazeta.ru/culture/2021/12/16/a_14322589.shtml';
    }

    if($_GET['preset'] == 3)
    {
        $site = 'https://mishka-knizhka.ru/skazki-dlay-detey/zarubezhnye-skazochniki/skazki-alana-milna/vinni-puh-i-vse-vse-vse/#glava-pervaya-v-kotoroj-my-znakomimsya-s-vinni-puhom-i-neskolkimi-pchy';
    }

    if(isset($site))
    {
        $_POST['text'] = file_get_contents($site);
    }
}

if(key_exists('submit', $_POST) && !empty($_POST['text']))
{
    $homepage = replace($_POST['text'], 'HYPHEN');
    $homepage = replace($homepage, 'MARK');
    $homepage = headings($homepage);
    $homepage = styleClass($homepage);
}

