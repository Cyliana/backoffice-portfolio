<?php

session_start();

if(
    isset($_POST['data_title'])        && !empty($_POST['data_title'])&&
    isset($_POST['data_description'])  && !empty($_POST['data_description'])&&
    isset($_POST['data_technologies']) && !empty($_POST['data_technologies'])
  )
{

$title = strip_tags($_POST['data_title']);
$description = strip_tags($_POST['data_description']);
$technologies= strip_tags($_POST['data_technologies']);

require_once('db_connect.php');

$sql = 'INSERT INTO `table_projects`(`project_title`,`project_description`,`project_technologies`) VALUES(:project_title,:project_description,:project_technologies)';
$query = $db -> prepare($sql);

$query -> bindValue(':project_title',$title, PDO::PARAM_STR);
$query -> bindValue(':project_description',$description, PDO::PARAM_STR);
$query -> bindValue(':project_technologies',$technologies, PDO::PARAM_STR);

$query -> execute();

// echo 'projet ajouté !';
// echo ' <a href="index.php"><button>Retour</button></a>';
$_SESSION['success'] = 'Projet ajouté';
header('Location:index.php');
}
else
{
//    echo "il y a une erreur !";
$_SESSION['error'] = 'Il y a une erreur';
header('Location:index.php');
}