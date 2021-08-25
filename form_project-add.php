<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un projet</title>
</head>
<body>
    <form action="handler_project-add.php" method="post">
        <label for="input_title">Titre :</label>
        <input type="text" name="data_title" id="input_title">
        <label for="input_description">Description :</label>
        <input type="text" name="data_description" id="input_description">
        <label for="input_technologies">Technologies :</label>
        <input type="text" name="data_technologies" id="input_technologies">
        
        <input type="submit">
    </form>
</body>
</html>