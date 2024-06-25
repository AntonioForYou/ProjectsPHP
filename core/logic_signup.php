<?php
require_once 'UserLogic.php';
require_once 'UserTable.php';

session_start();

Database::connection();

$sex = UserTable::getDropdown('sex');

$blood_type = UserTable::getDropdown('blood_type');

$factor = UserTable::getDropdown('factor');

$emptyFields = [];

if(key_exists('submit', $_POST))
{
    $emptyFields = UserLogic::validateEmptyFields($_POST);

    if(count($emptyFields) == 0)
    {
        $isValid = UserLogic::validatePassword($_POST['password']);
        $equalityPasswords = UserLogic::equalityPasswords($_POST['password'], $_POST['password_confirm']);

        if($isValid === true && $equalityPasswords === true)
        {
            $user = UserTable::get_by_email($_POST['email']);

            if($user['email'] != null)
                $emptyFields['email'] = 'Пользователь с таким email уже сущетсвует!';

            if($user['email'] == null)
            {
                UserTable::create($_POST['email'], $_POST['full_name'], $_POST['city'], $_POST['street'], $_POST['house'],
                    $_POST['apartment'], $_POST['sex'], $_POST['birth_date'], $_POST['blood_type'], $_POST['factor'],
                    $_POST['vk'], $_POST['interests'], password_hash($_POST['password'], PASSWORD_DEFAULT));

                $_SESSION['user_id'] = Database::lastInsertId();

                header('Location: analysis.php');
            }
        }

    }

}
