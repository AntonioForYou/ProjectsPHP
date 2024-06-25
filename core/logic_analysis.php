<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/index.php';


session_start();

if(key_exists('logout', $_POST))
{
    UserLogic::signOut();
}

if(!UserLogic::isAuthorized())
{
    header('Location: analysisNonAuth.php');
}

global $pdo;

try
{
    $pdo = new PDO('mysql:dbname=diagnostic_laboratory;host=127.0.0.1:3325', 'root', '');
}

catch (PDOException $exception)
{
    echo $exception->getMessage();
    die;
}

$sql = "select analysis.name, disease.name as 'diseaseName', img_path, description, cost from analysis
join disease on analysis.id_disease = disease.id";

$disease = $pdo->query("select * from disease");

$arBinds = [];

if(!key_exists('clearFilter', $_GET))
{
    if(count($_GET) > 0)
    {
        $sql .= " where 1";

        if($_GET['disease'])
        {
            $sql .= " and id_disease = :disease";
            $arBinds['disease'] = $_GET['disease'];
        }

        if($_GET['costFrom'])
        {
            $sql .= " and cost >= :costFrom";
            $arBinds['costFrom'] = $_GET['costFrom'];
        }

        if($_GET['costTo'])
        {
            $sql .= " and cost <= :costTo";
            $arBinds['costTo'] = $_GET['costTo'];
        }

        if($_GET['description'])
        {
            $sql .= " and description like '%' :description '%'";
            $arBinds['description'] = $_GET['description'];
        }

        if($_GET['analysis'])
        {
            $sql .= " and analysis.name like '%' :analysis '%'";
            $arBinds['analysis'] = $_GET['analysis'];
        }
    }
}

$stmt = $pdo->prepare($sql);

$result = $stmt->execute($arBinds);

$fullList = [];

foreach($stmt as $item)
{
    $analysisList = [
        'name' => $item['name'],
        'img_path' => $item['img_path'],
        'diseaseName' => $item['diseaseName'],
        'description' => $item['description'],
        'cost' => $item['cost']
    ];

    $fullList[] = $analysisList;
}
