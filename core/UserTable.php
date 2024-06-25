<?php

class UserTable
{
    public static function create(
        $email, $full_name, $city, $street, $house, $apartment, $sex,
        $birth_date, $blood_type, $factor, $vk, $interests, $password
    )
    {
        $query = Database::prepare(
            'insert into users (email, full_name, city, street, house, apartment, sex_id, birth_date, blood_type_id,
                   factor_id, vk, interests, password)' . 'values(:email, :full_name, :city, :street, :house, :apartment, :sex,
                    :birth_date, :blood_type, :factor, :vk, :interests, :password)');
        $query->bindValue(":email", $email);
        $query->bindValue(":full_name", $full_name);
        $query->bindValue(":city", $city);
        $query->bindValue(":street", $street);
        $query->bindValue(":house", $house);$query->bindValue(":apartment", $apartment);
        $query->bindValue(":sex", $sex);
        $query->bindValue(":birth_date", $birth_date);
        $query->bindValue(":blood_type", $blood_type);
        $query->bindValue(":factor", $factor);
        $query->bindValue(":vk", $vk);
        $query->bindValue(":interests", $interests);
        $query->bindValue(":password", $password);

        if(!$query->execute())
        {
            throw new PDOException('При добавлении пользователя возникла ошибка!');
        }
    }

    public static function get_by_email($email)
    {
        $query = Database::prepare('select * from users where email=:email limit 1');
        $query->bindValue(":email", $email);
        $query->execute();

        $users = $query->fetchAll();

        if(!count($users))
        {
            return null;
        }

        return $users[0];
    }

    public static function get_by_id($id)
    {
        $query = Database::prepare('select * from users where id=:id limit 1');
        $query->bindValue(":id", $id);
        $query->execute();

        $users = $query->fetchAll();

        if(!count($users))
        {
            return null;
        }

        return $users[0]['email'];
    }

    public static function getDropdown($field)
    {
        $query = Database::prepare('select * from ' . $field);
        $query->execute();
        return $query;
    }

}