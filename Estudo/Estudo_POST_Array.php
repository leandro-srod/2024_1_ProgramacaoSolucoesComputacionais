<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST ARRAY</title>
</head>
<body>

    <?php
    if(isset($_POST['acao'])){
        //echo $_POST['valor']; Recupera o último valor apenas

        //Para recuperar o Array, antes inserir [] depois de valor (name="valor[]")
        foreach($_POST['valor'] as $key => $value){
            echo $key;
            echo '=>';
            echo $value;
            echo '<br>';
        }
    }

    ?> 

    <form method="post">
        <select name="nome">
            <option value="Leandro">Leandro</option>
            <option value="Caciusclai">Caciusclai</option>
            <option value="Érico">Érico</option>
            <option value="Fernanda">Fernanda</option>
            <option value="Fabiano">Fabiano</option>
        </select>
        <input type="checkbox" name="valor[]" value="Primeiro Valor">10
        <input type="checkbox" name="valor[]" value="Segundo Valor">20
        <input type="checkbox" name="valor[]" value="30">30
        <input type="checkbox" name="valor[]" value="40">40
        <input type="submit" name="acao" value="Enviar" />

    </form>
</body>
</html>