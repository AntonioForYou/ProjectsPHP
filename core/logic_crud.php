<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/CrudTable.php';

Database::connection();

$data = CrudTable::getAllRecords();

if(key_exists('delete', $_POST))
{
    CrudTable::delete($_POST['delete']);
    header('Location: crud.php');
}

if(key_exists('change', $_POST))
{
    header('Location: update.php');
}
