<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/index.php');

session_start();

Database::connection();

if(key_exists('submit', $_POST))
{
    $emptyFields = UserLogic::validateEmptyFields($_POST);

    if(empty($emptyFields))
    {
        $signIn = UserLogic::signIn($_POST['email'], $_POST['password']);

        if(empty($signIn))
        {
            header('Location: analysis.php');
        }
        else
        {
            $emptyFields['password'] = $signIn;
        }

    }


}
