<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha aplicação Web</title>
</head>
<body>
    <h1>Enviar arquivo</h1>
    <form action="../uploads/upload.php" method="post"enctype="multipart/form-data">
        <p>Selecione um arquivo para enviar</p>
        <input type="file" name="arquivo" id="arquivo">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>




