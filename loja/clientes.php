<?php
   include_once ("model/clsCidade.php");
   include_once ("dao/clsCidadeDAO.php");
   include_once ("dao/clsConexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOJA - CLIENTES</title>
</head>

<body>
      <h1>Cadastrar clientes:</h1>  
      <form method="POST" action="controller/salvarCliente.php?inserir">
            <label>Nome:</label>
            <input type="text" placeholder="Insira o nome do cliente..." name="txtNome" />
            <br><br>
            <label>Data de Nascimento:</label>
            <input type="date" name="txtNascimento" />
            <br><br>
            <label>Salário:</label>
            <input type="numer" name="txtSalario" />
            <br><br>
            <label>Cidade:</label>
                <select name="txtCidade">
                    <option value="0"> Selecione...</option>
                <?php
                 $cidades = CidadeDAO::getCidades();
                foreach($cidades as $lista){
                    echo '<option value="'.$lista->id.'">'. $lista->nome.'</option>';
                }
                ?>
                </select>
            <br><br>
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
            
        </form>
        <br><hr>

        <?php
         

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
                            <td><button>Editar</button></td>
                            <td><a href='controller/salvarCidade.php?excluir&id=$id'>
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

    ?>

</body>
</html>