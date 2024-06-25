<?php

class UserLogic
{
    public static function isAuthorized()
    {
        return isset($_SESSION['user_id']);
    }

    public static function current()
    {
        return UserTable::get_by_id($_SESSION['user_id']);
    }

    public static function signIn($email, $password)
    {
        if(static::isAuthorized())
        {
            return 'Вы уже авторизованы!';
        }
        $user = UserTable::get_by_email($email);

        if(null == $user)
        {
            return 'Пользователь с таким email не найден';
        }

        if(!password_verify($password, $user['password']))
        {
            return 'Неверно указан пароль';
        }

        $_SESSION['user_id'] = $user['id'];

        return '';
    }

    public static function getPassword($email)
    {
        $user = UserTable::get_by_email($email);
        return $user['password'];
    }

    public static function signOut()
    {
        unset($_SESSION['user_id']);
    }

    public static function validateEmptyFields($array)
    {
        $errors = [];

        foreach ($array as $key => $value)
        {
            if(empty($value) && $key != 'submit')
            {
                $errors[$key] = 'Это поле обязательное для заполнения!';
            }
        }
        return $errors;
    }

    public static function  validatePassword($password)
    {
        return boolval(preg_match('^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,12}$^', $password));
    }

    public static function equalityPasswords($password, $password_confirm)
    {
        return boolval($password == $password_confirm);
    }
}