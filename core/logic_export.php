<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/Database.php';

if(key_exists('button', $_POST))
{
    Database::connection();

    $query = Database::prepare('select * from analysis');

    $query->execute();

    $table = $query->fetchAll();

    $json = json_encode($table);

    $filename = 'analysis_exported.json';

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . $filename);

    echo $json;

    die();
}

