<?php
    session_start();

    require_once("db_connect.php");
    $sql = 'SELECT * FROM `table_projects`';
    $query= $db->prepare($sql);
    $query -> execute();
    $projects = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
                if( !empty($_SESSION['success']))
                {
                    echo '<div class="alert alert-success" role="alert">'
                    .$_SESSION['success'].
                  '</div>';
                    $_SESSION['success']= '';
                }

                if( !empty($_SESSION['error']))
                {
                    echo '<div class="alert alert-danger" role="alert">'
                    .$_SESSION['error'].
                  '</div>';
                  $_SESSION['error']= '';
                }
            ?>
        </div>
        <div class="row">
            <?php
                foreach($projects as $project){;
            ?>
            <div class="col-md-4 col-sm-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?=$project["project_title"];?></h5>
                            <p class="card-text"><?=$project["project_description"];?></p>
                            <p class="card-text"><a href="view_single-project.php?id=<?=$project['project_id']?>"><button type="button" class="btn btn-outline-primary">En savoir +</button></a></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div> 
            <?php
                }
            ?>
        </div> 
        <a href="form_project-add.php"><button>Ajouter un projet</button></a>
    </div>

   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>