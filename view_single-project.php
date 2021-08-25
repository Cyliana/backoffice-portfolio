<?php

if(isset($_GET['id']) && !empty($_GET['id']))
{
    require_once("db_connect.php");
    $id = strip_tags($_GET['id']);
    $sql = 'SELECT * FROM `table_projects` WHERE `project_id`=:id';
    $query= $db->prepare($sql);
    $query -> bindValue(':id',$id, PDO::PARAM_STR);
    $query -> execute();
    $project = $query->fetch();
}
else
{
    echo "Houston, nous avons un problème !";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$project['project_title']?></title>
</head>
<body>
    <h1><?=$project['project_title']?></h1>
    <h2>Description du projet</h2>
    <p><?=$project['project_description']?></p>
    <h2>Technologies utilisées</h2>
    <p><?=$project['project_technologies']?></p>
</body>
</html>