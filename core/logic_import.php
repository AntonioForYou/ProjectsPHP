<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/UserTable.php';

$uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/ImportExportJSON/uploads/';

if(key_exists('button', $_POST))
{
    if(isset($_FILES['import_file']) && $_FILES['import_file']['error'] == UPLOAD_ERR_OK)
    {
        if($_FILES['import_file']['type'] == 'application/json')
        {
            $new_name = $uploadDir . md5($_FILES['import_file']['tmp_name']);

            move_uploaded_file($_FILES['import_file']['tmp_name'], $new_name);

            $handle = fopen($new_name, 'r');
            $content = fread($handle, filesize($new_name));
            fclose($handle);

            $json_file = json_decode($content, true);

            if(json_last_error() != JSON_ERROR_NONE)
            {
                unlink($new_name);
                $message = "<span class='error'>Неккоректное содержимое файла!</span>";
            }
            else
            {
                Database::connection();
                $numberOfRecords = UserTable::createTable($json_file);
                $message = "<span class='error'>Файл <b>{$_FILES['import_file']['name']}</b> успешно импортирован.
                Количество записей <b>{$numberOfRecords}</b></span>";
            }
        }
        else
        {
            $message = "<span class='error'>Файл должен иметь расширение <b>.json</b></span>";
        }
    }
    else
    {
        $message = "<span class='error'>Загрузите файл!</span>";
    }

}