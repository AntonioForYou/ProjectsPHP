<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/CrudTable.php';

$disease = CrudTable::getDiseases();

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
    $errorUpload = validateUploadImage();

    if(empty($errors) && $errorUpload === true)
    {
        $new_name_img = uniqid() . $_FILES['setPhoto']['name'];

        $new_path = $_SERVER['DOCUMENT_ROOT'] . '/Lab_6_7/img/' . $new_name_img;

        move_uploaded_file($_FILES['setPhoto']['tmp_name'], $new_path);

        CrudTable::create($new_name_img, $_POST['name'], $_POST['id_disease'], $_POST['description'],
        $_POST['cost']);

        $newRecord = 'Была успешно добавлена запись!';
    }
}

function validateUploadImage()
{

    if(isset($_FILES['setPhoto']) && $_FILES['setPhoto']['error'] == UPLOAD_ERR_OK)
    {
        $type = $_FILES['setPhoto']['type'];

        if($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/jpg')
        {
            if($_FILES['setPhoto']['size'] <= 10485760)
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

