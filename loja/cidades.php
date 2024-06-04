<?php
    session_start();

    if(!isset($_SESSION["logado"]) || $_SESSION["logado"] == false){
        header("LOcation: index.php");
    }else{

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO CIDADES</title>
</head>
<body>
    <br>
    <?php require_once('menu.php'); ?>
    
      <h1>Cadastrar cidades:</h1>  

      <form method="POST" action="controller/salvarCidade.php?inserir">
            <label>Nome:</label>
            <input type="text" placeholder="Insira o nome da cidade..." name="txtNome" />
            <br><br>
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
        </form>
        <br><hr>

        <?php
            include_once ("model/clsCidade.php");
            include_once ("dao/clsCidadeDAO.php");
            include_once ("dao/clsConexao.php");

            $cidades = CidadeDAO::getCidades();

                if(count($cidades) == 0){
                    echo "<h1>Nenhuma cidade cadastrada!</h1>";
                }else{
        ?>
        <table border="2">
        <caption>Cidades cadastradas</caption>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Editar</th>
                <th>Excluir</th>    
            </tr>
            
        <?php
            foreach($cidades as $cid){
                $id = $cid->id;
                $nome=$cid->nome;
                echo "  <tr>
                            <td>$id</td>
                            <td>$nome</td>
                            <td><a href='editarCidade.php?id=$id'><button>Editar</button></a></td>
                        
                        <td><a onclick='return confirm(\"Você tem certeza que deseja apagar?\")'
                        href='controller/salvarCidade.php?excluir&id=$id'>
                                <button>Excluir</button></a></td>
                    </tr>";


            }
        ?>
        </table>
        <tr>
            <h3>Foram cadastradas <?php echo count($cidades)?> cidades até
                         <?php date_default_timezone_set("America/Sao_Paulo"); 
                         echo date("d/m/Y")?></h3>                   
        </tr> 

    <?php
    }
        if(isset($_REQUEST["nomeVazio"])){
            echo "<script> alert('O campo nome não pode ser vazio!');</script>";
        }
        if(isset($_REQUEST["nome"])){
            $nome= $_REQUEST["nome"];
            echo "<script>alert('Cidade $nome cadastrada com sucesso!');</script>";
        }
        if(isset($_REQUEST["cidadeExcluida"])){
            echo "<script>alert('Cidade excluída com sucesso!');</script>";
        }
        if(isset($_REQUEST["cidadeEditada"])){
            echo "<script>alert('Cidade editada com sucesso!');</script>";
        }
    ?>

</body>
</html>

<?php

    }

    