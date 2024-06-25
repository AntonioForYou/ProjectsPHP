<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjectsPHP/core/logic_update.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление записи</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-2">
            <li class="breadcrumb-item"><a href="crud.php">Все записи</a></li>
            <li class="breadcrumb-item active" aria-current="page">Новая запись</li>
        </ol>
    </nav>
    <h1>Изменение записи</h1>
    <form class="row row-cols-lg-auto g-3 align-items-center " name="addStudent" method="post" action="update.php" enctype="multipart/form-data">
        <div class="col-4 m-2">
            <div class="input-group">
                <input value="" type="file" class="form-control" name="setPhoto" title="Фото">
            </div>
            <span class="error"><?php if(isset($errorUpload) && $errorUpload != 1) echo htmlspecialchars($errorUpload);?></span>
        </div>
        <div class="col-4 m-2">
            <div class="input-group">
                <input value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])?>" type="text" class="form-control" placeholder="Название" name="name" maxlength="60" title="Название">
            </div>
            <span class="error"><?php if(isset($errors['name'])) echo htmlspecialchars($errors['name']);?></span>
        </div>
        <div class="col-4 m-2">
            <div class="input-group">
                <select name="id_disease" class="form-select" aria-label="Тип заболевания" title="Тип заболевания">
                    <?php if(isset($disease)) foreach ($disease as $item):?>
                        <option <?php if(isset($_POST['id_disease']) && $_POST['id_disease'] == $item['id'])
                            echo 'selected="selected"'?> value="<?=$item['id']?>"><?=htmlspecialchars($item['name'])?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
        <div class="col-4 m-2">
            <div class="input-group">
                <textarea class="form-control" name="description" cols="30" rows="3" placeholder="Описание"><?php if(isset($_POST['description'])) echo htmlspecialchars($_POST['description']);?></textarea>
            </div>
            <span class="error"><?php if(isset($errors['description'])) echo htmlspecialchars($errors['description']);?></span>
        </div>
        <div class="col-4 m-2">
            <div class="input-group">
                <input value="<?php if(isset($_POST['cost'])) echo htmlspecialchars($_POST['cost']);?>" type="text" class="form-control" placeholder="Цена" name="cost" maxlength="60" title="Цена">
            </div>
            <span class="error"><?php if(isset($errors['cost'])) echo htmlspecialchars($errors['cost']);?></span>
        </div>
        <div class="col-4 m-2"><button value="<?php if(isset($_POST['submit'])) echo $_POST['submit'];?>" name="submit" class="col-4 btn btn-primary" type="submit">Отправить</button>	</div>
    </form>
</div>
<div class="container">
    <h2 class="error"><?php if(isset($newRecord)) echo $newRecord;?></h2>
</div>
</body>
</html>
