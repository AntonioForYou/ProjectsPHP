<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/Database.php';
class CrudTable
{
    protected function __construct()
    {
    }
    protected function __clone()
    {
    }
    public static function create($img_path, $name, $id_disease, $description, $cost)
    {
        $query = Database::prepare("insert into analysis(img_path, name, id_disease, description, cost) 
        values (:img_path, :name, :id_disease, :description, :cost)");

        $query->bindValue(":img_path", $img_path);
        $query->bindValue(":name", $name);
        $query->bindValue(":id_disease", $id_disease);
        $query->bindValue(":description", $description);
        $query->bindValue(":cost", $cost);

        if(!$query->execute())
        {
            throw new PDOException('При добавлении записи возникла ошибка!');
        }
    }

    public static function update($id, $img_path, $name, $id_disease, $description, $cost)
    {
        if($img_path != "")
        {
            $query_img = Database::prepare("select img_path from analysis where id = $id");

            $query_img->execute();

            $last_img = $query_img->fetch();

            unlink($_SERVER['DOCUMENT_ROOT'] . '/Lab_6_7/img/' . $last_img['img_path']);

            $query = Database::prepare("update analysis set img_path = :img_path, name = :name,
                    id_disease = :id_disease, description = :description, cost = :cost where id = $id");

            $query->bindValue(":img_path", $img_path);
        }
        else
        {
            $query = Database::prepare("update analysis set name = :name,
                    id_disease = :id_disease, description = :description, cost = :cost where id = $id");
        }

        $query->bindValue(":name", $name);
        $query->bindValue(":id_disease", $id_disease);
        $query->bindValue(":description", $description);
        $query->bindValue(":cost", $cost);

        $query->execute();
    }

    public static function delete($id)
    {
        $query = Database::prepare("select img_path from analysis where id = $id");

        $query->execute();

        $record = $query->fetch();

        $img_path = $_SERVER['DOCUMENT_ROOT'] . '/Lab_6_7/img/' . $record['img_path'];

        unlink($img_path);

        $query = Database::prepare("delete from analysis where id = $id");

        $query->execute();
    }

    public static function getAllRecords()
    {
        $query = Database::prepare("select analysis.id, analysis.name, disease.name as 'diseaseName', img_path, description,
       cost from analysis join disease on analysis.id_disease = disease.id order by analysis.id");

        $query->execute();

        return $query->fetchAll();
    }

    public static function getDiseases()
    {
        $query = Database::prepare('select * from disease');

        $query->execute();

        return $query->fetchAll();
    }

    public static function getRecordById($id)
    {
        $query = Database::prepare("select * from analysis where id = $id");

        $query->execute();

        return $query->fetch();
    }
}