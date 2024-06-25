<?php

function processText($text, $patterns)
{
    foreach ($patterns as $pattern => $replacement) {
        $text = preg_replace($pattern, $replacement, $text);
    }

    return $text;
}

function replace($html, $template)
{
    if($template == 'HYPHEN')
    {
        $patterns = array(
            '/\bкто то\b/u' => 'кто-то',
            '/\bгде то\b/u' => 'где-то',
            '/\bКто то\b/u' => 'Кто-то',
            '/\bГде то\b/u' => 'Где-то',

        );

    }
    elseif($template == 'MARK')
    {
        $patterns = array(
            '/!{4,}/' => '!!!',
            '/\?{4,}/' => '???',
            '/\.{4,}/' => '...',
            '/\.{2,}/' => '…',
        );
    }
    else
    {
        return null;
    }

    return processText($html, $patterns);
}

function headings($html)
{
    $dom = new DOMDocument("1.0", "UTF-8");

    $dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));

    $xpath = new DOMXPath($dom);

    $list = "<div><h1>Задание 11</h1><ul>";

    $allNodes = $xpath->query("//*[self::h1 or self::h2 or self::h3]");

    $counter = 0;

    for ($i = 0; $i < $allNodes->length; $i++)
    {
        $counter++;

        $node = $allNodes->item($i);

        $node->nodeValue = mb_strimwidth($node->nodeValue, 0, 50, '...');

        $idAttribute = $node->getAttribute("id");

        if($node->nodeName === 'h1')
        {
            $list .= "<li><a href='#$idAttribute'>{$node->nodeValue}</a>";

            if($i == $allNodes->length - 1)
            {
                $list .= "</li>";
            }
            else
            {
                $nextNode = $allNodes->item($i + 1);

                if($nextNode->nodeName === 'h1')
                {
                    $list .= "</li>";
                }

                if($nextNode->nodeName === 'h2')
                {
                    $list .= "<ul>";
                }
            }
        }

        if($node->nodeName === 'h2')
        {
            $list .= "<li><a href='#$idAttribute'>{$node->nodeValue}</a>";

            if($i == $allNodes->length - 1)
            {
                $list .= "</li></ul></li>";
            }
            else
            {
                $nextNode = $allNodes->item($i + 1);

                if($nextNode->nodeName === 'h1')
                {
                    $list .= "</li></ul></li>";
                }

                if($nextNode->nodeName === 'h2')
                {
                    $list .= "</li>";
                }

                if($nextNode->nodeName === 'h3')
                {
                    $list .= "<ul>";
                }
            }
        }

        if($node->nodeName === 'h3')
        {
            $list .= "<li><a href='#$idAttribute'>{$node->nodeValue}</a></li>";

            if($i == $allNodes->length - 1)
            {
                $list .= "</ul></li></ul></li>";
            }
            else
            {
                $nextNode = $allNodes->item($i + 1);

                if($nextNode->nodeName === 'h1')
                {
                    $list .= "</ul></li></ul></li>";
                }

                if($nextNode->nodeName === 'h2')
                {
                    $list .= "</ul></li>";
                }
            }
        }
    }

    if($counter == 0)
    {
        $list .= "<h3 style='background: red'>Заголовков не нашлось :(</h3>";
    }

    $list .= "</ul></div>";

    return $list . $dom->saveHTML();
}
function styleClass($html)
{
    $dom = new DOMDocument("1.0", "UTF-8");

    $dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));

//    $mainDom = new DOMDocument("1.0", "UTF-8");
//
//    $mainDom->loadHTML(mb_convert_encoding(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/Lab_4/text.php'), 'HTML-ENTITIES', 'UTF-8'));

    $xpath = new DOMXPath($dom);

    $elements = $xpath->query('//*[@style]');

    $uniqueStyles = array();

    $hasSimilarElements = array();

    foreach ($elements as $element)
    {
        $counter = -1;

        $style = $element->getAttribute('style');

        foreach ($elements as $likeElement)
        {
            if($style === $likeElement->getAttribute('style'))
            {
                $counter++;
            }
        }

        if($counter > 0)
        {
            $hasSimilarElements[$style] = true;
        }
    }

    foreach ($elements as $element)
    {
        $style = $element->getAttribute('style');

        if($hasSimilarElements[$style] === true)
        {
            $class = 'style-class-' . preg_replace("|[^\d\w ]+|i","",$style); //Для удаления знаков препинания.

            $class = preg_replace('/(\s+)/', '', $class); // Для удаления пробелов.

            if (!isset($uniqueStyles[$style]))
            {
                $uniqueStyles[$style] = $class;

                $existingClass = $element->getAttribute('class');

                $element->setAttribute('class', $existingClass . ' ' . $class);

                $styleTag = $dom->createElement('style');

                $styleTag->setAttribute('type', 'text/css');

                $styleTag->nodeValue = ".$class { $style }";

                $dom->appendChild($styleTag);

                //$mainDom->getElementsByTagName('head')->item(0)->appendChild($styleTag);
            } else
            {
                $element->setAttribute('class', $element->getAttribute('class') . ' ' . $uniqueStyles[$style]);
            }

            $element->removeAttribute('style');
        }
    }

    return $dom->saveHTML();
}
