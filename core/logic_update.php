<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/CrudTable.php';

$uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/CRUD/img/';


$disease = CrudTable::getDiseases();

if(isset($_POST['change']))
{
    $record = CrudTable::getRecordById($_POST['change']);

    foreach ($record as $key => $value)
    {
        $_POST[$key] = $value;
    }

    $_POST['submit'] = $_POST['change'];
}

$errors = array();

if(key_exists('submit', $_POST))
{
    foreach ($_POST as $key => $value)
    {
        if($key != 'submit' && $key != 'change')
        {
            if(empty($value))
            {
                $errors[$key] = 'Это поле обязательное для заполнения!';
            }
        }
    }

    if(empty($errors) && !empty($_FILES))
    {
        if($_FILES['setPhoto']['name'] == "")
        {
            CrudTable::update($_POST['submit'], "", $_POST['name'], $_POST['id_disease'],
                $_POST['description'], $_POST['cost']);

            $newRecord = "Запись была успешно изменена!";
        }
        else
        {
            $errorUpload = validateUploadImage();

            if($errorUpload === true)
            {
                $new_name_img = uniqid() . $_FILES['setPhoto']['name'];

                $new_path = $_SERVER['DOCUMENT_ROOT'] . '/Lab_6_7/img/' . $new_name_img;

                move_uploaded_file($_FILES['setPhoto']['tmp_name'], $new_path);

                CrudTable::update($_POST['submit'], $new_name_img, $_POST['name'], $_POST['id_disease'],
                    $_POST['description'], $_POST['cost']);

                $newRecord = "Запись была успешно изменена! Новое фото: {$_FILES['setPhoto']['name']}";
            }
        }

    }

}

function validateUploadImage()
{

    if(isset($_FILES['setPhoto']) && $_FILES['setPhoto']['error'] == UPLOAD_ERR_OK)
    {
        $type = $_FILES['setPhoto']['type'];

        if($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/jpg')
        {
            if($_FILES['setPhoto']['size'] <= 10240000)
            {
                return true;
            }
            else
            {
                return 'Размер файла не должен превышать 10 Мб';
            }
        }
        else
        {
            return 'Формат загрузки файла должен быть .jpeg или .png';
        }
    }
    else
    {
        return 'При загрузке файла возникла ошибка!';
    }
}

